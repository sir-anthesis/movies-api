<?php

use App\Http\Controllers\Api\MovieController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));


// All routes
Route::apiResource('/user', App\Http\Controllers\Api\UserController::class);

Route::apiResource('/movie', App\Http\Controllers\Api\MovieController::class);

Route::apiResource('/watch-list', App\Http\Controllers\Api\WatchListController::class);
