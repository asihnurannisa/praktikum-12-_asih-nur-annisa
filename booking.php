<?php
include 'koneksi.php';
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['submit'])) {
    // Ambil data dari form
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $durasi = $_POST['durasi'];
    $username = $_SESSION['username'];

    try {
        // Query untuk memasukkan data booking
        $query = "INSERT INTO transaksi (id_kendaraan, username, tanggal_pinjam, durasi) 
                  VALUES (:id_kendaraan, :username, :tanggal_pinjam, :durasi)";
        
        // Siapkan statement dengan PDO
        $stmt = $conn->prepare($query);

        // Bind parameter dengan nilai yang diterima dari form
        $stmt->bindParam(':id_kendaraan', $id, PDO::PARAM_INT);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':tanggal_pinjam', $tanggal_pinjam, PDO::PARAM_STR);
        $stmt->bindParam(':durasi', $durasi, PDO::PARAM_INT);

        // Eksekusi query
        $stmt->execute();

        // Tampilkan pesan sukses jika berhasil
        echo "<p style='text-align: center; color: green;'>Booking berhasil!</p>";
    } catch (PDOException $e) {
        // Tampilkan pesan error jika gagal
        echo "<p style='text-align: center; color: red;'>Terjadi kesalahan: " . $e->getMessage() . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Mobil</title>
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
    <h2>Form Booking Mobil</h2>
    <center><form action="" method="post">
        <label>Tanggal Sewa:</label>
        <input type="date" name="tanggal_pinjam" required>
        
        <label>Durasi (hari):</label>
        <input type="number" name="durasi" required>
        
        <button type="submit" name="submit">Booking</button>
    </form></center>
</div>
</body>
</html>
