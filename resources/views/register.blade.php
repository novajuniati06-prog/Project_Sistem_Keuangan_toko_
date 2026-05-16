<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Delta Finance</title>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BOX ICON -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>

    <div class="container">

        <!-- LEFT -->
        <div class="left">

            <div class="brand">
                <h1>Delta <br> Finance</h1>

                <p>
                    Kelola keuangan bisnis Anda lebih mudah,
                    aman, dan efisien
                </p>
            </div>

            <div class="illustration">
                <img src="{{ asset('image/img.png') }}" alt="finance illustration">
            </div>

        </div>

        <!-- RIGHT -->
        <div class="right">

            <h2>Buat Akun Baru</h2>

            <p class="sub">
                Lengkapi data diri Anda untuk membuat akun Delta Finance
            </p>

            <form action="">

                <!-- NAMA -->
                <div class="form-group">

                    <label>Nama Lengkap</label>

                    <div class="input-box">
                        <i class='bx bx-user'></i>

                        <input
                            type="text"
                            placeholder="Masukkan nama lengkap Anda"
                        >
                    </div>

                </div>

                <!-- EMAIL -->
                <div class="form-group">

                    <label>Email</label>

                    <div class="input-box">
                        <i class='bx bx-envelope'></i>

                        <input
                            type="email"
                            placeholder="Masukkan Email Anda"
                        >
                    </div>

                </div>

                <!-- PASSWORD -->
                <div class="form-group">

                    <label>Kata Sandi</label>

                    <div class="input-box">
                        <i class='bx bx-lock-alt'></i>

                        <input
                            type="password"
                            placeholder="Masukkan kata sandi Anda"
                        >
                    </div>

                </div>

                <!-- KONFIRMASI -->
                <div class="form-group">

                    <label>Konfirmasi Kata Sandi</label>

                    <div class="input-box">
                        <i class='bx bx-lock-alt'></i>

                        <input
                            type="password"
                            placeholder="Ulangi kata sandi Anda"
                        >
                    </div>

                </div>

                <!-- RULES -->
                <div class="rules">

                    <p>Kata sandi harus mengandung:</p>

                    <ul>
                        <li>Minimal 8 karakter</li>
                        <li>Mengandung huruf besar dan kecil</li>
                        <li>Mengandung angka</li>
                        <li>Mengandung simbol (!@#)</li>
                    </ul>

                </div>

                <!-- TERMS -->
                <div class="terms">

                    <input type="checkbox">

                    <label>
                        Saya setuju dengan
                        <span>Syarat & ketentuan</span>
                        dan
                        <span>Kebijakan Privasi</span>
                    </label>

                </div>

                <!-- BUTTON -->
                <button type="submit" class="btn">
                    Daftar
                </button>

            </form>

        </div>

    </div>

</body>
</html>