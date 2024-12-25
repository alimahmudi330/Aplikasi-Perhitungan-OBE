<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Aplikasi Perhitungan OBE</title>
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            border-bottom: 3px solid #f8f9fa;
            object-fit: cover;
            height: 200px;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.25rem;
            color: #6c757d;
            margin-bottom: 1.5rem;
        }

        .container {
            margin-top: 30px;
        }

        .col-md-6 {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .col-md-6 img {
            max-width: 100%;
            height: auto;
        }
    </style>
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
                        <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/introduction">Introduction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/aplikasiuser">Estimasi</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Login Admin</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-start" style="height: 100vh;">
        <div class="card" style="width: 50rem;">
            <div class="row g-0">
                <div class="col-12 text-center mb-4">
                    <h2 class="text-2xl font-semibold text-black dark:text-white">
                        Proses Pembuatan Bingkai Foto
                    </h2>
                </div>

                <!-- Step 1 -->
                <div class="col-md-6">
                    <img src="img/5.png" class="card-img-top" alt="Proses Potong Kayu">
                </div>
                <div class="col-md-6">
                    <div class="card-body" style="text-align: justify;">
                        <p class="text-black dark:text-white">
                            Potong balok kayu yang telah tersedia sebelumnya dengan ukuran bingkai sesuai dengan ukuran yang telah ditentukan (40cm x 2 / 30cm x 2). Ujung-ujung kayu bisa dipotong miring 45° bertujuan untuk hasil yang lebih rapi.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-6">
                    <img src="img/6.png" class="card-img-top" alt="Proses Lem Kayu">
                </div>
                <div class="col-md-6">
                    <div class="card-body" style="text-align: justify;">
                        <p class="text-black dark:text-white">
                            Kemudian setiap ujung balok kayu yang akan dibuat menjadi bingkai foto diberi lem guna menyatukan setiap balok yang telah disusun sedemikian rupa.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-6">
                    <img src="img/7.png" class="card-img-top" alt="Lem Kering">
                </div>
                <div class="col-md-6">
                    <div class="card-body" style="text-align: justify;">
                        <p class="text-black dark:text-white">
                            Guna mendapatkan hasil maksimal, sebelum memulai tahap selanjutnya perlu dipastikan lem kering terlebih dahulu. Saat lem kering hasilnya seperti di gambar.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-md-6">
                    <img src="img/8.png" class="card-img-top" alt="Pemasangan Penutup Kayu">
                </div>
                <div class="col-md-6">
                    <div class="card-body" style="text-align: justify;">
                        <p class="text-black dark:text-white">
                            Pasang penutup kayu di belakang guna menutup salah satu sisi kayu, di bagian ini diperlukan lem lagi guna mendapatkan hasil maksimal yang siap jual.
                        </p>
                    </div>
                </div>

                <!-- Final Step -->
                <div class="col-md-6">
                    <img src="img/9.png" class="card-img-top" alt="Bingkai Foto Selesai">
                </div>
                <div class="col-md-6">
                    <div class="card-body" style="text-align: justify;">
                        <p class="text-black dark:text-white">
                            Bagian penyelesaian figura menggunakan cat kayu. Setelah lem kering, bingkai foto siap digunakan/dijual, sebagai contoh hasil pembuatan bingkai foto seperti ini (jika sudah dipasangkan sebuah foto).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
