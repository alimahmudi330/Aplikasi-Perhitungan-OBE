<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemLinearController extends Controller
{
    public function hitung()
    {
        // Data awal
        $sistem_persamaan = [
            'persamaan1' => '120X + 180Y + 240Z = 1600',
            'persamaan2' => '8X + 10Y + 15Z = 200',
            'persamaan3' => '12X + 15Y + 20Z = 340',
        ];

        // Matriks Augmented awal
        $matriks_awal = [
            [120, 180, 240, 1600],
            [8, 10, 15, 200],
            [12, 15, 20, 340]
        ];

        // Langkah eliminasi Gauss-Jordan
        $langkah = [
            'langkah0' => [
                'keterangan' => 'Matriks awal',
                'matriks' => $matriks_awal
                ],
            'langkah1' => [
                'keterangan' => 'Normalisasi baris 1',
                'matriks' => [
                    [1, 1.5, 2, 13.33],
                    [8, 10, 15, 200],
                    [12, 15, 20, 340]
                ]
            ],
            'langkah2' => [
                'keterangan' => 'Eliminasi baris 1',
                'matriks' => [
                    [1, 1.5, 2, 13.33],
                    [8, 10, 15, 200],
                    [12, 15, 20, 340]
                ]
            ],
            'langkah3' => [
                'keterangan' => 'Normalisasi baris 2',
                'matriks' => [
                    [1, 1.5, 2, 13.33],
                    [0, -2, -1, 93.33],
                    [0, -3, -4, 180]
                ]
            ],
            'langkah4' => [
                'keterangan' => 'Eliminasi baris 2',
                'matriks' => [
                    [1, 0, 1.25, 83.33],
                    [0, 1, 0.5, -46.67],
                    [0, 0, -2.5, 40]
                ]
            ],
            'langkah5' => [
                'keterangan' => 'Normalisasi baris 3',
                'matriks' => [
                    [1, 0, 1.25, 83.33],
                    [0, 1, 0.5, -46.67],
                    [0, 0, 1, -16]
                ]
            ],
            'langkah6' => [
                'keterangan' => 'Eliminasi baris 3',
                'matriks' => [
                    [1, 0, 0, 103.33],
                    [0, 1, 0, -38.67],
                    [0, 0, 1, -16]
                ]
            ],
        ];

        // Hasil akhir
        $hasil_akhir = [
            [1, 0, 0],
            [0, 1, 0],
            [0, 0, 1],
        ];

        return view('admin.dashboard', compact('sistem_persamaan', 'matriks_awal', 'langkah', 'hasil_akhir'));
    }
}
