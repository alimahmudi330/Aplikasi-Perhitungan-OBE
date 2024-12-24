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
        <div class="card" style="width: 30rem;">
            <div class="row g-0">
                <div class="card-body">
                    <h5 class="card-title">Registrasi Pengguna</h5>

                    <!-- Menampilkan pesan sukses jika ada -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Menampilkan pesan error jika ada -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <!-- Form Registrasi -->
                    <form action="{{ route('register') }}" method="POST" id="registrationForm">
                        @csrf <!-- Token CSRF untuk keamanan -->
                        
                        <!-- Input untuk Nama Lengkap -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingName" name="name" placeholder="Nama Lengkap" required>
                            <label for="floatingName">Nama</label>
                        </div>

                        <!-- Input untuk Username -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingUsername" name="username" placeholder="Username" required>
                            <label for="floatingUsername">Username</label>
                        </div>

                        <!-- Input Untuk Email -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingUsername" name="email" placeholder="Email" required>
                            <label for="floatingEmail">Email</label>
                        </div>

                        <!-- Input untuk Password -->
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>

                        <!-- Input untuk Konfirmasi Password -->
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingConfirmPassword" name="password_confirmation" placeholder="Konfirmasi Password" required>
                            <label for="floatingConfirmPassword">Konfirmasi Password</label>
                        </div>

                        <!-- Tombol Next -->
                        <button type="submit" class="btn btn-dark d-block mx-auto">register</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    // Fungsi untuk memeriksa apakah semua input terisi
    function validateForm() {
        const name = document.getElementById('floatingName').value;
        const username = document.getElementById('floatingUsername').value;
        const email = document.getElementById('floatingEmail').value;
        const password = document.getElementById('floatingPassword').value;
        const confirmPassword = document.getElementById('floatingConfirmPassword').value;

        // Cek apakah semua field terisi
        if (!name || !username || !password || !confirmPassword) {
            alert('Semua field harus diisi!');
            return false; // Mencegah navigasi jika ada field kosong
        }

        // Cek apakah password dan konfirmasi password cocok
        if (password !== confirmPassword) {
            alert('Password dan Konfirmasi Password tidak cocok!');
            return false; // Mencegah navigasi jika password tidak cocok
        }

        return true; // Izinkan navigasi jika semua validasi berhasil
    }

    // Menonaktifkan tombol saat halaman dimuat
    document.getElementById('submitButton').disabled = true;

    // Memeriksa form saat ada perubahan di setiap input
    const formFields = document.querySelectorAll('input');
    formFields.forEach(field => {
        field.addEventListener('input', () => {
            // Cek apakah semua form field terisi
            const allFilled = Array.from(formFields).every(input => input.value.trim() !== "");
            document.getElementById('submitButton').disabled = !allFilled;
        });
    });
</script>

</body>
</html>
