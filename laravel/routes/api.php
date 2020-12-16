<?php

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

Route::get('kamus', 'ApiKamusController@index');
Route::get('kamus/{id}', 'ApiKamusController@show');
Route::post('kamus', 'ApiKamusController@store');
Route::put('kamus/{id}', 'ApiKamusController@update');
Route::delete('kamus/{id}', 'ApiKamusController@destroy');
