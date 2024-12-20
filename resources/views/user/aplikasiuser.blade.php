<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Aplikasi Perhitungan OBE</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="dashboard">ASRI PIGURA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="introduction">Introduction</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Registrasi</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Content -->
    <div class="container mt-5">
        <h1 class="mb-4">Form Input Estimasi Kebutuhan Bahan</h1>
        <form action="{{ route('estimasi.hitung') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="jumlah_foto" class="form-label">Jumlah Bingkai Foto</label>
                <input type="number" id="jumlah_foto" name="jumlah_foto" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jumlah_cermin" class="form-label">Jumlah Bingkai Cermin</label>
                <input type="number" id="jumlah_cermin" name="jumlah_cermin" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jumlah_jam" class="form-label">Jumlah Bingkai Jam Dinding</label>
                <input type="number" id="jumlah_jam" name="jumlah_jam" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jumlah_rak" class="form-label">Jumlah Rak Dinding</label>
                <input type="number" id="jumlah_rak" name="jumlah_rak" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Hitung Kebutuhan</button>
        </form>

        <!-- Tampilkan Hasil Inputan -->
        <h3 class="mt-3">Hasil Inputan</h3>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>Bingkai Foto</td>
                      <td>{{ $jumlahFoto ?? 0 }}</td>
                  </tr>
                  <tr>
                      <td>Bingkai Cermin</td>
                      <td>{{ $jumlahCermin ?? 0 }}</td>
                  </tr>
                  <tr>
                      <td>Bingkai Jam Dinding</td>
                      <td>{{ $jumlahJam ?? 0 }}</td>
                  </tr>
                  <tr>
                      <td>Rak Dinding</td>
                      <td>{{ $jumlahRak ?? 0 }}</td>
                  </tr>
                </tbody>
            </table>
        <!-- Tampilkan Hasil Inputan dan Estimasi -->
        @if(isset($totalBalokKayu) && isset($totalCat) && isset($totalCermin) && isset($totalKaca))
        <div class="mt-5">
            <h2>Hasil Estimasi Kebutuhan Bahan</h2>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Bahan</th>
                        <th>Total Kebutuhan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Balok Kayu (cm)</td>
                        <td>{{ $totalBalokKayu }}</td>
                    </tr>
                    <tr>
                        <td>Cat (ml)</td>
                        <td>{{ $totalCat }}</td>
                    </tr>
                    <tr>
                        <td>Cermin (cm)</td>
                        <td>{{ $totalCermin }}</td>
                    </tr>
                    <tr>
                        <td>Kaca (cm)</td>
                        <td>{{ $totalKaca }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3">
            © 2024 Aplikasi Perhitungan OBE
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFyD6jtyF7gXe0F5YwFu2OeDOeF1YkzO27p03D2C5IS8nEgx2Im9iT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhG81rKrAAd3xyT4GO7aonE6paj4lzo14I7Ry0Qcql1LKA/8xU91F1KNj0gD" crossorigin="anonymous"></script>
</div>
</body>
</html>
