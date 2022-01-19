-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 03:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studioahp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelayanan` double NOT NULL,
  `harga` double NOT NULL,
  `fasilitas_alat` double NOT NULL,
  `waktu_operasional` double NOT NULL,
  `fasilitas_rekaman` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id`, `pelayanan`, `harga`, `fasilitas_alat`, `waktu_operasional`, `fasilitas_rekaman`, `created_at`, `updated_at`) VALUES
(1, 0.504, 0.26, 0.134, 0.067, 0.035, '2021-01-06 03:10:15', '2021-07-26 05:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_studio` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `ruangan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `start` time NOT NULL,
  `durasi` int(10) NOT NULL,
  `end` time NOT NULL,
  `harga` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembayaran` enum('Ditempat','Transfer') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konversi`
--

CREATE TABLE `konversi` (
  `id_studio` bigint(20) UNSIGNED NOT NULL,
  `pelayanan` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `fasilitas_alat` int(11) NOT NULL,
  `waktu_operasional` int(11) NOT NULL,
  `fasilitas_rekaman` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konversi`
--

INSERT INTO `konversi` (`id_studio`, `pelayanan`, `harga`, `fasilitas_alat`, `waktu_operasional`, `fasilitas_rekaman`, `created_at`, `updated_at`) VALUES
(7, 3, 5, 3, 4, 2, '2021-06-16 08:12:51', '2021-07-28 10:27:14'),
(8, 4, 6, 1, 6, 2, '2021-06-16 08:17:24', '2021-07-28 10:29:37'),
(9, 4, 6, 5, 6, 2, '2021-06-16 08:20:02', '2021-07-28 10:30:17'),
(10, 2, 5, 4, 6, 1, '2021-06-16 08:22:03', '2021-07-28 10:31:32'),
(11, 5, 4, 4, 6, 4, '2021-06-16 08:24:23', '2021-07-28 10:34:59'),
(19, 1, 5, 4, 4, 2, '2021-07-28 10:05:43', '2021-07-28 10:05:43'),
(21, 4, 6, 1, 4, 4, '2021-07-28 10:12:17', '2021-07-28 10:12:17'),
(22, 4, 6, 1, 4, 2, '2021-07-28 10:15:38', '2021-07-28 10:15:38'),
(23, 1, 6, 1, 6, 1, '2021-07-28 10:18:48', '2021-07-28 10:18:48'),
(24, 5, 6, 3, 4, 3, '2021-07-28 10:21:42', '2021-07-28 10:21:42');

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
(50, '2014_10_12_000000_create_users_table', 1),
(51, '2014_10_12_100000_create_password_resets_table', 1),
(52, '2019_08_19_000000_create_failed_jobs_table', 1),
(53, '2021_06_07_073354_create_table_bobot', 1),
(54, '2021_06_07_074225_create_table_studio', 1),
(55, '2021_06_07_075718_create_table_booking', 1),
(56, '2021_06_07_081324_create_table_konversi', 1),
(58, '2021_06_28_083005_create_table_rooms', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_booking` bigint(20) UNSIGNED NOT NULL,
  `id_studio` bigint(20) UNSIGNED NOT NULL,
  `ruangan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_studio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_ruangan` int(11) NOT NULL,
  `fasilitas_alat` int(11) NOT NULL,
  `fasilitas_rekaman` int(11) NOT NULL,
  `harga` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buka` time NOT NULL,
  `tutup` time NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_users` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id`, `nama_studio`, `alamat`, `telefon`, `jumlah_ruangan`, `fasilitas_alat`, `fasilitas_rekaman`, `harga`, `buka`, `tutup`, `foto`, `id_users`, `created_at`, `updated_at`) VALUES
(7, 'alzena studio', 'Gg. Asem Pamulang', '0822-6117-2107', 2, 3, 2, '60,000', '12:00:00', '23:59:00', NULL, 9, '2021-06-27 11:12:51', '2021-06-27 11:12:51'),
(8, 'studio legend', 'Pd. Ranji Ciputat', '0819-0630-2657', 2, 1, 2, '45,000', '10:00:00', '23:59:00', NULL, 10, '2021-06-27 11:16:51', '2021-06-27 11:16:51'),
(9, 'fariz studio music', 'Pisangan, Ciputat', '0897-9647-495', 2, 5, 2, '35,000', '08:00:00', '23:00:00', NULL, 11, '2021-06-27 11:18:51', '2021-06-27 11:18:51'),
(10, 'studio music 86', 'Cirendeu, Ciputat', '0217-5057-97_', 2, 4, 1, '55,000', '10:00:00', '23:00:00', NULL, 12, '2021-06-27 11:20:51', '2021-06-27 11:20:51'),
(11, 'woodstock studio', 'Benda baru, Pamulang', '0813-1765-9330', 2, 4, 4, '75,000', '10:00:00', '23:59:00', NULL, 13, '2021-06-27 11:22:51', '2021-06-27 11:22:51'),
(19, 'ariko studio', 'Sawah Lama, Ciputat Baru', '0813-2280-9798', 1, 4, 2, '70,000', '12:00:00', '23:59:00', NULL, 19, '2021-06-27 11:26:51', '2021-06-27 11:26:51'),
(21, 'studio bawah tanah', 'Bambu Apus, Pamulang', '0813-3574-3467', 1, 1, 4, '50,000', '12:00:00', '23:59:00', NULL, 20, '2021-06-27 11:28:51', '2021-06-27 11:28:51'),
(22, 'mm studio', 'Pisangan, Ciputat', '0812-3438-7582', 1, 1, 2, '50,000', '12:00:00', '23:59:00', NULL, 21, '2021-06-27 11:30:51', '2021-06-27 11:30:51'),
(23, 'durest studio', 'Cemp.Putih, Ciputat Timur', '0219-2192-233', 1, 1, 1, '50,000', '10:00:00', '23:59:00', NULL, 22, '2021-06-27 11:32:51', '2021-06-27 11:32:51'),
(24, 'inside studio', 'Cendrawasih, Sawah baru', '0877-7176-7168', 1, 3, 3, '50,000', '12:00:00', '23:59:00', NULL, 23, '2021-06-27 11:34:51', '2021-06-27 11:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','operator','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `izin` tinyint(1) DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `telefon`, `email`, `email_verified_at`, `password`, `level`, `izin`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'alfis', '0812-3328-3223', 'alfis@admin.com', NULL, '$2y$10$EczUvOMIf3zm9Fqpqk4UB.gY7gheVg81N.Ppi8FnMtA/QVweziKOy', 'admin', 0, NULL, '2021-06-16 06:50:55', '2021-06-16 07:39:37'),
(9, 'operator alzena studio', '0812-3322-3232', 'alzena@studio.com', NULL, '$2y$10$6i/.Mr84WFwAVy7UMPuwReXkCkskMoWPLB3AWYuPYiWrcpbu.m8H2', 'operator', 0, NULL, '2021-06-16 06:53:41', '2021-06-29 01:21:33'),
(10, 'operator studio legend', '0812-3329-2332', 'legend@studio.com', NULL, '$2y$10$Dg2BMyFjbcGj8o8fJQdzIejjoBSqKKIvNirfKcXiXXDuOu1U50hnC', 'operator', 0, NULL, '2021-06-16 06:54:36', '2021-06-29 01:22:27'),
(11, 'operator fariz studio', '0822-3221-2321', 'fariz@studio.com', NULL, '$2y$10$N8KjXlSjFOBAIKEfyI/EruNILW1HN0fQQT8ba1lOkIIhCtttx0ADy', 'operator', 0, NULL, '2021-06-16 06:58:28', '2021-06-29 01:21:50'),
(12, 'operator studio 86', '0812-3323-2123', '86@studio.com', NULL, '$2y$10$jtBLBnyh.Q98DY3lEkQaduYCXMJLJx0HogLQhRNiJaA/IC3hiODCG', 'operator', 0, NULL, '2021-06-16 07:00:13', '2021-06-29 01:23:07'),
(13, 'operator woodstock studio', '0812-3232-1232', 'woodstock@studio.com', NULL, '$2y$10$ZMeK0I5AcAvMniuXlU9V.egb2YGoTHUVVsRMFn78nihxDmSDucY4i', 'operator', 0, NULL, '2021-06-16 07:01:24', '2021-06-29 01:22:10'),
(17, 'customer 2', '1233-2123-578', 'customer2@gmail.com', NULL, '$2y$10$BdFAvKu.GGlDJeZNkpoW7eSpj5IKa2HX5L0/qkRMEp.jWIBNxEjli', 'customer', 0, NULL, '2021-06-29 04:44:08', '2021-06-29 04:44:08'),
(18, 'customer', '1233-2123-528', 'customer@gmail.com', NULL, '$2y$10$S.StvPlqPnD1RVM1E.EHoOiMuzIBTm49VRnGUxlDU7arL8MOeknGW', 'customer', 0, NULL, '2021-06-29 04:46:22', '2021-06-29 04:46:22'),
(19, 'operator ariko studio', '0812-3328-4224', 'ariko@studio.com', NULL, '1234567890', 'operator', 0, NULL, '2021-06-16 06:50:55', '2021-06-16 06:50:55'),
(20, 'operator studio bawah tanah', '0812-3328-4225', 'bawahtanah@studio.com', NULL, '1234567890', 'operator', 0, NULL, '2021-06-16 06:50:55', '2021-06-16 06:50:55'),
(21, 'operator mm studio', '0812-3328-4226', 'mm@studio.com', NULL, '1234567890', 'operator', 0, NULL, '2021-06-16 06:50:55', '2021-06-16 06:50:55'),
(22, 'operator durest studio', '0812-3328-4227', 'durest@studio.com', NULL, '1234567890', 'operator', 0, NULL, '2021-06-16 06:50:55', '2021-06-16 06:50:55'),
(23, 'operator inside studio', '0812-3328-4228', 'inside@studio.com', NULL, '1234567890', 'operator', 0, NULL, '2021-06-16 06:50:55', '2021-06-16 06:50:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id_studio_index` (`id_studio`),
  ADD KEY `booking_id_users_index` (`id_users`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konversi`
--
ALTER TABLE `konversi`
  ADD PRIMARY KEY (`id_studio`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_id_booking_index` (`id_booking`),
  ADD KEY `rooms_id_studio_index` (`id_studio`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `studio_telefon_unique` (`telefon`),
  ADD KEY `studio_id_users_index` (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_telefon_unique` (`telefon`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_id_studio_foreign` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konversi`
--
ALTER TABLE `konversi`
  ADD CONSTRAINT `konversi_id_studio_foreign` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_id_booking_foreign` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rooms_id_studio_foreign` FOREIGN KEY (`id_studio`) REFERENCES `studio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studio`
--
ALTER TABLE `studio`
  ADD CONSTRAINT `studio_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
