<?php

// use DB;
// use Geocoder;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/breweries', function (Request $request) {
    $search = $request->input('search') ?? '';
    $radius = $request->input('radius') ?? 10;

    $userLocation = Geocoder::getCoordinatesForAddress($search);

    $string = "SELECT id, name, ( 6371 * acos( cos( radians(?) ) *
    cos( radians( lat ) ) * cos( radians( lng ) - radians(?) ) + sin( radians(?) ) * sin( radians( lat ) ) ) )
    AS distance FROM breweries HAVING distance < ? ORDER BY distance LIMIT 0 , 20;";
    $args = [$userLocation['lat'], $userLocation['lng'], $userLocation['lat'], $radius];

    $data = DB::select($string, $args);

    return $data;
});
