<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {

    $beers = Http::get('https://sandbox-api.brewerydb.com/v2/beers?key=' . config('services.brewerydb.key'))->json()['data'];

    dump($beers);

    return view('index')->with('beers', $beers);
});

