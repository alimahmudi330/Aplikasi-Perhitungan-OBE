<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstimationController extends Controller
{
    public function hitungEstimasi(Request $request)
    {
        // Jika ada permintaan POST, lakukan perhitungan
        if ($request->isMethod('post')) {
            // Ambil input bahan baku dari user
            $balok_kayu = $request->input('balok_kayu');
            $lem = $request->input('lem');
            $cat = $request->input('cat');

            // Matriks koefisien dari persamaan
            // Setiap ukuran bingkai membutuhkan jumlah bahan baku tertentu
            $A = [
                [120, 180, 240], // Balok Kayu
                [8, 10, 15],     // Lem
                [12, 15, 20],    // Cat
            ];

            // Matriks hasil (stok bahan baku yang tersedia)
            $B = [$balok_kayu, $lem, $cat];

            // Metode Gauss-Jordan untuk menyelesaikan sistem persamaan linear
            $result = $this->gaussJordan($A, $B);

            // Kirimkan hasil ke view
            return view('user.aplikasiuser', [
                'balok_kayu' => $balok_kayu,
                'lem' => $lem,
                'cat' => $cat,
                'jumlahBingkaiKecil' => $result[0],
                'jumlahBingkaiSedang' => $result[1],
                'jumlahBingkaiBesar' => $result[2],
            ]);
            // Redirect ke halaman admin.dashboard setelah menghitung
            //return redirect()->route('admin.dashboard')->with('success', 'Kebutuhan berhasil dihitung!');
        }

        return view('user.aplikasiuser');
    }

    private function gaussJordan($A, $B)
    {
        // Menyusun matriks augmented (A|B)
        $n = count($A);
        for ($i = 0; $i < $n; $i++) {
            array_push($A[$i], $B[$i]);
        }

        // Eliminasi Gauss-Jordan
        for ($i = 0; $i < $n; $i++) {
            // Membagi baris dengan elemen diagonal (pivot)
            $pivot = $A[$i][$i];
            if ($pivot == 0) {
                throw new \Exception("Pivot nol ditemukan.");
            }

            // Normalisasi baris pivot
            for ($j = 0; $j < $n + 1; $j++) {
                $A[$i][$j] /= $pivot;
            }

            // Eliminasi kolom
            for ($k = 0; $k < $n; $k++) {
                if ($k != $i) {
                    $factor = $A[$k][$i];
                    for ($j = 0; $j < $n + 1; $j++) {
                        $A[$k][$j] -= $A[$i][$j] * $factor;
                    }
                }
            }
        }

        // Mengambil solusi dari matriks augmented
        $sol = [];
        for ($i = 0; $i < $n; $i++) {
            $sol[] = $A[$i][$n];
        }

        return $sol;
    }
}
