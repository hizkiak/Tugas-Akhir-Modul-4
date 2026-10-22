<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return redirect()->route('laporan.create');
});

Route::get('/laporan/create', [LaporanController::class, 'create'])
    ->name('laporan.create');

Route::post('/laporan', [LaporanController::class, 'store'])
    ->name('laporan.store');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/profil', [LoginController::class, 'profile'])->name('profile');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
});
