<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('dashboard.about'); // Sesuaikan dengan path view Anda
    }
}
