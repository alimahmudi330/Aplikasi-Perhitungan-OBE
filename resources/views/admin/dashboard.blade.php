<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard Admin</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    <h1 class="text-center my-4">Selamat Datang Di Halaman Admin!</h1>
</div>
</nav>
    <!-- Form Input Bahan Baku -->
    <div class="container mt-5">
        <h1 class="mb-4">Input Bahan Baku</h1>
        <form action="{{ route('estimasi.hitung') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="balok_kayu" class="form-label">Balok Kayu (cm):</label>
                <input type="number" id="balok_kayu" name="balok_kayu" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="lem" class="form-label">Lem (ml):</label>
                <input type="number" id="lem" name="lem" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="cat" class="form-label">Cat (ml):</label>
                <input type="number" id="cat" name="cat" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
    </div>

    <!-- Hasil Perhitungan Sistem Persamaan Linear -->
    <div class="container mt-5">
        <h1>Hasil Perhitungan Sistem Persamaan Linear</h1>

        <!-- Sistem Persamaan Linear -->
        <div class="mt-4">
            <h3>Sistem Persamaan Linear</h3>
            <ul class="list-group">
                @foreach ($sistem_persamaan as $persamaan)
                    <li class="list-group-item">{{ $persamaan }}</li>
                @endforeach
            </ul>
        </div>

        <!-- Matriks Augmented -->
        <div class="mt-4">
            <h3>Matriks Augmented</h3>
            <table class="table table-bordered">
                @foreach ($matriks_awal as $baris)
                    <tr>
                        @foreach ($baris as $elemen)
                            <td>{{ $elemen }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>

        <!-- Langkah-langkah Eliminasi Gauss-Jordan -->
        <div class="mt-4">
            <h3>Langkah-langkah Eliminasi Gauss-Jordan</h3>
            @foreach ($langkah as $step)
                <h4 class="mt-3">{{ $step['keterangan'] }}</h4>
                <table class="table table-bordered">
                    @foreach ($step['matriks'] as $baris)
                        <tr>
                            @foreach ($baris as $elemen)
                                <td>{{ number_format($elemen, 2) }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            @endforeach
        </div>

        <!-- Matriks Identitas (Hasil Akhir) -->
        <div class="mt-4">
            <h3>Matriks Identitas (Hasil Akhir)</h3>
            <table class="table table-bordered">
                @foreach ($hasil_akhir as $baris)
                    <tr>
                        @foreach ($baris as $elemen)
                            <td>{{ number_format($elemen, 2) }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>

        <!-- Hasil Estimasi Jumlah Bingkai -->
        @if(isset($jumlahBingkaiKecil) && isset($jumlahBingkaiSedang) && isset($jumlahBingkaiBesar))
            <div class="mt-5">
                <h2>Hasil Estimasi Jumlah Bingkai Foto</h2>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>Ukuran Bingkai</th>
                            <th>Jumlah Bingkai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bingkai Foto Kecil</td>
                            <td>{{ $jumlahBingkaiKecil }}</td>
                        </tr>
                        <tr>
                            <td>Bingkai Foto Sedang</td>
                            <td>{{ $jumlahBingkaiSedang }}</td>
                        </tr>
                        <tr>
                            <td>Bingkai Foto Besar</td>
                            <td>{{ $jumlahBingkaiBesar }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3">
            &copy; 2024 Aplikasi Perhitungan OBE
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFyD6jtyF7gXe0F5YwFu2OeDOeF1YkzO27p03D2C5IS8nEgx2Im9iT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhG81rKrAAd3xyT4GO7aonE6paj4lzo14I7Ry0Qcql1LKA/8xU91F1KNj0gD" crossorigin="anonymous"></script>

</body>
</html>
