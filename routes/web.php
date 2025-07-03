<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PropertiController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/properti', [PropertiController::class, 'index'])->name('properti.index');
Route::get('/properti/{slug}', [PropertiController::class, 'show'])->name('properti.show');

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{slug}', [ArtikelController::class, 'show'])->name('artikel.show');

Route::get('/kontak', [KontakController::class, 'form'])->name('kontak.form');
Route::post('/kontak', [KontakController::class, 'kirim'])->name('kontak.kirim');
