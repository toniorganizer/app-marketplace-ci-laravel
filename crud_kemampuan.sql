-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 05:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_kemampuan`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_12_06_141623_create_t_barangs_table', 1),
(4, '2023_12_06_141713_create_t_supliers_table', 1),
(5, '2023_12_06_141742_create_t_hbelis_table', 1),
(6, '2023_12_06_141804_create_t_dbelis_table', 1),
(7, '2023_12_06_141935_create_t_stocks_table', 1),
(8, '2023_12_06_142001_create_t_hutangs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_barangs`
--

CREATE TABLE `t_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kodebrg` char(10) NOT NULL,
  `namabrg` char(100) NOT NULL,
  `satuan` char(10) NOT NULL,
  `hargabeli` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_barangs`
--

INSERT INTO `t_barangs` (`id`, `kodebrg`, `namabrg`, `satuan`, `hargabeli`, `created_at`, `updated_at`) VALUES
(2, 'B02', 'Adidas', 'pcs', 120000, '2023-12-06 22:45:24', '2023-12-07 08:20:19'),
(3, 'B03', 'New Adidas', 'pcs', 150000, '2023-12-07 08:28:49', '2023-12-07 08:28:49'),
(4, 'B04', 'Swalow', 'pcs', 120000, '2023-12-07 08:30:56', '2023-12-07 08:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `t_dbelis`
--

CREATE TABLE `t_dbelis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notransaksi` char(10) NOT NULL,
  `kodebrg` char(10) NOT NULL,
  `hargabeli` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `diskonrp` int(11) NOT NULL,
  `totalrp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_dbelis`
--

INSERT INTO `t_dbelis` (`id`, `notransaksi`, `kodebrg`, `hargabeli`, `qty`, `diskon`, `diskonrp`, `totalrp`, `created_at`, `updated_at`) VALUES
(12, 'B202312012', 'B01', 50000, 2, 10, 10000, 100000, '2023-12-07 07:37:56', '2023-12-07 07:37:56'),
(13, 'B202312013', 'B02', 120000, 3, 10, 36000, 360000, '2023-12-07 07:39:02', '2023-12-07 07:39:02'),
(14, 'B202312014', 'B01', 50000, 1, 10, 5000, 50000, '2023-12-07 07:42:02', '2023-12-07 07:42:02'),
(15, 'B202312015', 'B02', 120000, 2, 10, 24000, 240000, '2023-12-07 08:35:08', '2023-12-07 08:35:08'),
(16, 'B202312016', 'B03', 150000, 2, 10, 30000, 300000, '2023-12-07 08:35:36', '2023-12-07 08:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `t_hbelis`
--

CREATE TABLE `t_hbelis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notransaksi` char(10) NOT NULL,
  `kodespl` char(10) NOT NULL,
  `tglbeli` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_hbelis`
--

INSERT INTO `t_hbelis` (`id`, `notransaksi`, `kodespl`, `tglbeli`, `created_at`, `updated_at`) VALUES
(12, 'B202312012', 'S01', '2023-12-07', '2023-12-07 07:37:56', '2023-12-07 07:37:56'),
(13, 'B202312013', 'S01', '2023-12-07', '2023-12-07 07:39:02', '2023-12-07 07:39:02'),
(14, 'B202312014', 'S02', '2023-12-07', '2023-12-07 07:42:02', '2023-12-07 07:42:02'),
(15, 'B202312015', 'S01', '2023-12-07', '2023-12-07 08:35:08', '2023-12-07 08:35:08'),
(16, 'B202312016', 'S01', '2023-12-07', '2023-12-07 08:35:36', '2023-12-07 08:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `t_hutangs`
--

CREATE TABLE `t_hutangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notransaksi` char(10) NOT NULL,
  `kodespl` char(10) NOT NULL,
  `tglbeli` date NOT NULL,
  `totalhutang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_hutangs`
--

INSERT INTO `t_hutangs` (`id`, `notransaksi`, `kodespl`, `tglbeli`, `totalhutang`, `created_at`, `updated_at`) VALUES
(3, 'B202312014', 'S02', '2023-12-07', 530000, '2023-12-07 07:27:59', '2023-12-07 07:42:02'),
(4, 'B202312016', 'S01', '2023-12-07', 1100000, '2023-12-07 07:33:28', '2023-12-07 08:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `t_stocks`
--

CREATE TABLE `t_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kodebrg` char(10) NOT NULL,
  `qtybeli` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_stocks`
--

INSERT INTO `t_stocks` (`id`, `kodebrg`, `qtybeli`, `created_at`, `updated_at`) VALUES
(6, 'B02', 12, '2023-12-07 07:27:59', '2023-12-07 08:35:08'),
(7, 'B01', 6, '2023-12-07 07:28:16', '2023-12-07 07:42:02'),
(8, 'B03', 2, '2023-12-07 08:35:36', '2023-12-07 08:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `t_supliers`
--

CREATE TABLE `t_supliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kodespl` char(10) NOT NULL,
  `namaspl` char(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_supliers`
--

INSERT INTO `t_supliers` (`id`, `kodespl`, `namaspl`, `created_at`, `updated_at`) VALUES
(1, 'S01', 'Tri Yuli', '2023-12-06 20:40:40', '2023-12-06 20:40:40'),
(2, 'S02', 'Gagus', '2023-12-06 20:43:28', '2023-12-06 20:43:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_barangs`
--
ALTER TABLE `t_barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_dbelis`
--
ALTER TABLE `t_dbelis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_hbelis`
--
ALTER TABLE `t_hbelis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_hutangs`
--
ALTER TABLE `t_hutangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_stocks`
--
ALTER TABLE `t_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_supliers`
--
ALTER TABLE `t_supliers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_barangs`
--
ALTER TABLE `t_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_dbelis`
--
ALTER TABLE `t_dbelis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `t_hbelis`
--
ALTER TABLE `t_hbelis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `t_hutangs`
--
ALTER TABLE `t_hutangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_stocks`
--
ALTER TABLE `t_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_supliers`
--
ALTER TABLE `t_supliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
