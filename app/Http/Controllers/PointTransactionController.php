<?php

namespace App\Http\Controllers;

use App\PointTransaction;
use App\Subscriber;
use Illuminate\Http\Request;
use Auth;

class PointTransactionController extends Controller
{
    public function sum()
    {
        $subscriber = Subscriber::where('user_id', Auth::user()->id)->first();
        $sum = PointTransaction::where('subscriber_id', $subscriber->id)->sum('amount');

        return response()->json(['sum' => $sum]);
    }
}
