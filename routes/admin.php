<?php

use App\Http\Controllers\Admin\Banners\BannersController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Establishment\EstablishmentController;
use App\Http\Controllers\Admin\Gallery\GalleryController;
use App\Http\Controllers\Admin\Testimonials\TestimonialsController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.loginPage');

// Custom Login| Register routes
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
// Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/signup', [LoginController::class, 'signup'])->name('signup');

// Admin routes
Route::middleware(['role:admin', 'auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::resource('establishments', EstablishmentController::class);

    Route::resource('banners', BannersController::class);
    Route::resource('testimonials', TestimonialsController::class);

    Route::resource('gallery', GalleryController::class);
});
