<?php

namespace App\Http\Controllers;

use App\Models\RegularUser; // Model untuk pengguna biasa
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('dashboard.register'); // Ganti dengan view registrasi Anda
    }

    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:regular_users', // Pastikan unique untuk tabel users
            'email' => 'required|string|email|max:255|unique:regular_users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Buat pengguna baru di tabel users atau regular_users
        RegularUser::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password sebelum disimpan
            'role' => 'user', // Atur role sesuai kebutuhan (admin/user)
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
