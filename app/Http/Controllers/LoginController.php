<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RegularUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('dashboard.login'); // Ganti dengan view login Anda
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Mencari pengguna di tabel users (admin)
        $user = User::where('username', $request->username)->first();


        // Jika tidak ditemukan di tabel users, coba di regular_users (user biasa)
        if (!$user) {
            $user = RegularUser::where('username', $request->username)->first();
        }

        // Memeriksa apakah pengguna ada dan password cocok
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user); // Login menggunakan Auth facade

                // Redirect ke halaman dashboard sesuai dengan jenis pengguna
                if ($user instanceof User) {
                    return redirect()->route('admin.dashboard'); // Halaman dashboard admin
                } elseif ($user instanceof RegularUser) {
                    return redirect()->route('user.dashboard'); // Halaman dashboard user biasa
                }
            } else {
                return redirect()->back()->withErrors(['password' => 'Invalid password'])->withInput();
            }
        } else {
            return redirect()->back()->withErrors(['username' => 'User not found'])->withInput();
        }

        // Jika gagal, redirect kembali dengan pesan error
        return redirect()->back()->withErrors(['credentials' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {
        // Menggunakan Auth untuk logout
        Auth::logout(); // Logout menggunakan Auth facade

        return redirect('/login'); // Ganti dengan rute halaman login Anda
    }
}
