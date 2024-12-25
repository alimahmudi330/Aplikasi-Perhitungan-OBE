<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SistemLinearController;

class AdminController extends Controller
{
    // AdminController.php
    public function index()
    {
        $sistemLinearController = new SistemLinearController();
        
        // Memanggil metode hitung untuk mendapatkan data
        $data = $sistemLinearController->hitung();
    
        // Pastikan data dikirim dalam bentuk array
        return view('admin.dashboard', [
            'sistem_persamaan' => $data['sistem_persamaan'],
            'matriks_awal' => $data['matriks_awal'],
            'langkah' => $data['langkah'],
            'hasil_akhir' => $data['hasil_akhir'],
            'jumlahBingkaiKecil' => $data['jumlahBingkaiKecil'] ?? null,
            'jumlahBingkaiSedang' => $data['jumlahBingkaiSedang'] ?? null,
            'jumlahBingkaiBesar' => $data['jumlahBingkaiBesar'] ?? null,
        ]);
    }
    
}
