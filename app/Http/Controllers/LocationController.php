<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Address\Entities\Region;
use Yajra\Address\Entities\Province;
use Yajra\Address\Entities\City;
use Yajra\Address\Entities\Barangay;

class LocationController extends Controller
{
    public function getProvinces($region_id)
    {
        return response()->json(Province::where('region_id', $region_id)->get());
    }

    public function getCities($province_id)
    {
        return response()->json(City::where('province_id', $province_id)->get());
    }

    public function getBarangays($city_id)
    {
        return response()->json(Barangay::where('city_id', $city_id)->get());
    }
}
