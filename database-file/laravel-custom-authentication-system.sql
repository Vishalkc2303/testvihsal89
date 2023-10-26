-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 01:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-custom-authentication-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customauthenticationsystem`
--

CREATE TABLE `customauthenticationsystem` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('M','F','O') COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customauthenticationsystem`
--

INSERT INTO `customauthenticationsystem` (`id`, `firstname`, `lastname`, `gender`, `username`, `password`, `created_at`, `updated_at`) VALUES
(4, 'sourav', 'kumar', 'M', 'souravkumar', '$2y$10$VeXl.BxXftg6tjaz7rGMDuEg9.aC3bn7514T82QoWxt7Ho6yN.UDC', '2023-10-08 23:57:06', '2023-10-08 23:57:06'),
(8, 'Avishek', 'kumar', 'M', 'sumitkumar', '$2y$10$Mqc1X/lWcM0spBBy/3yKMOb.j2.L2NkK99vVe01MupdzgAb12j.SK', '2023-10-09 05:07:00', '2023-10-12 00:45:28'),
(9, 'Puja', 'Kumari', 'F', 'pujakumari', '$2y$10$o7xH4eXOeEFVJT.eLxyKqOMSof16XQbCrzS5S43HqHRYEUbeIvNRa', '2023-10-09 21:33:53', '2023-10-09 21:33:53'),
(10, 'deepakjee', 'kumar', 'O', 'deepakkumar', '$2y$10$eYBk0Jmfk.Szj65eiTTcY.xbgQ0FO.HW2OsacRuSlBGPxnXF0e3dC', '2023-10-10 02:08:33', '2023-10-10 02:08:33'),
(11, 'Raju', 'Kumar', 'M', 'rajukumar', '$2y$10$uwB2YDr2LRpiI1JrCGjPI.rpglsbeYqP8NcLiAJsSa/RsP0mVSSWu', '2023-10-10 21:24:51', '2023-10-10 21:24:51'),
(12, 'Mukesh', 'Kumar', 'M', 'mukeshkumar', '$2y$10$khgPx/Tqj./KK90PGpTVXOaAo.MKUxjM5UwqnsByLq8VAADEcPT22', '2023-10-10 21:27:29', '2023-10-10 21:27:29'),
(13, 'Santosh', 'Kumar', 'M', 'amitkumar', '$2y$10$uz4xyJnq5utazRK7Na4I/ufZgx481G8nQip.ZpSTANUEwlgpOnsju', '2023-10-11 00:04:07', '2023-10-12 00:41:43'),
(14, 'Aakash', 'Kumar', 'M', 'aakashkumar', '$2y$10$QO.Pb..2mk356pXMQdAwhOkWPFGUbl3X1WNB6z56piEMcxRZcDWwy', '2023-10-11 00:07:35', '2023-10-11 00:07:35'),
(15, 'Sachine', 'Kumar', 'M', 'sachinekumar', '$2y$10$rQI65kPBDFCSbqpxClgIEOTt2PNvSr7IQNvtLiiYVL4T3gD.0V7ZS', '2023-10-11 06:13:34', '2023-10-11 06:13:34'),
(16, 'Rani', 'Kumari', 'F', 'ranikumari', '$2y$10$0itPVM5paczLbmBBD7NhW.16cvAfMsx9xUnDTQiMm43mUa4ZVqy5W', '2023-10-11 21:11:59', '2023-10-11 21:11:59'),
(17, 'Nisha', 'Kumari', 'F', 'nishakumari', '$2y$10$7ZLRsTK2hbiHvLYzNiomievXu/UJ/j21tE88P.VARrB3UKgR9STu6', '2023-10-11 22:48:14', '2023-10-11 22:48:14'),
(18, 'Arvind', 'Kumar', 'M', 'arvindkumar', '$2y$10$f7c99iyt6jlRMRWWvNv57eD8dXQTtV/qakLR5IWnIRui023KAMHDm', '2023-10-12 00:46:43', '2023-10-12 00:47:14'),
(19, 'Rakesh', 'Kumar', 'M', 'gokukumar', '$2y$10$xPQRKKeUV4YYFDQUcSv1sOgOnxlehJ0MhxbQgfpTrSt0Am/jT7djG', '2023-10-12 00:53:25', '2023-10-12 01:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_09_035022_create_customauthenticationsystem_table', 1),
(6, '2023_10_12_103309_create_student_table', 2);

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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactnumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('M','F','O') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `courses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `address`, `email`, `contactnumber`, `gender`, `dob`, `courses`, `semester`, `section`, `created_at`, `updated_at`) VALUES
(1, 'Rohit', 'Kumar', 'jamshedpur', 'rohit@gmail.com', '6677554433', 'M', '2023-10-13', 'BCA', 'One', 'A', '2023-10-12 21:27:49', '2023-10-12 21:27:49'),
(2, 'Suman', 'Kumari', 'jamshedpur', 'suman@gmail.com', '5566778899', 'F', '2023-10-04', 'BCA', 'Second', 'A', '2023-10-12 21:32:27', '2023-10-12 21:32:27'),
(3, 'vishal', 'gupta', 'Jugsalai', 'vishalitscient80906@gmail.com', '6200016470', 'M', '2023-10-12', 'BCA', 'Fifth', 'B', '2023-10-12 21:49:15', '2023-10-12 21:49:15'),
(4, 'Kunal', 'Kumar', 'Mango', 'kunal@gmail.com', '8765678987', 'M', '1990-02-28', 'B.SC', 'Second', 'C', '2023-10-13 05:17:30', '2023-10-13 05:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customauthenticationsystem`
--
ALTER TABLE `customauthenticationsystem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `customauthenticationsystem`
--
ALTER TABLE `customauthenticationsystem`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
