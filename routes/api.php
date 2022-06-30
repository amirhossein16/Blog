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

Route::post('register', [\App\Http\Controllers\API\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\API\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('posts', \App\Http\Controllers\API\PostController::class);
    Route::delete('user/{user}/deleteAllPost',[\App\Http\Controllers\API\UserController::class,'deleteAllPost']);
    Route::get('user/{user}/post',[\App\Http\Controllers\API\UserController::class,'post']);
    Route::apiResource('users', \App\Http\Controllers\API\UserController::class);
//    return $request->user();
});

