-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2021 pada 21.11
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040103`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `otomotif`
--

CREATE TABLE `otomotif` (
  `id` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` int(30) NOT NULL,
  `merk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `otomotif`
--

INSERT INTO `otomotif` (`id`, `gambar`, `namabarang`, `deskripsi`, `harga`, `merk`) VALUES
(1, 'bikestand.jpg', 'Bike Stand', 'Sebagai pengganti standar samping', 350000, 'Polisport'),
(2, 'bodyprotector.jpg', 'Body Protector', 'Body protector A-1 hitam dan putih', 1150000, 'Alpinestars'),
(3, 'bootmx.jpg', 'Boot MX', 'Size 42, 43, 44, biru, hitam, hijau', 3000000, 'Gaerne'),
(4, 'coverufo.png', 'Cover Body Kit', 'Untuk YZ 85', 2000000, 'UFO'),
(5, 'decal.jpg', 'Decal', 'Bisa custom untuk semua motor trail', 650000, '-'),
(6, 'goggle.jpg', 'Goggle MX', 'Tersedia warna merah,putih,biru dan hijau', 750000, 'Thor'),
(7, 'gloves.jpg', 'Gloves MX', 'Tersedia warna merah, biru, hijau, abu-abu dan hitam', 600000, 'ORCA'),
(8, 'jersey.jpg', 'Jersey', 'Jersey futsal, volly, basket, racing', 170000, '-'),
(9, 'step.jpg', 'Foot Step', 'Tersedia warna merah, gold, hitam, silver', 350000, 'Expedition'),
(10, 'tiedone.jpg', 'Tiedone', 'Tersedia warna oranye, hitam dan merah', 350000, 'Crossbone'),
(21, 'bootmx.jpg', 'fq', 'deskripsi', 0, 'Crossbone');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `otomotif`
--
ALTER TABLE `otomotif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `otomotif`
--
ALTER TABLE `otomotif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
