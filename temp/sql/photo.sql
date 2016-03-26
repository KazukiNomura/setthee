-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016 年 3 月 26 日 05:58
-- サーバのバージョン： 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `setthee`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `t_photo`
--

CREATE TABLE `t_photo` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `photo_image` varchar(128) NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Photoのform';

--
-- テーブルのデータのダンプ `t_photo`
--

INSERT INTO `t_photo` (`id`, `shop_id`, `type`, `photo_image`, `del_flag`, `created_at`, `updated_at`) VALUES
(1, 0, 'Food', 'shop_topWireframe .png', 0, '2016-03-01 07:16:09', '2016-03-24 22:18:35'),
(2, 0, 'Drink', 'logo_myanmar.png', 0, '2016-03-01 07:16:28', '2016-03-01 07:16:28'),
(3, 0, 'Food', 'logo_myanmar_developer.png', 0, '2016-03-01 07:26:56', '2016-03-01 07:37:43'),
(4, 0, 'Food', '12348163_1642501666000198_463362214375075232_n.png', 0, '2016-03-01 07:27:27', '2016-03-02 10:48:24'),
(5, 0, 'Space', '', 0, '2016-03-02 08:15:43', '2016-03-02 08:15:43'),
(6, 0, 'Food', '', 0, '2016-03-24 10:22:46', '2016-03-24 10:22:46'),
(7, 0, 'Drink', '', 0, '2016-03-24 10:22:51', '2016-03-24 10:22:51'),
(8, 0, 'Food', '', 0, '2016-03-24 10:23:22', '2016-03-24 10:23:22'),
(9, 0, 'Food', '', 0, '2016-03-24 10:27:33', '2016-03-24 10:27:33'),
(10, 0, 'Food', '', 0, '2016-03-24 10:33:29', '2016-03-24 10:33:29'),
(11, 0, 'Food', '', 0, '2016-03-24 10:41:20', '2016-03-24 10:41:20'),
(12, 0, 'Food', '', 0, '2016-03-24 10:42:09', '2016-03-24 10:42:09'),
(13, 0, 'Food', '', 0, '2016-03-24 10:42:16', '2016-03-24 10:42:16'),
(14, 0, 'Food', '', 0, '2016-03-24 10:44:06', '2016-03-24 10:44:06'),
(15, 0, 'Food', '', 0, '2016-03-24 10:45:57', '2016-03-24 10:45:57'),
(16, 0, 'Food', '', 0, '2016-03-24 10:50:53', '2016-03-24 10:50:53'),
(17, 0, 'Food', '', 0, '2016-03-24 10:57:28', '2016-03-24 10:57:28'),
(18, 0, 'Food', '', 0, '2016-03-24 10:57:33', '2016-03-24 10:57:33'),
(19, 0, 'Food', '', 0, '2016-03-24 10:58:32', '2016-03-24 10:58:32'),
(20, 0, 'Food', '', 0, '2016-03-24 10:58:47', '2016-03-24 10:58:47'),
(21, 0, 'Food', '', 0, '2016-03-24 10:59:20', '2016-03-24 10:59:20'),
(22, 0, 'Food', '', 0, '2016-03-24 11:16:56', '2016-03-24 11:16:56'),
(23, 0, 'Food', '', 0, '2016-03-24 11:18:46', '2016-03-24 11:18:46'),
(24, 0, 'Food', '', 0, '2016-03-24 11:23:41', '2016-03-24 11:23:41'),
(25, 0, 'Food', '', 0, '2016-03-24 11:24:55', '2016-03-24 11:24:55'),
(26, 0, 'Food', '', 0, '2016-03-24 11:39:50', '2016-03-24 11:39:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_photo`
--
ALTER TABLE `t_photo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_photo`
--
ALTER TABLE `t_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
