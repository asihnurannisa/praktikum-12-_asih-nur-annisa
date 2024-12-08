-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 12:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptbendicar`
--

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `id_denda` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `besaran_denda` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`id_denda`, `id_transaksi`, `besaran_denda`, `jenis`) VALUES
(1, 4, 100000, 'Keterlambatan'),
(2, 5, 200000, 'Kerusakan'),
(3, 5, 50000, 'Keterlambatan'),
(4, 3, 0, 'Tidak Ada Denda'),
(5, 2, 0, 'Tidak Ada Denda');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `no_pol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `harga`, `jenis`, `merk`, `no_pol`) VALUES
(1, 200000, 'mobil', 'pajero', 'B 1234 AB'),
(2, 300000, 'mobil', 'avanza', 'B 5678 CD'),
(3, 150000, 'mobil', 'ayla', 'B 2345 EF'),
(4, 500000, 'mobil', 'Mitsubishi Xpander', 'B 6789 GH'),
(5, 250000, 'mobil', 'toyota', 'B 7890 IJ');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `id_petugas`, `nama`, `no_telp`, `status`) VALUES
(1, 1, 'Siti Rahmawati', '081234567893', 'Aktif'),
(2, 2, 'Ahmad Fauzan', '081345678913', 'Non-Aktif'),
(3, 3, 'Feri Anwar', '081456789132', 'Aktif'),
(4, 4, 'Lina Marlina', '081567891243', 'Aktif'),
(5, 5, 'Asep Sunandar', '081678912354', 'Non-Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `id_penyewa` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`id_penyewa`, `alamat`, `nama`, `no_telp`, `username`, `password`) VALUES
(1, 'bumi dipasena abadi', 'Asih Nur Annisa', 2147483647, 'nisa', '123'),
(2, 'Jalan Melati No. 10', 'Budi Santoso', 2147483647, 'budi456', '456'),
(3, 'Jalan Kenanga No. 8', 'Citra Dewi', 2147483647, 'citra789', '789'),
(4, 'Jalan Flamboyan No. 3', 'Dian Sari', 2147483647, 'dian101', '38b3eff8baf56627478ec76a704e9b52'),
(5, 'Jalan Dahlia No. 7', 'Eko Prasetyo', 2147483647, 'eko202', '854d6fae5ee42911677c739ee1734486');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `no_telp`) VALUES
(1, 'Rina Puspita', '081234567891'),
(2, 'Dani Suryadi', '081345678912'),
(3, 'Siti Aisyah', '081456789123'),
(4, 'Rahmat Hidayat', '081567891234'),
(5, 'Putri Larasati', '081678912345');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_penyewa` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `total_denda` int(11) NOT NULL,
  `durasi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_penyewa`, `id_kendaraan`, `username`, `kondisi`, `tanggal_pinjam`, `tanggal_kembali`, `total_bayar`, `total_denda`, `durasi`) VALUES
(1, 1, 1, 'nisa', 'Baik', '2024-11-01', '2024-11-03', 400000, 0, '2 hari'),
(2, 2, 2, 'budi456', 'Baik', '2024-11-02', '2024-11-05', 900000, 0, '3 hari'),
(3, 3, 3, 'citra789', 'Baik', '2024-11-03', '2024-11-04', 150000, 0, '4 hari'),
(4, 4, 4, 'dian101', 'Baik', '2024-11-04', '2024-11-07', 1500000, 100000, '5 hari'),
(5, 5, 5, 'eko202', 'Rusak', '2024-11-05', '2024-11-08', 750000, 200000, '6 hari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id_denda`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id_penyewa`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_penyewa` (`id_penyewa`),
  ADD KEY `id_kendaraan` (`id_kendaraan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `denda`
--
ALTER TABLE `denda`
  ADD CONSTRAINT `denda_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD CONSTRAINT `pemilik_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id_penyewa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
