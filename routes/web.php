<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\Auth\AuthController as AdminAuthController;



use App\Http\Controllers\ProductController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('products', [ProductController::class, 'index'])->name('products');

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
});
