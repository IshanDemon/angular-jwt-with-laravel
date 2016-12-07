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

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');

// Demo Route
//localhost:8000/api/authenticate?email=ryanchenkie@gmail.com&password=secret (use this url in with post request you can use postman for this purpose)
//eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9hcGlcL2F1dGhlbnRpY2F0ZSIsImlhdCI6MTQ4MDkyMTE3NywiZXhwIjoxNDgwOTI0Nzc3LCJuYmYiOjE0ODA5MjExNzcsImp0aSI6ImZkOTQ2ZDBiMGMzNzhkNDRjNDQxN2U5ZDc1MTViOGE2In0.8W-Cyap2IG7T_sP_oPrejg0mTE4xBKf6ny-tOgZtY3s
Route::group(['prefix' => 'api'], function() {
    Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
    Route::post('authenticate', 'AuthenticateController@authenticate');
});
