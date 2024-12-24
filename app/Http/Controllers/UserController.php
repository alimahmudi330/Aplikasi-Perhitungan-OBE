<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // UserController.php
public function index()
{
    return view('user.dashboard'); // halaman user
}
}
