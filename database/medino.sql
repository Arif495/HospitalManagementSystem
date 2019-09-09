-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 07:04 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medino`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `add_department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `add_department`, `department_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Cardiology', 'asdasdasda', 1, '2019-07-31 10:45:15', '2019-08-02 11:49:35'),
(2, 'Dental', 'asdasdasda', 1, '2019-07-31 10:45:29', '2019-08-03 13:12:21'),
(3, 'Medicine', 'asdasdasdwwawd', 1, '2019-07-31 11:09:42', '2019-08-03 13:12:21'),
(4, 'Ear nose and throat (ENT)', 'asdasdasdfa', 1, '2019-07-31 12:34:24', '2019-08-03 13:12:22'),
(5, 'Accident and emergency (A&E)', 'asdasdasdwwawd', 1, '2019-07-31 12:35:07', '2019-08-07 14:15:49'),
(6, 'Neurology', 'asdasdasdwwawd', 1, '2019-07-31 12:36:40', '2019-08-07 14:15:51'),
(7, 'Nutrition and Dietetics', 'asdasdasdwwawd', 1, '2019-07-31 12:37:00', '2019-08-07 14:15:55'),
(8, 'Orthopaedics', 'asdasdasdwwawd', 1, '2019-07-31 12:37:17', '2019-08-07 14:15:54'),
(9, 'Pharmacy', 'asdasdasdwwawd', 1, '2019-07-31 12:37:34', '2019-08-07 14:15:52'),
(10, 'Radiotherapy', 'asdasdasda', 1, '2019-07-31 12:37:49', '2019-08-07 14:15:57'),
(11, 'Intensive Care Unit (ICU)', 'asdasda', 1, '2019-07-31 12:38:32', '2019-08-07 14:15:59'),
(12, 'Gynecology', 'asdasdasdwwawd', 1, '2019-07-31 12:38:49', '2019-07-31 12:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `doctor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_gender` tinyint(4) NOT NULL,
  `doctor_mobile` int(11) NOT NULL,
  `doctor_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `department_id`, `doctor_name`, `doctor_gender`, `doctor_mobile`, `doctor_info`, `doctor_image`, `created_at`, `updated_at`) VALUES
(8, 1, 'Dr Rashid khan', 1, 1677170915, 'sdfgdfgasgfafdasdasda', 'doctor-image/doctor4.jpg', '2019-08-07 10:10:14', '2019-08-07 10:12:23'),
(9, 2, 'Dr Abdul Malek', 1, 1918425020, 'adasdasdasd', 'doctor-image/doctor1.jpg', '2019-08-07 10:45:07', '2019-08-07 12:12:48'),
(10, 3, 'HM kamal', 1, 133684566, 'asdasdfsdfasdfasdf', 'doctor-image/c5.jpg', '2019-08-07 10:45:33', '2019-08-07 10:45:33'),
(12, 12, 'Dr Sadia Siraj', 0, 12587556, 'asdasdgacxfseradfdfaesaf', 'doctor-image/doctor3.jpg', '2019-08-07 10:49:06', '2019-08-07 10:49:47'),
(13, 3, 'Dr Selena Gomez', 0, 133684566, 'adfasgfafsgasdfasdf', 'doctor-image/dr-elise-new-pic-2.jpg', '2019-08-07 11:26:15', '2019-08-07 11:26:15'),
(14, 6, 'Dr Mojid Aslam', 1, 1918425020, 'asdasgasdfgagavhrae', 'doctor-image/1516182246Dr.ajay-kashyap.jpg', '2019-08-07 11:26:49', '2019-08-07 11:26:49'),
(15, 8, 'Dr Takiona Muteasi', 1, 133684566, 'asdfasgagaeegar4aw', 'doctor-image/dr_inui2.jpg', '2019-08-07 11:28:35', '2019-08-07 11:28:35'),
(16, 7, 'Dr Irina Shaikh', 0, 125875566, 'asdfdsgafgafgasg', 'doctor-image/images.jpeg', '2019-08-07 11:29:18', '2019-08-07 11:29:18'),
(17, 5, 'Dr Salman Azad', 1, 125875566, 'adsasdfasdfasdfa', 'doctor-image/1516182246Dr.ajay-kashyap.jpg', '2019-08-07 11:52:50', '2019-08-07 11:52:50'),
(18, 9, 'Dr Kamal Hosen', 1, 1918425020, 'asdfasdfasdfasdgsha', 'doctor-image/mehedi-hasan00002-1537720466999-1541011595016.jpg', '2019-08-07 11:53:30', '2019-08-07 11:53:30'),
(19, 10, 'Dr Mahfuzur Rahman', 1, 125875566, 'asdasgafgasdasdfas', 'doctor-image/download (2).jpg', '2019-08-07 11:54:53', '2019-08-07 11:54:53'),
(20, 11, 'Dr Dipak Mallik', 1, 133684566, 'asddfgsdfasdfasgfhjyyt', 'doctor-image/download.jpg', '2019-08-07 11:58:00', '2019-08-07 11:58:00'),
(22, 10, 'Dr Strenge', 1, 1918425020, 'asdfasdgfafgasdsfaasd', 'doctor-image/ply_dr_strange_graded.0.jpg', '2019-08-07 12:01:40', '2019-08-07 12:04:05'),
(24, 11, 'Dr Sabbir Ahmed', 1, 133684566, 'dagafgasdfraggr', 'doctor-image/doctor2.jpg', '2019-08-07 14:14:35', '2019-08-07 14:14:35');

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
(3, '2019_07_31_112538_create_departments_table', 2),
(4, '2019_07_31_164211_create_departments_table', 3),
(5, '2019_08_02_200253_create_doctors_table', 4);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arif', 'arifulhasan495@gmail.com', '$2y$10$L3PeBo7f8X5RXw1UnlqMKOcALIas3PUlHaJPMmIqG.35lWPVvWdZW', NULL, '2019-07-29 07:12:37', '2019-07-29 07:12:37'),
(2, 'Sayeda', 'admin@gmail.com', '$2y$10$GSS/7cnk.MHv298fdujO7eSwEJUp6x0kQ4Q.bamPUSVMK9Qly2wsa', NULL, '2019-07-29 09:44:41', '2019-07-29 09:44:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
