<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::view('/about', 'about')->name('about');

// Route::resource('/products', ProductController::class);

// Route::apiResource('/cars', CarController::class);