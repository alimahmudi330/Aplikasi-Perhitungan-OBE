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
            <div class="row g-0">
                <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
                    <div class="card" style="width: 50rem;">
                        <div class="row g-0">
                            <div class="card-body">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingName" placeholder="Nama Lengkap" required>
                                    <label for="floatingName">Nama</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingGender" aria-label="Jenis Kelamin" required>
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <label for="floatingGender">Jenis Kelamin</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="floatingPhone" placeholder="Nomor Telepon" required>
                                    <label for="floatingPhone">Nomor Telepon</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="floatingAddress" placeholder="Alamat" style="height: 100px;" required></textarea>
                                    <label for="floatingAddress">Alamat</label>
                                </div>
                                <a href="aplikasiuser" class="btn btn-dark ms-auto d-block" role="button" id="submitButton" onclick="return validateForm()">Next</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- JavaScript -->
                <script>
                    // Fungsi untuk memeriksa apakah semua input terisi
                    function validateForm() {
                        const name = document.getElementById('floatingName').value;
                        const gender = document.getElementById('floatingGender').value;
                        const phone = document.getElementById('floatingPhone').value;
                        const address = document.getElementById('floatingAddress').value;

                        // Cek apakah semua field terisi
                        if (name && gender && phone && address) {
                            return true; // Izinkan navigasi jika semua field terisi
                        } else {
                            alert('Semua field harus diisi!');
                            return false; // Mencegah navigasi jika ada field kosong
                        }
                    }

                    // Menonaktifkan tombol saat halaman dimuat
                    document.getElementById('submitButton').disabled = true;

                    // Memeriksa form saat ada perubahan di setiap input
                    const formFields = document.querySelectorAll('input, select, textarea');
                    formFields.forEach(field => {
                        field.addEventListener('input', () => {
                            // Cek apakah semua form field terisi
                            const allFilled = Array.from(formFields).every(input => input.value.trim() !== "");
                            document.getElementById('submitButton').disabled = !allFilled;
                        });
                    });
                </script>

            </div>
        </div>
    </div>
</body>
</html>
