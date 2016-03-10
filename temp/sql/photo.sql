-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016 年 3 月 10 日 08:01
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
  `type` varchar(32) NOT NULL,
  `photo_image` varchar(128) NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Photoのform';

--
-- テーブルのデータのダンプ `t_photo`
--

INSERT INTO `t_photo` (`id`, `type`, `photo_image`, `del_flag`, `created_at`, `updated_at`) VALUES
(1, 'Space', '12348163_1642501666000198_463362214375075232_n.png', 0, '2016-03-01 07:16:09', '2016-03-01 07:16:09'),
(2, 'Drink', 'logo_myanmar.png', 0, '2016-03-01 07:16:28', '2016-03-01 07:16:28'),
(3, 'Food', 'logo_myanmar_developer.png', 0, '2016-03-01 07:26:56', '2016-03-01 07:37:43'),
(4, 'Food', '12348163_1642501666000198_463362214375075232_n.png', 0, '2016-03-01 07:27:27', '2016-03-02 10:48:24'),
(5, 'Space', '', 0, '2016-03-02 08:15:43', '2016-03-02 08:15:43');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
