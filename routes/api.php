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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clients', 'App\Http\Controllers\ClientController@index');
Route::get('/clients/{client}', 'App\Http\Controllers\ClientController@show');
Route::post('/clients', 'App\Http\Controllers\ClientController@store');
Route::put('/clients/{client}', 'App\Http\Controllers\ClientController@update');
Route::delete('/clients/{client}', 'App\Http\Controllers\ClientController@destroy');

Route::get('/services', 'App\Http\Controllers\ServiceController@index');
Route::get('/services/{service}', 'App\Http\Controllers\ServiceController@show');
Route::post('/services', 'App\Http\Controllers\ServiceController@store');
Route::put('/services/{service}', 'App\Http\Controllers\ServiceController@update');
Route::delete('/services/{service}', 'App\Http\Controllers\ServiceController@destroy');


// Route::get('/users', [ApiController::class, '/users']);
// Route::post('/login', [ApiController::class, '/login']);
