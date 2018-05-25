<?php

// use MapsUrl;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/breweries', 'BreweryController@index')->name('brewery.index');
Route::get('/breweries/{slug}', 'BreweryController@show')->name('brewery.show');

// Route::get('/test', function () {

//     return MapsUrl::displayStreetViewPanorama(['viewpoint' => [52.4594834, 5.0356109]]);
//     return MapsUrl::search('Amsterdam', 'asdfsfsfa');

//     // $searchAction = (new \CyrildeWit\MapsUrls\Actions\SearchAction())->setQuery('Nederland Monnickendam');
//     // // $searchAction = MapsUrl::setQuery('Nederland Monnickendam');
//     // // dd(app('maps-url'));
//     // $directionAction = (new \CyrildeWit\MapsUrls\Actions\DirectionAction())->setOrigin('Monnickendam')->setDestination('Amsterdam');
//     // // $directionAction = (new \CyrildeWit\MapsUrls\DirectionAction())->setWaypointPlaceIds(['ChIJTZfQeLgFxkcRQhAYGf9HbrU', 'ChIJVXealLU_xkcRja_At0z9AGY']);

//     // $searchUrl = (new \CyrildeWit\MapsUrls\MapsUrl($searchAction));
//     // $directionUrl = (new \CyrildeWit\MapsUrls\MapsUrl($directionAction));

//     // return '<a href="'.$searchUrl->getUrl().'">'.$searchUrl->getUrl().'</a><br><br>'.
//     //        '<a href="'.$directionUrl->getUrl().'">'.$directionUrl->getUrl().'</a><br><br>'.
//     //        '<a href="'.$directionUrl->getUrl().'">'.$directionUrl->getUrl().'</a>';
//     // return $searchUrl->getUrl();
// });
