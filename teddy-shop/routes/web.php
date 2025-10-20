<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');

// Tìm kiếm sản phẩm
Route::get('/search', [HomeController::class, 'search'])->name('search');
