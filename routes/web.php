<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EstimationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntroductionController;


Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/about', function () {
    return view('dashboard.about');
});

Route::get('/introduction', function () {
    return view('dashboard.introduction');
});

Route::get('/loginuser', function () {
    return view('user.loginuser');
});

Route::get('/aplikasiuser', function () {
    return view('user.aplikasiuser');
});

// Route untuk menampilkan form estimasi
Route::get('/estimasi', [EstimationController::class, 'index'])->name('estimasi.index');

// Route untuk menghitung kebutuhan bahan
Route::post('/estimasi/hitung', [EstimationController::class, 'hitungEstimasi'])->name('estimasi.hitung');

Route::get('/estimasi/dashboard', [DashboardController::class, 'index']);
Route::get('/estimasi/introduction', [IntroductionController::class, 'index']);
Route::get('/estimasi/about', [AboutController::class, 'index']);

