<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PropertiController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/properti', [PropertiController::class, 'index'])->name('properti.index');
Route::get('/properti/{id}', [PropertiController::class, 'show'])->name('properti.show');

Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/artikel/{id}', [ArtikelController::class, 'show']);

Route::get('/kontak', [KontakController::class, 'form']);
Route::post('/kontak', [KontakController::class, 'kirim']);
