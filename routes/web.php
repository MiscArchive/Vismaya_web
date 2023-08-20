<?php

use App\Http\Controllers\FrontEnd\Page\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('welcomePage');

Route::get('/{slug}', [PageController::class, 'branch'])->name('establishment');
