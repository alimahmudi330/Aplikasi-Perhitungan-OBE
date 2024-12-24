<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EstimationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SistemLinearController;

// Rute untuk halaman utama (misalnya homepage)
Route::get('/', function () {
    return view('dashboard.dashboard'); 
});

// Rute untuk dashboard tanpa middleware
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

// Rute untuk about tanpa middleware
Route::get('/about', function () {
    return view('dashboard.about');
});

// Rute untuk introduction tanpa middleware
Route::get('/introduction', function () {
    return view('dashboard.introduction');
});

// Rute untuk product tanpa middleware
Route::get('/product', function () {
    return view('dashboard.product');
});

// Rute untuk login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Rute untuk registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rute untuk aplikasi user tanpa middleware
Route::get('/aplikasiuser', function () {
    return view('user.aplikasiuser');
});

// Route untuk menampilkan form estimasi
Route::get('/estimasi', [EstimationController::class, 'index'])->name('estimasi.index');

// Route untuk menghitung kebutuhan bahan
Route::post('/estimasi/hitung', [EstimationController::class, 'hitungEstimasi'])->name('estimasi.hitung');

// Rute yang memerlukan autentikasi dan peran admin
Route::middleware(['auth', \App\Http\Middleware\CheckRole::class . ':admin'])->group(function () {
    // Hanya satu rute untuk admin dashboard yang menggunakan AdminController
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Rute yang memerlukan autentikasi dan peran user
Route::middleware(['auth', \App\Http\Middleware\CheckRole::class . ':user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

// Rute estimasi dengan kontroler yang memerlukan autentikasi (jika diperlukan)
Route::middleware(['auth'])->group(function () {
    Route::get('/estimasi/dashboard', [DashboardController::class, 'index']);
    Route::get('/estimasi/introduction', [IntroductionController::class, 'index']);
    Route::get('/estimasi/about', [AboutController::class, 'index']);
    Route::get('/estimasi/product', [ProductController::class, 'index']);
});

// Rute baru untuk menghitung sistem persamaan linear, pastikan rute ini hanya sekali
Route::middleware(['auth'])->group(function () {
    Route::get('admin/sistem-linear', [SistemLinearController::class, 'hitung'])->name('admin.sistem-linear');
});
