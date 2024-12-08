<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "SELECT * FROM kendaraan WHERE id_kendaraan = $id";
$result = mysqli_query($koneksi, $query);
$mobil = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil - <?php echo $mobil['merk']; ?></title>
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
        <h2>Detail Mobil</h2>
        <p>Nama Mobil: <?php echo $mobil['merk']; ?></p>
        <p>Harga Sewa: Rp <?php echo number_format($mobil['harga'], 0, ',', '.'); ?></p>
        <p>Jenis: <?php echo $mobil['jenis']; ?></p>
        <a href="booking.php?id=<?php echo $mobil['id_kendaraan']; ?>">Sewa Sekarang</a>
    </div>
</body>
</html>
