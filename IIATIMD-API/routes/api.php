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

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'Controller@details');

Route::post('/moestuinen/add', '\App\Http\Controllers\MoestuinController@store');

    Route::get('/moestuinen/get', '\App\Http\Controllers\MoestuinController@index');
    Route::get('/moestuin_maten/get', '\App\Http\Controllers\MoestuinMatenController@index');

    Route::get('/moestuin_maten', '\App\Http\Controllers\MoestuinMatenController@index');

    Route::put('/moestuin_eigenschappen/update', '\App\Http\Controllers\MoestuinToegevoegdeZaadjesController@update');

    Route::get('/zaadjes_eigenschappen', '\App\Http\Controllers\ZaadjesEigenschappenController@index');
});
Route::post('/moestuin/details', '\App\Http\Controllers\MoestuinController@getMoestuin');
Route::post('/toegevoegde_zaadjes', '\App\Http\Controllers\MoestuinToegevoegdeZaadjesController@index');
Route::post('/zaadje_moestuin', '\App\Http\Controllers\MoestuinToegevoegdeZaadjesController@store');

Route::get('/zaadjes', '\App\Http\Controllers\ZaadjesController@index');
Route::get('/tips', '\App\Http\Controllers\TipsController@index');
Route::get('/moestuinen', '\App\Http\Controllers\MoestuinController@index');

Route::post('login', 'Controller@login');
Route::post('register', 'Controller@register');

Route::post('/token', 'Controller@token');
