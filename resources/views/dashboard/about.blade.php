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
                      <a class="nav-link active" aria-current="page" href="/login">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/register">Registrasi</a>
                  </li>
              </ul>
          </div>
        </div>
      </nav>

      <div class="card mt-6" style="width: 100%; max-width: 1200px; margin: auto;">
        <div class="card-body">
            <h2 class="card-title text-2xl font-semibold text-black dark:text-white">About</h2>

            <div id="docs-card-content" class="flex items-start gap-3 lg:flex-col" style="padding: 15px;">
                <h3 class="text-xl font-semibold text-black dark:text-white mt-2">Tentang Asri Pigura</h3>
                <p class="mt-2 text-base text-gray-700 dark:text-white" style="text-align: justify;">
                    Asri Pigura adalah perusahaan lokal yang mengkhususkan diri dalam pembuatan pigura berkualitas tinggi dengan desain yang elegan dan fungsional. Didirikan dengan visi untuk memperkenalkan seni dalam kehidupan sehari-hari, kami menawarkan berbagai pilihan pigura yang tidak hanya mempercantik ruangan, tetapi juga melindungi kenangan dan karya seni Anda.
                </p>
                <h3 class="text-xl font-semibold text-black dark:text-white mt-2">Visi Kami</h3>
                <p class="mt-2 text-base text-gray-700 dark:text-white" style="text-align: justify;">
                    Menjadi penyedia pigura dan kerajinan seni terkemuka di Indonesia, yang dikenal akan kualitas, desain inovatif, dan kepuasan pelanggan yang tinggi.
                </p>
                <h3 class="text-xl font-semibold text-black dark:text-white mt-2">Misi Kami</h3>
                <ul class="list-none pl-6 mt-1">
                    <li class="text-base text-gray-700 dark:text-white mt-2" style="text-align: justify;">
                        <strong>Menyediakan Pigura Berkualitas Tinggi</strong><br>
                        Kami berkomitmen untuk memberikan produk pigura yang kuat, tahan lama, dan estetis untuk memenuhi kebutuhan pelanggan.
                    </li>
                    <li class="text-base text-gray-700 dark:text-white mt-2" style="text-align: justify;">
                        <strong>Meningkatkan Nilai Estetika Ruang</strong><br>
                        Dengan berbagai pilihan desain yang elegan dan unik, kami ingin membantu Anda memperindah ruang hidup atau ruang kerja melalui pigura yang tepat.
                    </li>
                    <li class="text-base text-gray-700 dark:text-white mt-2" style="text-align: justify;">
                        <strong>Inovasi dalam Desain</strong><br>
                        Kami terus berinovasi dalam menciptakan desain pigura yang tidak hanya mengikuti tren, tetapi juga mampu menciptakan kesan yang berbeda dan berkelas.
                    </li>
                </ul>
                <h3 class="text-xl font-semibold text-black dark:text-white mt-2">Hubungi Kami</h3>
                <p class="mt-2 text-base text-gray-700 dark:text-white" style="text-align: justify;">
                    Kami selalu senang mendengar dari pelanggan kami. Jika Anda memiliki pertanyaan atau ingin memesan pigura, jangan ragu untuk menghubungi kami melalui:
                </p>
                <ul class="list-none pl-6">
                    <li class="text-base text-gray-700 dark:text-white" style="text-align: justify;">
                        <strong>Telepon:</strong> 081327214689
                    </li>
                </ul>
                <h6 class="text-xl font-semibold text-black dark:text-white">Alamat:</h6>
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.8306762620531!2d110.37860481619904!3d-7.776150170034023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59cac217d8d1%3A0xd23ba92b4b9a7448!2sPigura%20Jogja%20Karikatur!5e1!3m2!1sid!2sid!4v1734026065909!5m2!1sid!2sid"
                        referrerpolicy="no-referrer-when-downgrade"
                        width="100%" height="350" style="border:0;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
