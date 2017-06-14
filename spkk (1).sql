-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 05:29 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkk`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `created_at`, `updated_at`, `isi`) VALUES
(2, 'Lorem Ipsum Aja', '2017-06-08 16:48:56', '2017-06-08 17:24:29', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel lorem vitae purus vehicula faucibus non eget tellus. Nunc egestas porta eros, sed placerat velit scelerisque ut. Vivamus nec tempus neque. Pellentesque feugiat et turpis vitae volutpat. Pellentesque vel risus turpis. Morbi mattis purus nisi, auctor blandit metus blandit id. Nullam maximus lacus quis nulla efficitur malesuada. Fusce porta maximus lectus, sed viverra ligula elementum eget.'),
(3, 'Lorem ipsum', '2017-06-08 17:04:35', '2017-06-08 17:24:14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dui augue, volutpat a commodo id, dapibus quis lorem. Suspendisse eget lectus vulputate, dictum purus sit amet, varius ex. Morbi fringilla eros vel quam laoreet ultricies. Curabitur a massa eu ligula porta semper. Maecenas mattis arcu eu purus pretium, in posuere eros laoreet. Vestibulum congue ligula vitae magna imperdiet hendrerit. Donec nec massa aliquam, luctus lectus sit amet, tempor mauris. Aenean tristique ut turpis eget vestibulum. Praesent euismod id arcu vel vestibulum. Sed ac lobortis purus. Ut porta condimentum risus.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `daerah_rawan`
--

CREATE TABLE `daerah_rawan` (
  `id_daerah` int(10) UNSIGNED NOT NULL,
  `nama` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `daerah_rawan`
--

INSERT INTO `daerah_rawan` (`id_daerah`, `nama`, `deskripsi`) VALUES
(1, 'ABE', 'ABEPURA'),
(2, 'SENTANI', 'SENTANI PAPUA'),
(3, 'KARAWANG', 'KARAWANG BARAT'),
(4, 'Surabaya', 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `lap_kehilangan`
--

CREATE TABLE `lap_kehilangan` (
  `id_lap_kehilangan` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_surat_hilang` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id_daerah` int(10) UNSIGNED NOT NULL,
  `id_pendaftaran` int(10) UNSIGNED NOT NULL,
  `no_polisi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kendaraan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `merk_kendaraan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `warna_kendaraan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `no_mesin` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_hilang` date NOT NULL,
  `keterangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lap_kehilangan`
--

INSERT INTO `lap_kehilangan` (`id_lap_kehilangan`, `created_at`, `updated_at`, `no_surat_hilang`, `id_daerah`, `id_pendaftaran`, `no_polisi`, `jenis_kendaraan`, `merk_kendaraan`, `warna_kendaraan`, `no_mesin`, `tanggal_hilang`, `keterangan`) VALUES
(1, NULL, NULL, 'ABE/260589/001', 1, 3, 'DS 1234 AS', 'MOTOR', 'SUZUKI', 'HITAM', '09213', '2017-05-26', 'HILANG DIDEPAN WARUNG MAKAN SEDERHANA'),
(7, '2017-05-28 06:13:09', '2017-05-28 06:13:09', 'lpkh/2017/05/1', 1, 1, 'DS 1234 SA', 'Motor', 'Suzuki', 'Hitam', '', '2017-05-28', 'asdasd'),
(8, '2017-05-28 06:18:39', '2017-05-28 06:18:39', 'lpkh/2017/05/2', 2, 1, 'DS 5642 SA', 'Mobil', 'Toyota', 'Putih', 'ads2we423', '2017-05-26', 'fertgg'),
(9, '2017-05-28 06:26:34', '2017-05-28 06:26:34', 'lphk/2017/05/9', 3, 1, 'DS 5654 SA', 'Motor', 'Toyota', 'Putih', 'rwh456', '2017-05-25', 'adf rthe eyrt rew2t4 ewgrg'),
(10, '2017-05-28 06:54:44', '2017-05-28 06:54:44', 'LPHK/2017/05/5', 1, 1, 'AB 43234 S', 'Motor', 'Yamah', 'Hitam', 'ferer32', '2017-05-20', 'asdasdasdasdfsdfasdf'),
(11, '2017-05-28 07:23:44', '2017-05-28 07:23:44', 'LPHK/2017/05/6', 2, 3, 'B 3112 SIA', 'Motor', 'Honda', 'Kuning', 'kdao34e', '2017-05-28', 'afasgerdg'),
(15, '2017-06-01 18:25:23', '2017-06-01 18:25:23', 'LPHK/2017/06/1', 1, 3, 'DS 2921 BD', 'Motor', 'Honda', 'Hitam', 'fwerwer', '2017-06-02', 'yrdy'),
(16, '2017-06-08 19:34:50', '2017-06-08 19:34:50', 'LPHK/2017/06/2', 4, 1, 'de', 'wfsd', 'asd', 'dsfd', 'wer', '2017-06-09', 'dsasd');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_26_030838_create_daerah_rawan_table', 1),
('2017_05_26_030838_create_lap_kehilangan_table', 1),
('2017_05_26_030838_create_penemuan_table', 1),
('2017_05_26_030838_create_saran_komentar_table', 1),
('2017_05_26_030838_create_users_table', 1),
('2017_05_26_030848_create_foreign_keys', 1),
('2017_06_09_012926_create_beritas_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penemuan`
--

