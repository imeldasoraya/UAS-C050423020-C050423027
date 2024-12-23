<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front.index');
Route::get('/', [FrontController::class, 'index'])->name('front.index');
