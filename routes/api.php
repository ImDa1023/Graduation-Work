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

Route::get('/scores', 'ScorelistController@index');
Route::post('/scores', 'ScorelistController@store');
Route::get('/scores/{score}', 'ScorelistController@show');
Route::put('/scores/{score}', 'ScorelistController@update');
Route::delete('/scores/{score}', 'ScorelistController@destroy');