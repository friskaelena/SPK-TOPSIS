-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2022 pada 02.51
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fajarjaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('aziiz', 'admin'),
('buli', 'admin'),
('riska', 'riska');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_alternatif`
--

CREATE TABLE `tab_alternatif` (
  `id_alternatif` varchar(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL,
  `bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_alternatif`
--

INSERT INTO `tab_alternatif` (`id_alternatif`, `nik`, `nama_alternatif`, `bagian`) VALUES
('1', '2202080102010003', 'Samuel Yanuar', 'vinishing'),
('2', '2202080102010004', 'Laras Eka Wulandary', 'GA'),
('3', '2202080102010005', 'Feby', 'Preparacen'),
('4', '2202080102010033', 'Wiranti', 'marketing'),
('5', '2202080102010103', 'Dwi Septianingsih', 'finance');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_kriteria`
--

CREATE TABLE `tab_kriteria` (
  `id_kriteria` varchar(10) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_kriteria`
--

INSERT INTO `tab_kriteria` (`id_kriteria`, `nama_kriteria`, `keterangan`, `bobot`) VALUES
('1', 'Pendidikan', 'S1 5 | SMK 4| SD 3', 5),
('2', 'Pengalaman', '1 2 3 4 5', 5),
('3', 'Usia', '', 1),
('4', 'Kemampuan', '', 5),
('5', 'Status', '', 5),
('6', 'Alamat', '', 2),
('7', 'Penampilan', '', 5),
('8', 'Tes', '', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_poin`
--

CREATE TABLE `tab_poin` (
  `id_poin` varchar(10) NOT NULL,
  `poin` varchar(10) NOT NULL,
  `sub` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_poin`
--

INSERT INTO `tab_poin` (`id_poin`, `poin`, `sub`) VALUES
('1', '1', '0-20'),
('2', '2', '21-40'),
('3', '3', '41-60'),
('4', '4', '61-80'),
('5', '5', '81-100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_topsis`
--

CREATE TABLE `tab_topsis` (
  `id_alternatif` varchar(10) NOT NULL,
  `id_kriteria` varchar(10) NOT NULL,
  `nilai` float NOT NULL,
  `Id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tab_topsis`
--

INSERT INTO `tab_topsis` (`id_alternatif`, `id_kriteria`, `nilai`, `Id`, `tanggal`) VALUES
('1', '1', 3, 117, '2022-07-19'),
('1', '2', 5, 118, '2022-07-19'),
('1', '3', 5, 119, '2022-07-19'),
('1', '4', 3, 120, '2022-07-19'),
('1', '5', 5, 121, '2022-07-19'),
('1', '6', 5, 122, '2022-07-19'),
('1', '7', 5, 123, '2022-07-19'),
('1', '8', 3, 124, '2022-07-19'),
('2', '1', 3, 125, '2022-07-19'),
('2', '2', 1, 126, '2022-07-19'),
('2', '3', 2, 127, '2022-07-19'),
('2', '4', 1, 128, '2022-07-19'),
('2', '5', 2, 129, '2022-07-19'),
('2', '6', 5, 130, '2022-07-19'),
('2', '7', 1, 131, '2022-07-19'),
('2', '8', 2, 132, '2022-07-19'),
('3', '1', 3, 133, '2022-07-19'),
('3', '2', 4, 134, '2022-07-19'),
('3', '3', 5, 135, '2022-07-19'),
('3', '4', 5, 136, '2022-07-19'),
('3', '5', 5, 137, '2022-07-19'),
('3', '6', 5, 138, '2022-07-19'),
('3', '7', 5, 139, '2022-07-19'),
('3', '8', 4, 140, '2022-07-19'),
('4', '1', 3, 141, '2022-07-19'),
('4', '2', 5, 142, '2022-07-19'),
('4', '3', 5, 143, '2022-07-19'),
('4', '4', 5, 144, '2022-07-19'),
('4', '5', 5, 145, '2022-07-19'),
('4', '6', 2, 146, '2022-07-19'),
('4', '7', 5, 147, '2022-07-19'),
('4', '8', 4, 148, '2022-07-19'),
('5', '1', 2, 149, '2022-07-19'),
('5', '2', 4, 150, '2022-07-19'),
('5', '3', 5, 151, '2022-07-19'),
('5', '4', 3, 152, '2022-07-19'),
('5', '5', 5, 153, '2022-07-19'),
('5', '6', 5, 154, '2022-07-19'),
('5', '7', 3, 155, '2022-07-19'),
('5', '8', 4, 156, '2022-07-19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tab_alternatif`
--
ALTER TABLE `tab_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `tab_kriteria`
--
ALTER TABLE `tab_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tab_poin`
--
ALTER TABLE `tab_poin`
  ADD PRIMARY KEY (`id_poin`);

--
-- Indeks untuk tabel `tab_topsis`
--
ALTER TABLE `tab_topsis`
  ADD PRIMARY KEY (`Id`,`id_alternatif`,`id_kriteria`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tab_topsis`
--
ALTER TABLE `tab_topsis`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
