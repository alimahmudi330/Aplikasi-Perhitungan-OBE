<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstimationController extends Controller
{
    public function index()
{
    return view('user.aplikasiuser', [
        'jumlahFoto' => 0,
        'jumlahCermin' => 0,
        'jumlahJam' => 0,
        'jumlahRak' => 0,
    ]);
}

public function hitungEstimasi(Request $request)
{
    $jumlahFoto = $request->input('jumlah_foto', 0); // Default to 0 if null
    $jumlahCermin = $request->input('jumlah_cermin', 0);
    $jumlahJam = $request->input('jumlah_jam', 0);
    $jumlahRak = $request->input('jumlah_rak', 0);

    $kebutuhan = [
        'foto' => ['balok_kayu' => 140, 'cat' => 100, 'cermin' => 0, 'kaca' => 40],
        'cermin' => ['balok_kayu' => 140, 'cat' => 100, 'cermin' => 40, 'kaca' => 0],
        'jam' => ['balok_kayu' => 260, 'cat' => 150, 'cermin' => 0, 'kaca' => 100],
        'rak' => ['balok_kayu' => 450, 'cat' => 250, 'cermin' => 0, 'kaca' => 0],
    ];

    $totalBalokKayu = ($kebutuhan['foto']['balok_kayu'] * $jumlahFoto) +
                      ($kebutuhan['cermin']['balok_kayu'] * $jumlahCermin) +
                      ($kebutuhan['jam']['balok_kayu'] * $jumlahJam) +
                      ($kebutuhan['rak']['balok_kayu'] * $jumlahRak);

    $totalCat = ($kebutuhan['foto']['cat'] * $jumlahFoto) +
                ($kebutuhan['cermin']['cat'] * $jumlahCermin) +
                ($kebutuhan['jam']['cat'] * $jumlahJam) +
                ($kebutuhan['rak']['cat'] * $jumlahRak);

    $totalCermin = ($kebutuhan['foto']['cermin'] * $jumlahFoto) +
                   ($kebutuhan['cermin']['cermin'] * $jumlahCermin) +
                   ($kebutuhan['jam']['cermin'] * $jumlahJam) +
                   ($kebutuhan['rak']['cermin'] * $jumlahRak);

    $totalKaca = ($kebutuhan['foto']['kaca'] * $jumlahFoto) +
                 ($kebutuhan['cermin']['kaca'] * $jumlahCermin) +
                 ($kebutuhan['jam']['kaca'] * $jumlahJam) +
                 ($kebutuhan['rak']['kaca'] * $jumlahRak);

    return view('user.aplikasiuser', compact(
        'totalBalokKayu', 
        'totalCat', 
        'totalCermin', 
        'totalKaca', 
        'jumlahFoto', 
        'jumlahCermin', 
        'jumlahJam', 
        'jumlahRak'
    ));
}
}