<?php

use App\Http\Controllers\FrontEnd\Page\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('welcomePage');
