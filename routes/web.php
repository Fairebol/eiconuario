<?php

use App\Http\Route;

use App\Controllers\HomeController;
use App\Middlewares\Authenticable;


// Home Routes
Route::Get('/', [HomeController::class, 'index']);

Route::Get('/course/:page', [HomeController::class, 'courses']);

// Profile-in Routes
Route::Get('/profile', [HomeController::class, 'profile'], Authenticable::class);
Route::Get('/upload', [HomeController::class, 'upload']);
Route::Post('/upload', [HomeController::class, 'store_upload']);

// others routes
Route::Get('/not-found', [HomeController::class, 'notfound']);

Route::dispatch();
