<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
route::resource('profile', 'ProfileController');
route::resource('user', 'UserController');
route::resource('berita', 'BeritaController');
route::resource('dokumen', 'DokumenController');
route::resource('video', 'VideoController');
route::resource('countdown', 'CountdownController');
Route::put('/update_password/{id}', ['as' => 'update_password', 'uses' => 'UserController@update_password']);
Route::get('/reset_password/{id}', ['as' => 'reset_password', 'uses' => 'UserController@reset_password']);
Route::get('/download_dokumen/{id}', ['as' => 'download_dokumen', 'uses' => 'DokumenController@download_dokumen']);

Auth::routes();
