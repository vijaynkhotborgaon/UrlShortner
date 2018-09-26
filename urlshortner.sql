-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 12:42 PM
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
(8, '2018_09_21_202111_create_shortners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shortners`
--

CREATE TABLE `shortners` (
  `id` int(10) UNSIGNED NOT NULL,
  `short_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shortners`
--

INSERT INTO `shortners` (`id`, `short_url`, `unique_code`) VALUES
(1, 'http://www.t.co', 'o6qfx'),
(2, 'http://www.tmall.com', 'hlx7l'),
(3, 'http://www.google.com.br', '9dfme'),
(4, 'http://www.360.cn', 'blu0v'),
(5, 'http://www.sohu.com', '74vx1'),
(6, 'http://www.amazon.co.jp', '48iw1'),
(7, 'http://www.pinterest.com', 'nlhgg'),
(8, 'http://www.netflix.com', '6f9ko'),
(9, 'http://www.google.it', '5o3bd'),
(10, 'http://www.google.ru', 'aatkz'),
(11, 'http://www.microsoft.com', '1culd'),
(12, 'http://www.google.es', '98uhh'),
(13, 'http://www.wordpress.com', 'g6lb3'),
(14, 'http://www.gmw.cn', 'p47ze'),
(15, 'http://www.tumblr.com', 'syskz'),
(16, 'http://www.paypal.com', '2s6gc'),
(17, 'http://www.blogspot.com', 'f372n'),
(18, 'http://www.imgur.com', '9a8iv'),
(19, 'http://www.stackoverflow.com', 'b4698'),
(20, 'http://www.aliexpress.com', 'em4ph'),
(21, 'http://www.naver.com', 'ddxfj'),
(22, 'http://www.ok.ru', '70iek'),
(23, 'http://www.apple.com', 'tv6pp'),
(24, 'http://www.github.com', 'kip9i'),
(25, 'http://www.chinadaily.com.cn', 'jeri7'),
(26, 'http://www.imdb.com', 'ic357'),
(27, 'http://www.google.co.kr', 'onokg'),
(28, 'http://www.fc2.com', 'jlpvu'),
(29, 'http://www.jd.com', 'gtj7i'),
(30, 'http://www.blogger.com', 'dma5k'),
(31, 'http://www.163.com', 'g93ux'),
(32, 'http://www.google.ca', 'c7z8v'),
(33, 'http://www.whatsapp.com', '9rl6j'),
(34, 'http://www.amazon.in', 'o9nys'),
(35, 'http://www.office.com', 'gh8v7'),
(36, 'http://www.tianya.cn', 'huw2u'),
(37, 'http://www.google.co.id', 'psfo1'),
(38, 'http://www.youku.com', 'j9a4m'),
(39, 'http://www.rakuten.co.jp', 'hem9r'),
(40, 'http://www.craigslist.org', '3xy9v'),
(41, 'http://www.amazon.de', 'fa9y3'),
(42, 'http://www.nicovideo.jp', '3bofg'),
(43, 'http://www.google.pl', 'mvg3t'),
(44, 'http://www.soso.com', '74fbg'),
(45, 'http://www.bilibili.com', 'aggoo'),
(46, 'http://www.dropbox.com', 'ckhgm'),
(47, 'http://www.xinhuanet.com', 'ezo0h'),
(48, 'http://www.outbrain.com', 'kwg3w'),
(49, 'http://www.pixnet.net', 'sq713'),
(50, 'http://www.alibaba.com', 'cmu1s'),
(51, 'http://www.alipay.com', 'dpntx'),
(52, 'http://www.microsoftonline.com', 'olva3'),
(53, 'http://www.booking.com', 'cynw4'),
(54, 'http://www.googleusercontent.com', 'npizu'),
(55, 'http://www.google.com.au', 't0hy3'),
(56, 'http://www.popads.net', '99wd5'),
(57, 'http://www.cntv.cn', 'ih0qe'),
(58, 'http://www.zhihu.com', '67f5a'),
(59, 'http://www.amazon.co.uk', '2j0fd'),
(60, 'http://www.diply.com', 'piu3e'),
(61, 'http://www.coccoc.com', '1lr5q'),
(62, 'http://www.cnn.com', 'hzv1t'),
(63, 'http://www.bbc.co.uk', '1gb1u'),
(64, 'http://www.twitch.tv', '29vbz'),
(65, 'http://www.wikia.com', '5elfo'),
(66, 'http://www.google.co.th', 'go76i'),
(67, 'http://www.go.com', 'otecm'),
(68, 'http://www.google.com.ph', 'emgu3'),
(69, 'http://www.doubleclick.net', 'emgu3'),
(70, 'http://www.onet.pl', '8ln8d'),
(71, 'http://www.googleadservices.com', 'btb10'),
(72, 'http://www.accuweather.com', 'sfn1e'),
(73, 'http://www.answers.yahoo.com', 's9z5p'),
(74, 'http://www.google.com', 'j5lfq'),
(75, 'http://www.sina.com.cn', 'koqez'),
(76, 'http://www.linkedin.com', 'skig0'),
(77, 'http://www.yahoo.co.jp', '775v1'),
(78, 'http://www.msn.com', 'hlqlm'),
(79, 'http://www.vk.com', '3tjcn'),
(80, 'http://www.google.de', '9ccmb'),
(81, 'http://www.yandex.ru', '8k92u'),
(82, 'http://www.hao123.com', '4bgql'),
(83, 'http://www.google.co.uk', 'bw4rb'),
(84, 'http://www.reddit.com', 'amyuh'),
(85, 'http://www.ebay.com', '8k42o'),
(86, 'http://www.google.fr', '3cjmc'),
(87, 'http://www.instagram.com', '2nb0b'),
(88, 'http://www.weibo.com', 'fd7ot'),
(89, 'http://www.taobao.com', 'k840x'),
(90, 'http://www.bing.com', 't7r26'),
(91, 'http://www.live.com', '8r9eo'),
(92, 'http://www.twitter.com', 'p9b4c'),
(93, 'http://www.google.co.in', '9gizf'),
(94, 'http://www.qq.com', 'm75o7'),
(95, 'http://www.amazon.com', '42is3'),
(96, 'http://www.wikipedia.org', 'dwcem'),
(97, 'http://www.yahoo.com', 'mc8pv'),
(98, 'http://www.baidu.com', 'bsjzc'),
(99, 'http://www.facebook.com', 'sqysy');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shortners`
--
ALTER TABLE `shortners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
