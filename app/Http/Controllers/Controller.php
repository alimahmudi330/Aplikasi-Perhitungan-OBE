<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
        return view('dashboard.about'); // Sesuaikan dengan path view Anda
    }
}
