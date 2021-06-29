-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 01:34 PM
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
  `kelengkapan_alat` double NOT NULL,
  `kualitas_alat` double NOT NULL,
  `kualitas_ruangan` double NOT NULL,
  `harga` double NOT NULL,
  `pelayanan` double NOT NULL,
  `fasilitas` double NOT NULL,
  `waktu_operasional` double NOT NULL,
  `suasana_studio` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id`, `kelengkapan_alat`, `kualitas_alat`, `kualitas_ruangan`, `harga`, `pelayanan`, `fasilitas`, `waktu_operasional`, `suasana_studio`, `created_at`, `updated_at`) VALUES
(1, 0.242, 0.242, 0.242, 0.123, 0.07, 0.039, 0.021, 0.021, '2021-01-06 03:10:15', '2021-06-29 04:25:50');

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

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `id_studio`, `id_users`, `ruangan`, `tanggal`, `start`, `durasi`, `end`, `harga`, `pembayaran`, `foto`, `created_at`, `updated_at`) VALUES
(6, 8, 10, 1, '2021-06-30', '16:00:00', 4, '20:00:00', '180000', NULL, NULL, '2021-06-28 01:57:33', '2021-06-28 01:57:33'),
(7, 7, 8, 1, '2021-06-30', '15:00:00', 3, '18:00:00', '180000', NULL, NULL, '2021-06-29 02:38:22', '2021-06-29 02:38:22');

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
  `kelengkapan_alat` int(11) NOT NULL,
  `kualitas_alat` int(11) NOT NULL,
  `kualitas_ruangan` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `pelayanan` int(11) NOT NULL,
  `fasilitas` int(11) NOT NULL,
  `waktu_operasional` int(11) NOT NULL,
  `suasana_studio` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konversi`
--

INSERT INTO `konversi` (`id_studio`, `kelengkapan_alat`, `kualitas_alat`, `kualitas_ruangan`, `harga`, `pelayanan`, `fasilitas`, `waktu_operasional`, `suasana_studio`, `created_at`, `updated_at`) VALUES
(7, 4, 5, 4, 5, 5, 2, 4, 4, '2021-06-16 08:12:51', '2021-06-16 09:40:24'),
(8, 4, 3, 3, 6, 3, 2, 6, 3, '2021-06-16 08:17:24', '2021-06-16 08:17:24'),
(9, 3, 3, 3, 6, 5, 2, 6, 3, '2021-06-16 08:20:02', '2021-06-16 08:20:02'),
(10, 4, 4, 4, 5, 4, 1, 6, 4, '2021-06-16 08:22:03', '2021-06-16 09:24:12'),
(11, 4, 4, 4, 5, 3, 1, 6, 4, '2021-06-16 08:24:23', '2021-06-16 08:24:23'),
(15, 4, 4, 4, 7, 4, 4, 6, 4, '2021-06-29 04:24:24', '2021-06-29 04:25:10');

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

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `id_booking`, `id_studio`, `ruangan`, `tanggal`, `start`, `end`, `created_at`, `updated_at`) VALUES
(9, 6, 8, 1, '2021-06-30', '16:00:00', '17:00:00', '2021-06-28 01:57:33', '2021-06-28 01:57:33'),
(10, 6, 8, 1, '2021-06-30', '17:00:00', '18:00:00', '2021-06-28 01:57:33', '2021-06-28 01:57:33'),
(11, 6, 8, 1, '2021-06-30', '18:00:00', '19:00:00', '2021-06-28 01:57:33', '2021-06-28 01:57:33'),
(12, 6, 8, 1, '2021-06-30', '19:00:00', '20:00:00', '2021-06-28 01:57:33', '2021-06-28 01:57:33'),
(13, 7, 7, 1, '2021-06-30', '15:00:00', '16:00:00', '2021-06-29 02:38:23', '2021-06-29 02:38:23'),
(14, 7, 7, 1, '2021-06-30', '16:00:00', '17:00:00', '2021-06-29 02:38:23', '2021-06-29 02:38:23'),
(15, 7, 7, 1, '2021-06-30', '17:00:00', '18:00:00', '2021-06-29 02:38:23', '2021-06-29 02:38:23');

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
  `fasilitas` int(11) NOT NULL,
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

INSERT INTO `studio` (`id`, `nama_studio`, `alamat`, `telefon`, `jumlah_ruangan`, `fasilitas`, `harga`, `buka`, `tutup`, `foto`, `id_users`, `created_at`, `updated_at`) VALUES
(7, 'alzena studio', 'Gg. Asem Pamulang', '0822-6117-2107', 2, 2, '60,000', '12:00:00', '23:59:00', NULL, 9, '2021-06-16 08:12:51', '2021-06-16 09:40:24'),
(8, 'studio legend', 'Pd. Ranji Ciputat', '0819-0630-2657', 2, 2, '45,000', '10:00:00', '23:59:00', NULL, 10, '2021-06-16 08:17:24', '2021-06-16 08:17:24'),
(9, 'fariz studio music', 'Pisangan, Ciputat', '0897-9647-495_', 2, 2, '35,000', '08:00:00', '23:00:00', NULL, 11, '2021-06-16 08:20:02', '2021-06-16 08:20:02'),
(10, 'studio music 86', 'Cirendeu, Ciputat', '0217-5057-97__', 2, 1, '55,000', '10:00:00', '23:00:00', NULL, 12, '2021-06-16 08:22:03', '2021-06-16 09:24:12'),
(11, 'woodstock studio', 'Benda baru, Pamulang', '0813-1765-9330', 2, 1, '65,000', '10:00:00', '23:59:00', NULL, 13, '2021-06-16 08:24:23', '2021-06-16 09:21:53'),
(15, 'coba', 'jauh banget', '1232-3213-1213', 5, 4, '12,323', '10:32:00', '22:11:00', NULL, 9, '2021-06-29 04:24:23', '2021-06-29 04:25:10');

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
(13, 'operator woodstock studio', '0812-3232-1232', 'woodstock@studio.com', NULL, '$2y$10$ZMeK0I5AcAvMniuXlU9V.egb2YGoTHUVVsRMFn78nihxDmSDucY4i', 'operator', 0, NULL, '2021-06-16 07:01:24', '2021-06-29 01:22:10');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
