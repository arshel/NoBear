<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Location;


class ApiController extends Controller
{

    public function getLocation()
    {
        // getting all locations
        $locations = Location::get()
            ->toJson(JSON_PRETTY_PRINT);
        return response($locations, 200);
    }

    public function filterLocation($latitude, $longitude)
    {
        if (Location::where('latitude', $latitude)->where('longitude', $longitude)->exists()) { // if the location exists
            $locations = Location::selectRaw("*,
                          ( 6371 * acos( cos( radians($latitude) ) *
                            cos( radians( latitude ) )
                            * cos( radians( longitude ) - radians($longitude)
                            ) + sin( radians($latitude) ) *
                            sin( radians( latitude ) ) )
                          ) AS distance")
                // calculating latitude and longitude to km
                ->having('distance', '<=', 25)
                ->orderBy('distance')
                ->get()
                ->toJson(JSON_PRETTY_PRINT);

            return response($locations, 200);
        } else {
            return response()->json(["message" => "Location not found please try again!"], 404);
        }
    }

    public function destroyLocation(Location $locationId)
    {

        if ($locationId->exists()) {
            $locationId->delete();
            return response()->json([
                "message" => "location deleted!"
            ], 202);
        } else {
            return response()->json([
                "message" => "location not found try again!"
            ], 404);
        }
    }
}

