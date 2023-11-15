<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// users
Route::apiResource('/users', App\Http\Controllers\Api\UserController::class);
Route::get('/user/auth/login', 'App\Http\Controllers\Api\UserLoginController@login'); 
Route::get('api_kehadiran', 'App\Http\Controllers\Api\ApiKehadiranController@getAll');
Route::post('api_kehadiran', 'App\Http\Controllers\Api\ApiKehadiranController@createHadir');
