-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 07:56 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urlshortner`
--

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
(1, '2018_09_21_202111_create_shortners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shortners`
--

CREATE TABLE `shortners` (
  `id` int(10) UNSIGNED NOT NULL,
  `short_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shortners`
--

INSERT INTO `shortners` (`id`, `short_url`, `unique_code`, `created_at`, `updated_at`) VALUES
(6, 'https://www.amazon.com', '1537709508', '2018-09-23 08:01:48', '2018-09-23 08:01:48'),
(7, 'http://www.youtube.com', '1537711285', '2018-09-23 08:31:25', '2018-09-23 08:31:25'),
(8, 'http://www.facebook.com', '1537711302', '2018-09-23 08:31:42', '2018-09-23 08:31:42'),
(9, 'http://www.baidu.com', '1537711322', '2018-09-23 08:32:02', '2018-09-23 08:32:02'),
(10, 'http://www.yahoo.com', '1537711334', '2018-09-23 08:32:14', '2018-09-23 08:32:14'),
(11, 'http://www.amazon.com', '1537711345', '2018-09-23 08:32:25', '2018-09-23 08:32:25'),
(12, 'http://www.wikipedia.org', '1537711356', '2018-09-23 08:32:36', '2018-09-23 08:32:36'),
(13, 'http://www.qq.com', '1537711371', '2018-09-23 08:32:51', '2018-09-23 08:32:51'),
(14, 'http://www.google.co.in', '1537711385', '2018-09-23 08:33:05', '2018-09-23 08:33:05'),
(15, 'http://www.twitter.com', '1537711396', '2018-09-23 08:33:16', '2018-09-23 08:33:16'),
(16, 'http://www.live.com', '1537711479', '2018-09-23 08:34:39', '2018-09-23 08:34:39'),
(17, 'http://www.taobao.com', '1537712795', '2018-09-23 08:56:35', '2018-09-23 08:56:35'),
(18, 'http://www.bing.com', '1537712822', '2018-09-23 08:57:02', '2018-09-23 08:57:02'),
(19, 'http://www.instagram.com', '1537712836', '2018-09-23 08:57:16', '2018-09-23 08:57:16'),
(20, 'http://www.weibo.com', '1537712851', '2018-09-23 08:57:31', '2018-09-23 08:57:31'),
(21, 'http://www.sina.com.cn', '1537713737', '2018-09-23 09:12:17', '2018-09-23 09:12:17'),
(22, 'http://www.linkedin.com', '1537716399', '2018-09-23 09:56:39', '2018-09-23 09:56:39'),
(23, 'http://www.yahoo.co.jp', '5ba7b16b01e82', '2018-09-23 09:59:47', '2018-09-23 09:59:47'),
(24, 'http://www.msn.com', '17321', '2018-09-23 10:12:01', '2018-09-23 10:12:01'),
(25, 'http://www.vk.com', '17365', '2018-09-23 10:12:45', '2018-09-23 10:12:45'),
(26, 'http://www.yandex.ru', '21105', '2018-09-23 11:15:05', '2018-09-23 11:15:05'),
(27, 'https://www.google.com/', '23898', '2018-09-23 12:01:38', '2018-09-23 12:01:38'),
(28, 'http://www.hao123.com', '24614', '2018-09-23 12:13:34', '2018-09-23 12:13:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shortners`
--
ALTER TABLE `shortners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shortners`
--
ALTER TABLE `shortners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