CREATE TABLE `penemuan` (
  `id_penemuan` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_lap_kehilangan` int(10) UNSIGNED NOT NULL,
  `no_polisi_temuan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_temuan` date NOT NULL,
  `foto` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_temuan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `merk_temuan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `warna_temuan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `no_mesin_temuan` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi_temuan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penemuan`
--

INSERT INTO `penemuan` (`id_penemuan`, `created_at`, `updated_at`, `id_lap_kehilangan`, `no_polisi_temuan`, `tanggal_temuan`, `foto`, `jenis_temuan`, `merk_temuan`, `warna_temuan`, `no_mesin_temuan`, `deskripsi_temuan`, `status`) VALUES
(1, NULL, '2017-06-13 18:20:31', 11, 'B 3112 SIA', '2017-05-30', '', 'Motor', 'Honda', 'Kuning', 'kdao34e', 'Ditemukan di pasar minggu', 1),
(2, '2017-05-29 18:33:42', '2017-06-13 18:26:47', 1, 'DS 5642 SA', '2017-05-30', '', 'Mobil', 'Toyota', 'Putih', 'ads2we423', 'asdewerw', 1),
(3, '2017-06-13 16:24:39', '2017-06-13 16:24:39', 9, 'asdasd', '2017-06-14', '', 'asdasd', 'asda', 'asdasd', 'asdasd', 'asdasdasd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `saran_komentar`
--

CREATE TABLE `saran_komentar` (
  `id_saran` int(10) UNSIGNED NOT NULL,
  `id_lap_kehilangan` int(10) UNSIGNED NOT NULL,
  `id_pendaftaran` int(10) UNSIGNED NOT NULL,
  `saran_komentar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `saran_komentar`
--

INSERT INTO `saran_komentar` (`id_saran`, `id_lap_kehilangan`, `id_pendaftaran`, `saran_komentar`, `created_at`, `updated_at`) VALUES
(1, 11, 4, 'saya lihat motor yang mirip di sumber makmur', NULL, NULL),
(2, 11, 3, 'kemarin lihat dijalan', NULL, NULL),
(4, 11, 4, 'dah ketemu', NULL, NULL),
(14, 10, 1, 'test', NULL, NULL),
(15, 10, 1, 'coba lagi', NULL, NULL),
(16, 10, 3, 'buset dah pil koplo', NULL, NULL),
(17, 15, 3, 'tolong banget yah', NULL, NULL),
(18, 10, 1, 'eh situ jangan ribut ya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jk` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `name`, `password`, `email`, `jk`, `alamat`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator', '$2y$10$wAPSJW5KqeL1tCmJbrysceSaty.NgBC6SB0tNjagDmNhaJdwUDd8y', 'admin@yahoo.com', '', '', 1, 'HQZySkXKhzPbnwUVQUXvPcKVdhSzefezgbTdAuSCDLXS7g4GOsTIjdUzK2hB', NULL, NULL),
(3, 'Budi Anduk', 'budi', '$2y$10$pQsYJ13qp9HRqMdlaSuVrOAt5Eu/tPYbmVbGCllhVnOpLq/YGIyEO', 'budi.anduk@yahoo.com', 'Laki-Laki', 'jauh coy', 0, 'RDyRmQPDt8Fin8t5Zu67b1TqVj8W10GbVrAQYhLj4QCPqoGG5p69z3ienChk', NULL, NULL),
(4, 'ANI', 'ANI SIAN', 'aaaaaa', 'ani@yahoo.com', 'Perempuan', 'Kotaraja', 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daerah_rawan`
--
ALTER TABLE `daerah_rawan`
  ADD PRIMARY KEY (`id_daerah`);

--
-- Indexes for table `lap_kehilangan`
--
ALTER TABLE `lap_kehilangan`
  ADD PRIMARY KEY (`id_lap_kehilangan`),
  ADD KEY `lap_kehilangan_id_daerah_foreign` (`id_daerah`),
  ADD KEY `lap_kehilangan_id_pendaftaran_foreign` (`id_pendaftaran`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `penemuan`
--
ALTER TABLE `penemuan`
  ADD PRIMARY KEY (`id_penemuan`),
  ADD KEY `penemuan_id_lap_kehilangan_foreign` (`id_lap_kehilangan`);

--
-- Indexes for table `saran_komentar`
--
ALTER TABLE `saran_komentar`
  ADD PRIMARY KEY (`id_saran`),
  ADD KEY `saran_komentar_id_lap_kehilangan_foreign` (`id_lap_kehilangan`),
  ADD KEY `saran_komentar_id_pendaftaran_foreign` (`id_pendaftaran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `daerah_rawan`
--
ALTER TABLE `daerah_rawan`
  MODIFY `id_daerah` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lap_kehilangan`
--
ALTER TABLE `lap_kehilangan`
  MODIFY `id_lap_kehilangan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `penemuan`
--
ALTER TABLE `penemuan`
  MODIFY `id_penemuan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `saran_komentar`
--
ALTER TABLE `saran_komentar`
  MODIFY `id_saran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lap_kehilangan`
--
ALTER TABLE `lap_kehilangan`
  ADD CONSTRAINT `lap_kehilangan_id_daerah_foreign` FOREIGN KEY (`id_daerah`) REFERENCES `daerah_rawan` (`id_daerah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lap_kehilangan_id_pendaftaran_foreign` FOREIGN KEY (`id_pendaftaran`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penemuan`
--
ALTER TABLE `penemuan`
  ADD CONSTRAINT `penemuan_id_lap_kehilangan_foreign` FOREIGN KEY (`id_lap_kehilangan`) REFERENCES `lap_kehilangan` (`id_lap_kehilangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `saran_komentar`
--
ALTER TABLE `saran_komentar`
  ADD CONSTRAINT `saran_komentar_id_lap_kehilangan_foreign` FOREIGN KEY (`id_lap_kehilangan`) REFERENCES `lap_kehilangan` (`id_lap_kehilangan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `saran_komentar_id_pendaftaran_foreign` FOREIGN KEY (`id_pendaftaran`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
