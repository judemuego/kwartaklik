<?php

namespace App\Http\Controllers;

use App\Subscriber;
use App\User;
use Yajra\Address\Entities\Region;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ProfileController extends Controller
{
    public function index()
    {
        $regions = Region::get();
        $user = User::select('id', 'user_code')->where('id', Auth::user()->id)->first();

        $subscriber = Subscriber::select('id')->where('user_id', Auth::user()->id)->first();

        $registrationLink = "http://kwartaklikapp.opimac.com?referral_code={$user->user_code}";
        $qrCode = QrCode::size(200)->generate($registrationLink);

        return view('frontend.pages.profile', compact('regions', 'subscriber', 'qrCode'));
    }

    public function get() {
        if (request()->ajax()) {
            $records = Subscriber::orderBy('id', 'desc');
    
            return DataTables::eloquent($records)
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function edit($id)
    {
        $data = Subscriber::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('data'));
    }

    public function update(Request $request, $id)
    {
        Subscriber::find($id)->update($request->all());
        $record = Subscriber::find($id)->first();

        if($request->firstname != null && $request->lastname != null)
        {
          User::where('id', $record->user_id)->update(['name' => $request->firstname . ' ' . $request->lastname]);
        }

        return response()->json();
    }

    public function destroy($id)
    {
        $record = Subscriber::find($id);
        $record->delete();

        return response()->json();
    }
}
