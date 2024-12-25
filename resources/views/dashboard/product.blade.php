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

        .col-md-4 {
            flex: 1;
            margin: 0 15px;
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

    <div class="container">
        <h2 class="text-center mb-5">Produk Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/9.png" class="card-img-top" alt="Bingkai">
                    <div class="card-body">
                        <h5 class="card-title">Bingkai foto Kecil</h5>
                        <p class="card-text">
                            Bingkai foto kecil ini dapat digunakan untuk menghias foto-foto kecil
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/9.png" class="card-img-top" alt="Bingkai">
                    <div class="card-body">
                        <h5 class="card-title">Bingkai foto Kecil</h5>
                        <p class="card-text">
                            Bingkai foto kecil ini dapat digunakan untuk menghias foto-foto kecil
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/9.png" class="card-img-top" alt="Bingkai">
                    <div class="card-body">
                        <h5 class="card-title">Bingkai foto Kecil</h5>
                        <p class="card-text">
                            Bingkai foto kecil ini dapat digunakan untuk menghias foto-foto kecil
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3">
            © 2024 Aplikasi Perhitungan OBE
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
