<?php

use App\Http\Controllers\Admin\Banners\BannersController;
use App\Http\Controllers\Admin\Branches\BranchesController;
use App\Http\Controllers\Admin\CardItem\CardItemController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Establishment\EstablishmentController;
use App\Http\Controllers\Admin\Gallery\GalleryController;
use App\Http\Controllers\Admin\Settings\SettingsController;
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
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::resource('establishments', EstablishmentController::class);
    Route::resource('branches', BranchesController::class);
    Route::resource('banners', BannersController::class);
    Route::resource('testimonials', TestimonialsController::class);
    Route::resource('card-items', CardItemController::class);



    Route::resource('gallery', GalleryController::class);
    Route::get('settings', [SettingsController::class, 'settings'])->name('settings');
    Route::post('profile-settings', [SettingsController::class, 'profileSettings'])->name('profile.settings.store');
    Route::post('change-password', [SettingsController::class, 'changePassword'])->name('change.password');
});
