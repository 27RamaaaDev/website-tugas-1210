-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2026 pada 04.01
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_12_9`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `no` int(5) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `nilai_s1` int(2) NOT NULL,
  `nilai_s2` int(2) NOT NULL,
  `nilai_s3` int(2) NOT NULL,
  `nilai_s4` int(2) NOT NULL,
  `nilai_s5` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`no`, `nama_lengkap`, `nisn`, `asal_sekolah`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `kota`, `email`, `no_hp`, `nilai_s1`, `nilai_s2`, `nilai_s3`, `nilai_s4`, `nilai_s5`) VALUES
(1, 'Nursin Irham', '1234567890', 'SMAN 4 Bekasi', 'Bekasi', '2026-02-10', 'Bekasi', 'Cemara Permai Harapan Jaya', 'Bekasi', 'nursinirham10@gmail.com', 2147483647, 96, 97, 98, 99, 100);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nisn`),
  ADD UNIQUE KEY `no` (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
