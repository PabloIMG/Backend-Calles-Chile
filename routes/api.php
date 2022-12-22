<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\CalleController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//? API calles.
Route::prefix('/data')->group(function () {
    Route::get('/regiones', 'App\Http\Controllers\RegionController@getRegiones');
    Route::get('/provincias/{region_id}', 'App\Http\Controllers\ProvinciaController@getProvincias');
    Route::get('/ciudades/{provincia_id}', 'App\Http\Controllers\CiudadController@getCiudades');
    Route::get('/calles/{ciudad_id}', 'App\Http\Controllers\CalleController@getCalles');
});
