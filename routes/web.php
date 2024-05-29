<?php

use App\Http\Controllers\VendorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Routes for Vendors
Route::resource('vendors', VendorController::class);

// Routes for Users
Route::resource('users', UserController::class);

// Routes for Orders
Route::resource('orders', OrderController::class);

