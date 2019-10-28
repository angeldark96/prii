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

Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider')->name('social_auth');
Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home-ligth', 'HomeController@index2')->name('home-ligth');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['namespace' => 'prii'], function() {
        Route::get('crearproy', 'PriiController@index')->name('crearprii');
        Route::post("guardardata", "PriiController@guardardata")->name('guardardata');
        Route::get('listarprii', 'PriiController@listarprii')->name('listarprii');
        Route::get('showprii/{prii}', 'PriiController@showprii')->name('showprii');
    });
});