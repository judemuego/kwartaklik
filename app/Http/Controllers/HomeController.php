<?php

namespace App\Http\Controllers;

use App\Subscriber;
use App\User;
use Yajra\Address\Entities\Region;
use Yajra\DataTables\Facades\DataTables;
use Auth;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $regions = Region::get();
        $user = User::select('id', 'user_code')->where('id', Auth::user()->id)->first();

        $subscriber = Subscriber::select('id')->where('user_id', Auth::user()->id)->first();

        $registrationLink = "http://kwartaklikapp.opimac.com?referral_code={$user->user_code}";
        $qrCode = QrCode::size(200)->generate($registrationLink);

        return view('frontend.pages.profile', compact('regions', 'subscriber', 'qrCode'));
    }
}
