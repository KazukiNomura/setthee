-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016 年 3 月 02 日 03:53
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
-- テーブルの構造 `t_coupon`
--

CREATE TABLE `t_coupon` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `Conditions1` varchar(128) NOT NULL,
  `Conditions2` int(128) NOT NULL,
  `Conditions3` int(128) NOT NULL,
  `Conditions4` int(128) NOT NULL,
  `expirationdate` varchar(128) NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='coupon formのテーブル';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_coupon`
--
ALTER TABLE `t_coupon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_coupon`
--
ALTER TABLE `t_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
