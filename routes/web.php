<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TraditionalMusicController;

// Halaman Beranda / Home
Route::get('/', function () {
    return view('music.home');
})->name('music.home');

// Halaman Katalog Produk
Route::get('/katalog', [TraditionalMusicController::class, 'index'])->name('music.index');

// Halaman About / History
Route::get('/about', function () {
    return view('music.about');
})->name('music.about');

// Halaman Detail Produk
Route::get('/music/{id}', [TraditionalMusicController::class, 'show'])->name('music.show');