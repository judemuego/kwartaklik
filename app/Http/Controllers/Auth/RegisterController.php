<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Subscriber;
use App\PointingSystem;
use App\PointTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'referral_code' => ['string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    private function generateUserCode()
    {
        $year = Carbon::now()->year % 100;

        $lastUserCode = DB::table('users')
                          ->where('user_code', 'like', 'KK' . $year . '%')
                          ->orderByDesc('user_code')
                          ->first();

        $nextNumber = 1;
        if ($lastUserCode) {
            $lastNumber = (int)substr($lastUserCode->user_code, -7); 
            $nextNumber = $lastNumber + 1;
        }

        $userCode = 'KK' . str_pad($year, 2, '0', STR_PAD_LEFT) . str_pad($nextNumber, 7, '0', STR_PAD_LEFT);

        return $userCode;
    }

    protected function create(array $data)
    {
        $userCode = $this->generateUserCode();

        return $record = User::create([
            'email' => $data['email'],
            'username' => $data['username'],
            'user_code' => $userCode,
            'designation' => 'SUBSCRIBER',
            'password' => Hash::make($data['password']),
        ]);

        $subscriber = Subscriber::create([
            'user_id' => $record->id,
            'referral_code' => $data['referral_code'],
        ]);

        $pointingSystem_earlybird = PointingSystem::where('id', 1)->first();
        $pointingSystem_signup = PointingSystem::where('id', 2)->first();

        if ($pointingSystem_earlybird->status === 'ACTIVE') {
            PointTransaction::create([
                'subscriber_id' => $subscriber->id,
                'type' => $pointingSystem_earlybird->activity,
                'transactionable_type' => 'SUBSCRIBER',
                'transactionable_type' => $subscriber->id,
                'amount' => $pointingSystem_earlybird->coins_earned,
                'description' => $pointingSystem_earlybird->activity . ' - ' . $pointingSystem_earlybird->coins_earned,
            ]);
        }

        if ($pointingSystem_signup->status === 'ACTIVE') {
            PointTransaction::create([
                'subscriber_id' => $subscriber->id,
                'type' => $pointingSystem_signup->activity,
                'transactionable_type' => 'SUBSCRIBER',
                'transactionable_type' => $subscriber->id,
                'amount' => $pointingSystem_signup->coins_earned,
                'description' => $pointingSystem_signup->activity . ' - ' . $pointingSystem_signup->coins_earned,
            ]);
        }
    }
}
