-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2024 pada 07.51
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
-- Database: `your_trip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Usia` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Destinasti` varchar(255) DEFAULT NULL,
  `Comfort` varchar(255) DEFAULT NULL,
  `Adults` int(11) DEFAULT NULL,
  `Rooms` int(11) DEFAULT NULL,
  `Children` int(11) DEFAULT NULL,
  `Pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `forum`
--

INSERT INTO `forum` (`id`, `Nama`, `Usia`, `Email`, `Destinasti`, `Comfort`, `Adults`, `Rooms`, `Children`, `Pesan`) VALUES
(2, 'Firman', '12', 'agdybdj@gmail.com', 'Eipstein', 'on', 1, 1, 0, 'wewewewewe'),
(3, '', '', '', '', 'on', 1, 1, 0, ''),
(4, 'nisa', '16', 'agdybdj@gmail.com', 'Taman Mini', 'on', 1, 1, 0, 'halo pesan tiketnya satu ya'),
(5, 'Ardis', '40', 'ardis@gmail.com', 'Taman Mini', 'on', 1, 1, 0, ''),
(6, 'Elan', '2', 'elsn@gmail.com', 'Sea world', 'on', 1, 1, 0, 'tiket satu ya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
