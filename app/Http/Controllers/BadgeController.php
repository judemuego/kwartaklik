<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Badge;
use App\SubscriberBadge;
use App\Subscriber;
use Auth;

class BadgeController extends Controller
{
    public function index()
    {
        $badges = Badge::all();
        $subscriber = Subscriber::select('id')->where('user_id', Auth::id())->first();
        
        $unlockedBadgeIds = SubscriberBadge::where('subscriber_id', $subscriber->id)->pluck('badge_id')->toArray();
        
        return view('frontend.pages.badges', compact('badges', 'unlockedBadgeIds'));
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

        return response()->json();
    }

    public function destroy($id)
    {
        $record = Subscriber::find($id);
        $record->delete();

        return response()->json();
    }
}
