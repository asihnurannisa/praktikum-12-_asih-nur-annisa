<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard PT Bendi Car</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <h1>PT Bendi Car</h1>
            <nav>
                <ul>
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="mobil.php">Daftar Mobil</a></li>
                    <li><a href="booking.php">Booking</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
    <div id="home" class="hero-section">
        <h2>Jelajahi Dunia dengan Kendaraan Impian Anda!</h2>
        <p>Kami siap memberikan layanan terbaik untuk perjalanan Anda.</p>
        <a href="#promo" class="btn-cta">Lihat Promo</a>
    </div>

    <section id="promo" class="promo-section">
        <h2>Promo Hebat untuk Setiap Petualangan Anda!</h2>
        <ul>
            <li><strong>Diskon 20%</strong> untuk pemesanan lebih dari 3 hari.</li>
            <li><strong>Free Driver</strong> untuk pemesanan di akhir pekan.</li>
            <li><strong>Cashback</strong> hingga Rp 200.000 untuk pelanggan baru.</li>
        </ul>
    </section>

    <section id="keunggulan" class="keunggulan-section">
        <h2>Mengapa Memilih PT Bendi Car?</h2>
        <div class="keunggulan-grid">
            <div class="keunggulan-item">
                <h3>Armada Terbaru</h3>
                <p>Semua kendaraan kami dalam kondisi prima dan siap digunakan.</p>
            </div>
            <div class="keunggulan-item">
                <h3>Harga Transparan</h3>
                <p>Tidak ada biaya tersembunyi, Anda hanya membayar sesuai kesepakatan.</p>
            </div>
            <div class="keunggulan-item">
                <h3>Layanan 24/7</h3>
                <p>Kami selalu tersedia kapan pun Anda membutuhkan bantuan.</p>
            </div>
        </div>
    </section>

        
    <div class="grid-foto">
    <div class="grid-item">
                <img src="img/avanza.jpg" alt="Toyota Avanza">
                <p>Toyota Avanza</p>
            </div>
            <div class="grid-item">
                <img src="img/ayla.jpg" alt="Daihatsu Ayla">
                <p>Daihatsu Ayla</p>
            </div>
            <div class="grid-item">
                <img src="img/brio.jpg" alt="Honda Brio">
                <p>Honda Brio</p>
            </div>
            <div class="grid-item">
                <img src="img/mitsubisi.jpg" alt="Mitsubishi Xpander">
                <p>Mitsubishi Xpander</p>
            </div>
            <div class="grid-item">
                <img src="img/toyota.jpg" alt="Toyota Innova">
                <p>Toyota Innova</p>
            </div>
            <div class="grid-item">
                <img src="img/pajero.jpg" alt="Mitsubishi Pajero">
                <p>Mitsubishi Pajero</p>
            </div>
        </div>
        
    </div>

    </div>
</body>
</html>
