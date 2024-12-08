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
    <title>Kontak PT Bendi Car</title>
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
    <h2>Tentang PT Bendi Car</h2>
        <p>PT Bendi Car adalah perusahaan rental mobil terpercaya yang berdiri sejak 2010. Kami menyediakan berbagai jenis mobil untuk kebutuhan pribadi maupun bisnis dengan harga terjangkau.</p>
        <p>Misi kami adalah memberikan layanan terbaik dan kenyamanan maksimal bagi pelanggan.</p>
        <h2>Hubungi Kami</h2>
        <p>Jika ada pertanyaan atau ingin melakukan booking, silakan hubungi kami melalui:</p>
        <ul>
            <li>📞 **Telepon**: 0812-3456-7890</li>
            <li>📧 **Email**: cs@ptbendicar.com</li>
            <li>🏢 **Alamat**: Jl. Merdeka No. 123, Jakarta</li>
        </ul>
    </div>
</body>
</html>
