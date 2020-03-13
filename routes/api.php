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
Route::get('entregas', 'EntregaController@index');
Route::post('entregas', 'EntregaController@store');
Route::put('entregas/{id?}', 'EntregaController@update');
Route::delete('entregas/{id?}', 'EntregaController@delete');
