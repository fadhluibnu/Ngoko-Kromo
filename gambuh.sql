-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2021 pada 14.23
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
-- Struktur dari tabel `gambuh`
--

CREATE TABLE `gambuh` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gatraSiji` varchar(100) NOT NULL,
  `gatraLoro` varchar(100) NOT NULL,
  `gatraTelu` varchar(100) NOT NULL,
  `gatraPapat` varchar(100) NOT NULL,
  `gatraLima` varchar(100) NOT NULL,
  `tegese` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gambuh`
--

INSERT INTO `gambuh` (`id`, `judul`, `gatraSiji`, `gatraLoro`, `gatraTelu`, `gatraPapat`, `gatraLima`, `tegese`) VALUES
(1, 'Excepteur sint occaecat cupidatat', 'Duis aute irure dolor in reprehenderit in voluptate velit', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut', 'quis nostrum exercitationem ullam corporis suscipit laboriosam', 'uis autem vel eum iure reprehenderit qui in ea voluptate velit ', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gambuh`
--
ALTER TABLE `gambuh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gambuh`
--
ALTER TABLE `gambuh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
