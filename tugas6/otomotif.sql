-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2021 pada 04.45
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
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `otomotif`
--

CREATE TABLE `otomotif` (
  `id` int(20) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `harga` int(30) NOT NULL,
  `merk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `otomotif`
--

INSERT INTO `otomotif` (`id`, `gambar`, `namabarang`, `harga`, `merk`) VALUES
(2, 'decal.jpg', 'Decal', 150000, '-'),
(3, 'bodyprotector.jpg', 'Body Protector', 1150000, 'Alpinestars'),
(4, 'bootmx.jpg', 'Boot MX', 3000000, 'Gaerne'),
(5, 'coverufo.png', 'Cover Body Kit', 2000000, 'UFO'),
(6, 'goggle.jpg', 'Goggle MX', 750000, 'Thor'),
(7, 'gloves.jpg', 'Gloves MX', 600000, 'ORCA'),
(8, 'jersey.jpg', 'Jersey', 170000, '-'),
(20, 'decal.jpg', 'as', 300000, ''),
(21, 'decal.jpg', 'sepatu', 12123, 'Expedition');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
