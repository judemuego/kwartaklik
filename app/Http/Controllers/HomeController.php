<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Yajra\Address\Entities\Region;
use Yajra\DataTables\Facades\DataTables;
use Auth;
use Illuminate\Http\Request;

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
        $subscriber = Subscriber::select('id')->where('user_id', Auth::user()->id)->first();
        return view('frontend.pages.profile', compact('regions', 'subscriber'));
    }
}
