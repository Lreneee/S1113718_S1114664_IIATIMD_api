<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', 'Controller@login');
Route::post('register', 'Controller@register');


Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'Controller@details');
});

Route::get('/moestuinen/get', '\App\Http\Controllers\MoestuinController@index');
Route::get('/moestuin_maten/get', '\App\Http\Controllers\MoestuinMatenController@index');

Route::post('/token', 'Controller@token');
