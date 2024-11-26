<?php
include 'koneksi.php';

$query = "SELECT * FROM kendaraan";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kendaraan</title>
</head>
<body>
    <h1>Data Kendaraan</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID Kendaraan</th>
            <th>Nama Kendaraan</th>
            <th>Plat Nomor</th>
            <th>Jenis</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id_kendaraan']; ?></td>
            <td><?= $row['merk']; ?></td>
            <td><?= $row['no_pol']; ?></td>
            <td><?= $row['jenis']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
