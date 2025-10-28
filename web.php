<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route ke masing-masing halaman
Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/product', [PageController::class, 'product']);
Route::get('/service', [PageController::class, 'service']);
Route::get('/contact', [PageController::class, 'contact']);
