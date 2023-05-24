-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2023 pada 03.48
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listdata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(12) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `hobi` longtext NOT NULL,
  `prodi` varchar(10) NOT NULL,
  `fakultas` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `foto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `no_telp`, `hobi`, `prodi`, `fakultas`, `sex`, `foto`) VALUES
(1, 'krisna', 'sidoarjo', '12', 'Berenang', 'if', 'FTIB', 'Laki-laki', 'image/event 11.png'),
(104, 'nagi hikaru', 'shibuya', '085273829', 'Memancing,Berenang,Bersepedah', 'is', 'FTIC', 'Laki-laki', 'image/FB_IMG_1637286207474.jpg'),
(105, 'Nagisa Minase', 'siesa', '0813124921', 'Memancing,Berenang', 'ie', 'FTIC', 'Perempuan', 'image/FB_IMG_1639305654117.jpg'),
(106, 'Eren Yeager', '1321 no 12', '089232819', 'Memancing,Berenang', 'teknik sen', 'FTIC', 'Laki-laki', 'image/FB_IMG_1637289135356.jpg'),
(107, 'Dharma marie', 'krian', '0877668216', 'Berenang', 'if', 'FTIB', 'Laki-laki', 'image/abi ryan.jpg'),
(108, 'Komi Shouko', 'mojokerto', '092736282', 'Memancing,Berenang', 'if', 'FTIB', 'Laki-laki', 'image/FB_IMG_1638754847279.jpg'),
(109, 'Kujou Alia', 'shibuya', '082615636', 'Memancing,Berenang', 'Sains', 'FTIC', 'Perempuan', 'image/alya.png'),
(111, 'anet', 'ged', '1225', 'Memancing,Berenang,Bersepedah', 'ef', 'FTIB', 'Perempuan', 'image/348909502_1630127687410137_2098389672085940451_n.jpg'),
(134, 'Kubo Nagisa', 'tokyo', '081111111111', 'Memancing,Berenang', 'sii', 'FTIB', 'Perempuan', 'image/VideoCapture_20220417-041315.jpg'),
(211, 'dina aas', 'dsdad       ', '12313', '', 'sdad', 'FTIB', 'Laki-laki', 'image/');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
