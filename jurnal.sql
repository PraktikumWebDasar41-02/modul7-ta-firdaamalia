-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2018 pada 16.53
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal_firda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `nama` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `program_studi` varchar(20) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `moto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`nama`, `nim`, `tanggal_lahir`, `jenis_kelamin`, `program_studi`, `fakultas`, `asal`, `moto`) VALUES
('Firda Amalia', '6701170064', '2018-10-01', 'Perempuan', 'sistem informasi', 'FIT', 'Cirebon', 'berfaedah'),
('Risma Ayu', '6701170088', '2018-10-16', 'perempuan', 'teknik informatika', 'FI', 'Bandung', 'happy'),
('muhammad', '6701170099', '2014-06-20', 'Laki-Laki', 'teknik komputer', 'FRI', 'Wonosobo', 'berkah'),
('Miftah', '6701170735', '2018-08-20', 'Laki-Laki', 'informatika', 'FIT', 'Jombang', 'Bermanfaat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
