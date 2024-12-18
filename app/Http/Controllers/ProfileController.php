<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Yajra\Address\Entities\Region;
use Yajra\Address\Entities\Province;
use Yajra\Address\Entities\City;
use Yajra\Address\Entities\Barangay;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $regions = Region::get();
        $provinces = Province::get();
        $cities = City::get();
        $barangays = Barangay::get();
        return view('frontend.pages.profile', compact('regions', 'provinces', 'cities', 'barangays'));
    }

    public function get() {
        if (request()->ajax()) {
            $records = PointTransaction::orderBy('id', 'desc');
    
            return DataTables::eloquent($records)
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function save(Request $request) {
        $validate = $request->validate([
            'subscriber_id' => ['required', 'max:250'],
            'type' => ['required', 'max:250'],
            'transactionable_type' => ['required', 'max:250'],
            'transactionable_id' => ['required', 'max:250'],
            'amount' => ['required', 'max:250'],
            'description' => ['required', 'max:250'],
        ]);

        $request['created_by'] = Auth::user()->id;
        $request['updated_by'] = Auth::user()->id;

        $badge_type = PointTransaction::create($request->all());

        return response()->json(compact('validate'));
    }

    public function edit($id)
    {
        $data = PointTransaction::where('id', $id)->orderBy('id')->firstOrFail();
        return response()->json(compact('data'));
    }


    public function update(Request $request, $id)
    {
        PointTransaction::find($id)->update($request->all());

        return response()->json();
    }

    public function destroy($id)
    {
        $record = PointTransaction::find($id);
        $record->delete();

        return response()->json();
    }
}
