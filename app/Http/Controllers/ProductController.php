<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.product'); // Sesuaikan dengan path view Anda
    }
}
