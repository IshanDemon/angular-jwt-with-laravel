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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('index');
});
require (__DIR__ . '/api.php');
//Route::group(['prefix' => 'api'], function() {
//    Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
//    Route::post('authenticate', 'AuthenticateController@authenticate');
//});
