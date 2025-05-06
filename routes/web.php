<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PropertiController;

Route::get('/', function () {
    return view('home.index');
});

// Route::get('/properti', [PropertiController::class, 'index']);
// Route::get('/properti/{id}', [PropertiController::class, 'show']);
Route::get('/properti', function () {
    return view('properti.index');
});


Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/artikel/{id}', [ArtikelController::class, 'show']);

Route::get('/kontak', [KontakController::class, 'form']);
Route::post('/kontak', [KontakController::class, 'kirim']);