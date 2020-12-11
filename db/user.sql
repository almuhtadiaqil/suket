-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2020 pada 19.09
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipena`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `no_kk` bigint(20) NOT NULL,
  `no_nik` bigint(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `provinsi` varchar(40) NOT NULL,
  `kab_kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `RT` varchar(7) NOT NULL,
  `RW` varchar(7) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `status_nikah` varchar(25) NOT NULL,
  `status_keluarga` varchar(25) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `no_kk`, `no_nik`, `nama`, `password`, `agama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `kewarganegaraan`, `provinsi`, `kab_kota`, `kecamatan`, `desa`, `RT`, `RW`, `kode_pos`, `alamat`, `status_nikah`, `status_keluarga`, `nama_ayah`, `nama_ibu`, `image`) VALUES
(1, 3204052504054481, 3204051109000001, 'Matic', 'Changeme1', 'Islam', '', '', 'Laki-Laki', '', '', 'Jawa Barat', 'Kota Bandung', 'Cileunyi', 'Cinunuk', '', '', 0, '', 'lajang', 'kepala_keluarga', '', '', 'default.jpg'),
(2, 1234, 1234, 'Lanting Matic', 'Gilardino29', 'Islam', '', '', 'Laki-Laki', '', '', 'Jawa Barat', 'Kota Bandung', 'Cileunyi', 'Cinunuk', '', '', 0, '', 'lajang', 'kepala_keluarga', '', '', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_kk` (`no_kk`),
  ADD UNIQUE KEY `no_nik` (`no_nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
