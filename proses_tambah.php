<?php
include 'koneksi.php';

$nama_kendaraan = $_POST['merk'];
$plat_nomor = $_POST['no_pol'];
$jenis = $_POST['jenis'];

$query = "INSERT INTO kendaraan (merk, no_pol, jenis) VALUES ('$merk', '$no_pol', '$jenis')";
if ($conn->query($query) === TRUE) {
    echo "Data berhasil ditambahkan!";
    header('Location: index.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
?>
