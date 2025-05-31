<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApoTrack - Kelola Apotek Modern</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #a18cd1, #fbc2eb);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero {
            padding: 100px 0;
            text-align: center;
            color: #fff;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
            margin-top: 1rem;
        }
        .cta-buttons a {
            margin: 10px;
        }
        .feature-box {
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
            background: #fff;
            transition: 0.3s;
        }
        .feature-box:hover {
            transform: translateY(-5px);
        }
        footer {
            background: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Selamat Datang di ApoTrack</h1>
            <p>Kelola data obat, stok, dan penjualan apotek Anda secara efisien dan modern.</p>
            <div class="cta-buttons">
                <a href="{{ route('login') }}" class="btn btn-light btn-lg">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Daftar</a>
            </div>
        </div>
    </section>

    <!-- Fitur Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <h4>Manajemen Obat</h4>
                        <p>Catat data obat dengan foto, stok, dan tanggal kadaluarsa.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <h4>Sistem Stok</h4>
                        <p>Pantau jumlah stok obat dan lakukan pembaruan secara berkala.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <h4>Informasi Obat</h4>
                        <p>Lihat detail obat seperti jenis, jumlah tersedia, dan status kedaluwarsa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 ApoTrack. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
