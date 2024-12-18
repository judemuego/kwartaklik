<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Address\Entities\Region;
use Yajra\Address\Entities\Province;
use Yajra\Address\Entities\City;
use Yajra\Address\Entities\Barangay;

class LocationController extends Controller
{
    public function getRegions()
    {
        $regions = Region::all();
        return response()->json($regions);
    }
    
    public function getProvinces($region_id)
    {
        $provinces = Province::where('region_id', $region_id)->get();
        return response()->json($provinces);
    }
    
    public function getCities($province_id)
    {
        $cities = City::where('province_id', $province_id)->get();
        return response()->json($cities);
    }
    
    public function getBarangays($city_id)
    {
        $barangays = Barangay::where('city_id', $city_id)->get();
        return response()->json($barangays);
    }
}
