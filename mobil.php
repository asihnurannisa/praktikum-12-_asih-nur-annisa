<?php
include 'koneksi.php';
$query = "SELECT * FROM kendaraan";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mobil - PT Bendi Car</title>
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
        <h2>Daftar Mobil Tersedia</h2>
        <table border="1" cellspacing="0" cellpadding="10" width="100%">
            <tr>
                <th>Nama Mobil</th>
                <th>Harga Sewa / Hari</th>
                <th>Aksi</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $row['merk']; ?></td>
                    <td>Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></td>
                    <td><a href="detail_mobil.php?id=<?php echo $row['id_kendaraan']; ?>">Detail</a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
