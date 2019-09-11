-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 03:42 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_kategori` int(11) NOT NULL,
  `kelas_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_kuota_min` int(11) DEFAULT NULL,
  `kelas_kuota_max` int(11) DEFAULT NULL,
  `kelas_registrasi_mulai` date DEFAULT NULL,
  `kelas_registrasi_akhir` date DEFAULT NULL,
  `kelas_pelaksanaan_mulai` date DEFAULT NULL,
  `kelas_pelaksanaan_akhir` date DEFAULT NULL,
  `kelas_harga_in` bigint(20) NOT NULL DEFAULT 0,
  `kelas_harga_off` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `kelas_kategori`, `kelas_nama`, `kelas_deskripsi`, `kelas_kuota_min`, `kelas_kuota_max`, `kelas_registrasi_mulai`, `kelas_registrasi_akhir`, `kelas_pelaksanaan_mulai`, `kelas_pelaksanaan_akhir`, `kelas_harga_in`, `kelas_harga_off`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ahli K3 Muda BNSP', NULL, NULL, 100, '2019-06-01', '2019-06-03', '2019-08-01', '2019-08-05', 1500000, NULL, '2019-09-11 01:40:57', NULL),
(2, 1, 'Ahli K3 Migas BNSP', NULL, NULL, 100, '2019-06-01', '2019-09-01', '2019-08-01', '2019-08-05', 1750000, NULL, '2019-09-11 01:40:57', NULL),
(3, 2, 'Sertifikasi LPJK Sumsel', NULL, NULL, 100, '2019-06-01', '2019-09-01', '2019-08-01', '2019-08-05', 1500000, NULL, '2019-09-11 01:40:57', NULL),
(4, 3, 'Training Ahli K3 Umum', NULL, NULL, 100, '2019-06-01', '2019-09-01', '2019-08-01', '2019-08-05', 1500000, NULL, '2019-09-11 01:40:57', NULL),
(5, 3, 'Training Auditor SMK3', NULL, NULL, 100, '2019-06-01', '2019-09-01', '2019-08-01', '2019-08-05', 1500000, NULL, '2019-09-11 01:40:57', NULL),
(6, 4, 'Ahli muda K3 Konstruksi', NULL, 20, 52, '2019-06-01', '2019-09-01', '2019-08-01', '2019-08-05', 4600000, 5000000, '2019-09-11 01:40:57', NULL),
(7, 4, 'Supervisor K3 Konstruksi', NULL, 25, 32, '2019-06-01', '2019-09-01', '2019-08-01', '2019-08-05', 3000000, 3400000, '2019-09-11 01:40:57', NULL),
(8, 4, 'Cofined Space (Bekerja di ruang tertutup)', NULL, 15, 60, '2019-06-01', '2019-09-01', '2019-08-01', '2019-08-05', 5000000, 5500000, '2019-09-11 01:40:57', NULL),
(9, 5, 'AUTO CAD 2D & 3D', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300000, NULL, '2019-09-11 01:40:57', NULL),
(10, 5, 'RAB (Rencana Anggaran Biaya)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300000, NULL, '2019-09-11 01:40:57', NULL),
(11, 5, 'GIS (Geographic Information System)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300000, NULL, '2019-09-11 01:40:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_kategori`
--

CREATE TABLE `kelas_kategori` (
  `kkategori_id` bigint(20) UNSIGNED NOT NULL,
  `kkategori_nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kkategori_deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas_kategori`
--

INSERT INTO `kelas_kategori` (`kkategori_id`, `kkategori_nama`, `kkategori_deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Sertifikasi BNSP', 'Ini Sertifikasi BNSP', '2019-09-11 01:40:56', NULL),
(2, 'Sertifikasi LPJK Sumsel', 'Ini Sertifikasi LPJK Sumsel', '2019-09-11 01:40:56', NULL),
(3, 'Sertifikasi Kemnaker', 'Ini Sertifikasi Kemnaker', '2019-09-11 01:40:56', NULL),
(4, 'Pelatihan', 'Deskripsi Pelatihan', '2019-09-11 01:40:57', NULL),
(5, 'Kursus', '', '2019-09-11 01:40:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_03_090034_create_pengguna_table', 1),
(2, '2019_07_03_090056_create_pendaftaran_table', 1),
(3, '2019_07_03_090116_create_kelas_table', 1),
(4, '2019_07_05_195452_create_kelas_kategori_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `pendaftaran_id` bigint(20) UNSIGNED NOT NULL,
  `pendaftaran_kode` int(11) NOT NULL,
  `pendaftaran_pengguna` int(11) NOT NULL,
  `pendaftaran_kelas` int(11) NOT NULL,
  `pendaftaran_tipe` int(11) NOT NULL,
  `pendaftaran_status` int(11) NOT NULL DEFAULT 0,
  `pendaftaran_pembayaran` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`pendaftaran_id`, `pendaftaran_kode`, `pendaftaran_pengguna`, `pendaftaran_kelas`, `pendaftaran_tipe`, `pendaftaran_status`, `pendaftaran_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 874938, 2, 2, 2, 0, NULL, '2019-09-11 01:40:57', NULL),
(2, 238192, 2, 3, 2, 0, NULL, '2019-09-11 01:40:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` bigint(20) UNSIGNED NOT NULL,
  `pengguna_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_level` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'peserta',
  `pengguna_nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_tanggal_lahir` date NOT NULL,
  `pengguna_jk` int(11) NOT NULL,
  `pengguna_alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengguna_telepon` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_email`, `pengguna_password`, `pengguna_level`, `pengguna_nik`, `pengguna_tempat_lahir`, `pengguna_tanggal_lahir`, `pengguna_jk`, `pengguna_alamat`, `pengguna_telepon`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@sriwijayauniversal.com', '$2y$10$vxqbSr3SzYzNBsH/oSLetuJ6.T1zTQQ9ZTkgDB4MK5MJeV8EXYXXG', 'admin', '1671032001900001', 'Jakarta', '1994-01-03', 1, 'Jakarta, Indonesia', '082773829881', '2019-09-11 01:40:56', NULL),
(2, 'Ahmad Santoso', 'ahmad@sriwijayauniversal.com', '$2y$10$a1q3Zfwl/AKLhb2di5LRg.VoeNE4bdAhNDGJV0HHKgIiCRux3iWMa', 'peserta', '1672042001900002', 'Jakarta', '1994-01-03', 1, 'Jakarta, Indonesia', '082773829881', '2019-09-11 01:40:56', NULL),
(3, 'Citra Cahaya', 'citra@sriwijayauniversal.com', '$2y$10$BDpK7zDjSufYuVtghGFtS.iSMgjvhi2A/kBj5yarLC6hkvOYI4ghm', 'peserta', '1672042001900003', 'Palembang', '1999-02-03', 2, 'Palembang, Indonesia', '082773829822', '2019-09-11 01:40:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `kelas_kategori`
--
ALTER TABLE `kelas_kategori`
  ADD PRIMARY KEY (`kkategori_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`pendaftaran_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`),
  ADD UNIQUE KEY `pengguna_pengguna_email_unique` (`pengguna_email`),
  ADD UNIQUE KEY `pengguna_pengguna_nik_unique` (`pengguna_nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kelas_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kelas_kategori`
--
ALTER TABLE `kelas_kategori`
  MODIFY `kkategori_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `pendaftaran_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
