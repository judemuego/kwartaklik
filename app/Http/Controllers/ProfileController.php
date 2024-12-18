<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Yajra\Address\Entities\Region;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $regions = Region::get();
        $subscriber = Subscriber::select('id')->where('user_id', Auth::user()->id)->first();
        return view('frontend.pages.profile', compact('regions', 'subscriber'));
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
