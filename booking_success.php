<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
$query = "SELECT * FROM transaksi 
          JOIN kendaraan ON transaksi.id_kendaraan = kendaraan.id_kendaraan 
          WHERE username = '$username' 
          ORDER BY id_transaksi DESC LIMIT 1";

$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Booking - PT Bendi Car</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Konfirmasi Booking Mobil</h2>
        <p><strong>Nama Mobil:</strong> <?php echo $data['nama_kendaraan']; ?></p>
        <p><strong>Harga Sewa:</strong> Rp <?php echo number_format($data['harga_sewa'], 0, ',', '.'); ?> / hari</p>
        <p><strong>Tanggal Sewa:</strong> <?php echo $data['tanggal_sewa']; ?></p>
        <p><strong>Durasi Sewa:</strong> <?php echo $data['durasi']; ?> hari</p>
        <p><strong>Total Harga:</strong> Rp <?php echo number_format($data['harga_sewa'] * $data['durasi'], 0, ',', '.'); ?></p>
        <a href="dashboard.php">Kembali ke Dashboard</a>
    </div>
</body>
</html>
