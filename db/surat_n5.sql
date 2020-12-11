-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2020 pada 08.36
-- Versi server: 10.1.28-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `surat_n5`
--

CREATE TABLE `surat_n5` (
  `id_surat_n5` int(50) NOT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `binti_ayah` varchar(50) DEFAULT NULL,
  `agama_ayah` varchar(50) DEFAULT NULL,
  `tempat_lahir_ayah` varchar(50) DEFAULT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `alamat_ayah` varchar(50) DEFAULT NULL,
  `provinsi_ayah` varchar(50) DEFAULT NULL,
  `kab_kota_ayah` varchar(50) DEFAULT NULL,
  `rt_ayah` varchar(50) DEFAULT NULL,
  `rw_ayah` varchar(50) DEFAULT NULL,
  `kode_pos_ayah` varchar(50) DEFAULT NULL,
  `kewarganegaraan_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `binti_ibu` varchar(50) DEFAULT NULL,
  `nik_ibu` varchar(50) DEFAULT NULL,
  `agama_ibu` varchar(50) DEFAULT NULL,
  `tempat_lahir_ibu` varchar(50) DEFAULT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `kewarganegaraan_ibu` varchar(50) DEFAULT NULL,
  `alamat_ibu` varchar(50) DEFAULT NULL,
  `provinsi_ibu` varchar(50) DEFAULT NULL,
  `kab_kota_ibu` varchar(50) DEFAULT NULL,
  `kecamatan_ibu` varchar(50) DEFAULT NULL,
  `desa_ibu` varchar(50) DEFAULT NULL,
  `rt_ibu` varchar(50) DEFAULT NULL,
  `rw_ibu` varchar(50) DEFAULT NULL,
  `kode_pos_ibu` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_nik` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `binti` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kab_kota` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `rt` varchar(50) DEFAULT NULL,
  `rw` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nama_calon` varchar(50) DEFAULT NULL,
  `binti_calon` varchar(50) DEFAULT NULL,
  `nik_calon` varchar(50) DEFAULT NULL,
  `tempat_lahir_calon` varchar(50) DEFAULT NULL,
  `tanggal_lahir_calon` date DEFAULT NULL,
  `kewarganegaraan_calon` varchar(50) DEFAULT NULL,
  `agama_calon` varchar(50) DEFAULT NULL,
  `pekerjaan_calon` varchar(50) DEFAULT NULL,
  `alamat_calon` varchar(50) DEFAULT NULL,
  `provinsi_calon` varchar(50) DEFAULT NULL,
  `kab_kota_calon` varchar(50) DEFAULT NULL,
  `kecamatan_calon` varchar(50) DEFAULT NULL,
  `desa_calon` varchar(50) DEFAULT NULL,
  `rt_calon` varchar(50) DEFAULT NULL,
  `rw_calon` varchar(50) DEFAULT NULL,
  `kode_pos_calon` varchar(50) DEFAULT NULL,
  `jenis_surat` varchar(50) DEFAULT NULL,
  `tgl_ajukan_surat` date DEFAULT NULL,
  `status_surat` varchar(50) DEFAULT NULL,
  `kecamatan_ayah` varchar(50) DEFAULT NULL,
  `desa_ayah` varchar(50) DEFAULT NULL,
  `nik_ayah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_n5`
--

INSERT INTO `surat_n5` (`id_surat_n5`, `nama_ayah`, `binti_ayah`, `agama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `provinsi_ayah`, `kab_kota_ayah`, `rt_ayah`, `rw_ayah`, `kode_pos_ayah`, `kewarganegaraan_ayah`, `nama_ibu`, `binti_ibu`, `nik_ibu`, `agama_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `pekerjaan_ibu`, `kewarganegaraan_ibu`, `alamat_ibu`, `provinsi_ibu`, `kab_kota_ibu`, `kecamatan_ibu`, `desa_ibu`, `rt_ibu`, `rw_ibu`, `kode_pos_ibu`, `nama`, `no_nik`, `tempat_lahir`, `binti`, `agama`, `tanggal_lahir`, `pekerjaan`, `kewarganegaraan`, `provinsi`, `kab_kota`, `kecamatan`, `desa`, `rt`, `rw`, `kode_pos`, `alamat`, `nama_calon`, `binti_calon`, `nik_calon`, `tempat_lahir_calon`, `tanggal_lahir_calon`, `kewarganegaraan_calon`, `agama_calon`, `pekerjaan_calon`, `alamat_calon`, `provinsi_calon`, `kab_kota_calon`, `kecamatan_calon`, `desa_calon`, `rt_calon`, `rw_calon`, `kode_pos_calon`, `jenis_surat`, `tgl_ajukan_surat`, `status_surat`, `kecamatan_ayah`, `desa_ayah`, `nik_ayah`) VALUES
(5, 'Atu Bagus', 'Uun', 'Islam', 'Bandung', '2020-08-24', 'Pegawai BUMN', 'asdasdadsasd', 'Jawa Barat', 'Kota Bandung', '123123', '123123', '1233123', 'asdasd', 'Ai Herawati', 'Uun', '123123', 'Islam', 'Bandung', '2020-08-23', 'Ibu Rumah Tangga', 'Warga Negara Indonesia', 'asdasfasd', 'Jawa Barat', 'Kota Bandung', 'Cileunyi', 'Cinunuk', '123123', '12312', '123123', 'Fauzan Herdika Tubagus Putra', '1234', 'Bandung', 'Atu Bagus Asep', 'Islam', '2020-08-25', 'Mahasiswa', 'Warga Negara Indonesia', 'Jawa Barat', 'Kota Bandung', 'Cileunyi', 'Cinunuk', '123124', '123123', '123124', 'asdasd', 'asd', 'asd', '123123123', 'Bandung', '2020-08-22', 'asd', 'Islam', 'aslkdjaskld', 'asdads', 'Jawa Barat', 'Kota Bandung', 'Cileunyi', 'Cinunuk', '12312', '12312', '123123', 'Surat N5', '2020-08-25', 'Pending', 'Cileunyi', 'Cinunuk', '1231231241');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `surat_n5`
--
ALTER TABLE `surat_n5`
  ADD PRIMARY KEY (`id_surat_n5`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `surat_n5`
--
ALTER TABLE `surat_n5`
  MODIFY `id_surat_n5` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
