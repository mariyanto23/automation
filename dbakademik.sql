-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Apr 2024 pada 08.09
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbakademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mhsw`
--

CREATE TABLE `tb_mhsw` (
  `mhsw_id` int(11) NOT NULL,
  `mhsw_nim` varchar(25) NOT NULL,
  `mhsw_nama` varchar(100) NOT NULL,
  `mhsw_alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mhsw`
--

INSERT INTO `tb_mhsw` (`mhsw_id`, `mhsw_nim`, `mhsw_nama`, `mhsw_alamat`) VALUES
(1, '17021000', 'Hendra Kusuma', 'Medan'),
(2, '17021001', 'Dwi Andriani', 'Pematang Siantar'),
(3, '17021002', 'Maya Anita', 'Rantau Parapat'),
(4, '17021003', 'Faiza Rizky', 'Tanjung Morawa'),
(5, '17021004', 'Fauziah Fitri', 'Kisaran'),
(6, 'IF0222012', 'Mariyanto', 'Jatipuro');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mhsw`
--
ALTER TABLE `tb_mhsw`
  ADD PRIMARY KEY (`mhsw_id`),
  ADD UNIQUE KEY `mhsw_nim` (`mhsw_nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_mhsw`
--
ALTER TABLE `tb_mhsw`
  MODIFY `mhsw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
