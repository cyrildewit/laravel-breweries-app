<?php

namespace App\Http\Controllers\Front;

use DB;
use Geocoder;
// use DistanceMatrix;
use App\Models\Brewery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BreweryController extends Controller
{
    public function index(Request $request)
    {
        $radius = $request->input('radius') ?? 10;
        $userLocation = null;

        if ($search = $request->input('search')) {
            $userLocation = Geocoder::getCoordinatesForAddress($search);

            $string = "SELECT id, name, ( 6371 * acos( cos( radians(?) ) *
                    cos( radians( lat ) ) * cos( radians( lng ) - radians(?) ) + sin( radians(?) ) * sin( radians( lat ) ) ) )
                    AS distance FROM breweries HAVING distance < ? ORDER BY distance LIMIT 0 , 20;";
            $args = [$userLocation['lat'], $userLocation['lng'], $userLocation['lat'], $radius];

            $nearbyBreweries = collect(DB::select($string, $args));
            $breweries = Brewery::find($nearbyBreweries->pluck('id'));

            foreach ($breweries as $brewery) {
                foreach ($nearbyBreweries as $nearbyBreweries) {
                    $brewery->setDistance($nearbyBreweries->distance);
                }
            }
        } else {
            $breweries = Brewery::all();
        }

        return view('front.brewery.index', [
            'breweries' => $breweries,
            'userLocation' => $userLocation,
        ]);
    }
}
