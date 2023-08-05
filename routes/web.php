<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\FrontEnd\Curriculum\CurriculumController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::prefix('curriculum')->group(function () {
    Route::get('/{slug}', [CurriculumController::class, 'index']);
});
Route::get('about', [PageController::class, 'about'])->name('aboutpage');
Route::get('/', [PageController::class, 'home'])->name('homepage');
Route::get('contact', [PageController::class, 'contact'])->name('contactpage');
Route::get('admission', [PageController::class, 'admissionpage'])->name('admissionpage');
Route::post('admissionform', [AdmissionController::class, 'admissionForm'])->name('admissionForm');
Route::post('contactform', [PageController::class, 'contactForm'])->name('contactForm');
Route::get('image-gallery', [PageController::class, 'imageGallery'])->name('image.gallery');
Route::get('video-gallery', [PageController::class, 'videoGallery'])->name('video.gallery');

