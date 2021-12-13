-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2021 pada 14.24
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_kamus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pocung`
--

CREATE TABLE `pocung` (
  `id` int(11) NOT NULL,
  `gatraSiji` varchar(100) NOT NULL,
  `gatraLoro` varchar(100) NOT NULL,
  `gatraTelu` varchar(100) NOT NULL,
  `gatraPapat` varchar(100) NOT NULL,
  `Tegese` varchar(10000) NOT NULL,
  `Judul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pocung`
--

INSERT INTO `pocung` (`id`, `gatraSiji`, `gatraLoro`, `gatraTelu`, `gatraPapat`, `Tegese`, `Judul`) VALUES
(1, 'lorem ipsum dolor sit amet, consectetur adipiscing elit', 'ipsum dolor sit amet, consectetur adipiscing elit', 'dolor sit amet, consectetur adipiscing elit', 'sit amet, consectetur adipiscing elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in facilisis dui, id egestas erat. Curabitur rhoncus sem eu venenatis porta. Quisque aliquet tellus a arcu congue, et vehicula ligula facilisis. Nunc at arcu tincidunt, iaculis ligula eu, venenatis tortor. Donec eu dui turpis. Curabitur eu nisl non dolor tempus pretium. ', 'Lorem ipsum dolor si');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pocung`
--
ALTER TABLE `pocung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pocung`
--
ALTER TABLE `pocung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
