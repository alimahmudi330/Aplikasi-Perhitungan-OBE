<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/about', function () {
    return view('dashboard/about');
});

Route::get('/introduction', function () {
    return view('dashboard/introduction');
});

Route::get('/loginuser', function () {
    return view('user/loginuser');
});

Route::get('/aplikasiuser', function () {
    return view('user/aplikasiuser');
});