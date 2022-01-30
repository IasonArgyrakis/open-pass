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

Route::post("/password",[\App\Http\Controllers\PasswordController::class, 'store']);
Route::put("/password/{id}",[\App\Http\Controllers\PasswordController::class, 'update']);
Route::delete("/password/{id}",[\App\Http\Controllers\PasswordController::class, 'destroy']);
Route::get("/password/{id}",[\App\Http\Controllers\PasswordController::class, 'show']);
