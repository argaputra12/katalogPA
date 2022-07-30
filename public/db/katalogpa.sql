-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 06:00 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katalogpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_hkis`
--

CREATE TABLE `daftar_hkis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_ki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_ki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjenis_ki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_ki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_pernyataan_internal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surat_pengalihan_hakcipta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scan_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contoh_ciptaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_ciptaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary_katsinov` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_ciptaan_katsinov` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `konfirmasi` enum('Belum dikonfirmasi','disetujui','ditolak') COLLATE utf8mb4_unicode_ci DEFAULT 'Belum dikonfirmasi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hkis`
--

CREATE TABLE `hkis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_ki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_ki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjenis_ki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_ki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_pernyataan_internal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surat_pengalihan_hakcipta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scan_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contoh_ciptaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_ciptaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary_katsinov` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_ciptaan_katsinov` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `konfirmasi` enum('Belum dikonfirmasi','disetujui','ditolak') COLLATE utf8mb4_unicode_ci DEFAULT 'Belum dikonfirmasi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hkis`
--

INSERT INTO `hkis` (`id`, `kategori_ki`, `jenis_ki`, `subjenis_ki`, `judul_ki`, `surat_pernyataan_internal`, `surat_pengalihan_hakcipta`, `scan_ktp`, `contoh_ciptaan`, `url_ciptaan`, `summary_katsinov`, `link_ciptaan_katsinov`, `user_id`, `konfirmasi`, `created_at`, `updated_at`) VALUES
(1, 'Daftar HKI', 'Paten', 'Desain Industri', 'oke', 'surat-pernyataan-internal/F8dOmF3eA74EZ94LwtGiMODC7Yr2sUeDDMr3rYmb.pdf', 'surat-pengalihan-hakcipta/z2liQFKpFOqv3OvcJnhF1XhHqtjWkXaSjFaqhXol.pdf', 'scan-ktp/ohLPrZ312BHuEj6bc1YHH2Jy0PK3tK65DJSc4PQu.pdf', 'contoh-ciptaan/aLvcxBZWKPxsKvE5KYn0GCzHs4DCIannxKq7oOzZ.pdf', 'oke.com', 'oke.com', 'oke', 1, 'disetujui', '2022-07-27 19:49:25', '2022-07-28 07:46:32'),
(2, 'Daftar HKI', 'Hak Cipta', 'Aplikasi iOS', 'Proyek Akhir', 'surat-pernyataan-internal/ChN7Fe01xBZZ2sd3ZmTtWSxCpwmcexps1w3JJiUB.pdf', 'surat-pengalihan-hakcipta/0nnjG1t1IYuMnErOziLXJlkaW3KdcnoxpHD2y1BF.pdf', 'scan-ktp/dK5sQ8BYLJ0Z7GwXYKZQ5IEY6JSDKGkw648V6TkA.pdf', 'contoh-ciptaan/eR6XKzw1maqSmFongJuJS4nwAyRo7mazAtC1pM60.pdf', 'https://github.com/talitharizki26/katalogPA', 'katsinov', 'https://github.com/talitharizki26/katalogPA', 1, 'ditolak', '2022-07-28 07:36:46', '2022-07-28 07:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `katalogs`
--

CREATE TABLE `katalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembimbing1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembimbing2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_demo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_hki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `katalogs`
--

INSERT INTO `katalogs` (`id`, `judul`, `deskripsi`, `nim`, `nama_mhs`, `pembimbing1`, `pembimbing2`, `link_video`, `link_demo`, `link_hki`, `kategori_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Perjuangan', '<div>Bagus bangetttt</div>', '1202218458', 'Melia Antika', 'Wawa Wikusna', 'Inne Rahardian', 'zGhfXXoIbeQ', 'https://github.com/basecamp/trix', 'https://drive.google.com/', 3, 4, '2022-07-27 22:10:39', '2022-07-28 07:44:41'),
(2, 'Proyek', '<div>Bagus banget</div>', '1202218458', 'Melia Antika', 'Wawa Wikusna', 'Inne Rahardian', 'zGhfXXoIbeQ', 'https://github.com/basecamp/trix', 'https://drive.google.com/', 1, 4, '2022-07-27 22:37:39', '2022-07-27 22:37:39'),
(3, 'Website Sertifikasi dibuka', '<div><strong><em>haloo</em></strong></div>', '1202218458', 'Melia Antika', 'Wawa Wikusna', 'Inne Rahardian', 'EyfQJv_fX7o', 'https://github.com/basecamp/trix', 'https://drive.google.com/', 2, 4, '2022-07-28 07:44:26', '2022-07-28 07:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Transaction Processing System', '', '2022-07-26 16:17:51', '2022-07-26 16:17:51'),
(2, 'Management Information System', '', '2022-07-26 16:17:51', '2022-07-26 16:17:51'),
(3, 'Decision Support System', '', '2022-07-26 16:17:51', '2022-07-26 16:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_07_04_104326_create_roles_table', 1),
(3, '2022_07_05_061454_create_kategoris_table', 1),
(4, '2022_07_15_123836_user', 1),
(5, '2022_07_15_124647_katalog', 1),
(6, '2022_07_15_143501_daftar_hki', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nama_role`, `created_at`, `updated_at`) VALUES
(1, 'mahasiswa', '2022-07-18 01:39:48', '2022-07-18 01:39:48'),
(2, 'pembimbing', '2022-07-18 01:43:39', '2022-07-18 01:43:39'),
(3, 'kaprodi', '2022-07-18 01:44:02', '2022-07-18 01:44:02'),
(4, 'admin', '2022-07-18 01:44:23', '2022-07-18 01:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'mahasiswa', 'mahasiswa@gmail.com', '$2y$10$m2iO2UdsQMIB.cVig5ecIeeHnHsBhh3RGUXm2pZYnc9Lc6G365/Iu', 1, '2022-07-18 01:40:10', '2022-07-18 01:40:10'),
(2, 'pembimbing', 'pembimbing@gmail.com', '$2y$10$0Afi2jnJIzCQWpepbAo5/.XOZ4t7d49nBPniK8eTvvMf9AjUW6bFe', 2, '2022-07-18 01:43:52', '2022-07-18 01:43:52'),
(3, 'kaprodi', 'kaprodi@gmail.com', '$2y$10$oDOWGPSqkDf4PECevTmnf.AqbR6So00l2qJnxrIP6zkU0N43rfCY6', 3, '2022-07-18 01:44:15', '2022-07-18 01:44:15'),
(4, 'admin', 'admin@gmail.com', '$2y$10$t6hFNv90c2dNyrD4ca/6beP4WEr4QyUreDkEIecsFwRBvTqJtO6ou', 4, '2022-07-18 01:44:31', '2022-07-18 01:44:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_hkis`
--
ALTER TABLE `daftar_hkis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daftar_hkis_role_id_foreign` (`user_id`);

--
-- Indexes for table `hkis`
--
ALTER TABLE `hkis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daftar_hkis_role_id_foreign` (`user_id`);

--
-- Indexes for table `katalogs`
--
ALTER TABLE `katalogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `katalogs_kategori_id_foreign` (`kategori_id`),
  ADD KEY `katalogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_hkis`
--
ALTER TABLE `daftar_hkis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hkis`
--
ALTER TABLE `hkis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `katalogs`
--
ALTER TABLE `katalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `katalogs`
--
ALTER TABLE `katalogs`
  ADD CONSTRAINT `katalogs_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
