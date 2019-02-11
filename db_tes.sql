-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2019 pada 14.34
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya`
--

CREATE TABLE `biaya` (
  `id_biaya` int(11) NOT NULL,
  `kode_biaya` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biaya`
--

INSERT INTO `biaya` (`id_biaya`, `kode_biaya`, `id_kegiatan`, `jumlah`) VALUES
(1, 1000, 1, 1000),
(2, 1100, 2, 1000),
(3, 2000, 1, 1000),
(4, 2100, 2, 1000),
(5, 1200, 3, 1000),
(6, 2300, 4, 1000),
(7, 1300, 1, 1000),
(8, 2500, 1, 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `kegiatan`, `id_group`, `id_unit`) VALUES
(1, 'Kegiatan I', 1, 1),
(2, 'Kegiatan II', 1, 2),
(3, 'Kegiatan III', 2, 1),
(4, 'Kegiatan IV', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ngroup`
--

CREATE TABLE `ngroup` (
  `id_group` int(11) NOT NULL,
  `ngroup` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ngroup`
--

INSERT INTO `ngroup` (`id_group`, `ngroup`) VALUES
(1, 'GROUP A'),
(2, 'GROUP B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `unit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`id_unit`, `unit`) VALUES
(1, 'Unit X'),
(2, 'Unit Y');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
