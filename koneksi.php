<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "ptbendicar";

// Koneksi MySQLi
$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Koneksi menggunakan PDO
try {
    $pdo_conn = new PDO("mysql:host=$host;db=$db", $user, $pass);
    $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi PDO gagal: " . $e->getMessage());
}
?>
