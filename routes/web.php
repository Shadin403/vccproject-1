<?php

use App\Http\Controllers\Backend\AdminPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\RegisteredUserController;
use App\Http\Controllers\Backend\AuthenticatedSessionController;
use App\Http\Controllers\Frontend\PagesController;

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('products', [PagesController::class, 'productsListing'])->name('products');

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'storeUser'])->name('register.store');

    Route::get('login', [AuthenticatedSessionController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'login'])->name('login.store');

    //admin Login
    Route::get('admin/login', [AuthenticatedSessionController::class, 'showLoginForm'])->name('admin.login');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'logout'])->name('logout');
});


// Customer Routes

Route::middleware('auth')->prefix('customer')->group(function () {
    Route::get('dashboard', [PagesController::class, 'customerDashboard'])->name('customer.dashboard');
});

// Admin Routes

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('dashboard', [AdminPageController::class, 'index'])->name('admin.dashboard');
});
