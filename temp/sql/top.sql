-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016 年 3 月 10 日 08:00
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
-- テーブルの構造 `t_top`
--

CREATE TABLE `t_top` (
  `id` int(11) NOT NULL,
  `header_img` varchar(255) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='TOP登録のテーブル';

--
-- テーブルのデータのダンプ `t_top`
--

INSERT INTO `t_top` (`id`, `header_img`, `coupon_id`, `report_id`, `del_flag`, `created_at`, `updated_at`) VALUES
(1, 'seadream.png', 4445555, 55443333, 0, '2016-03-03 09:16:48', '2016-03-03 09:16:48'),
(2, 'Myanmar_bk_gausu.jpg', 322233, 3333333, 0, '2016-03-03 11:02:52', '2016-03-03 11:03:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_top`
--
ALTER TABLE `t_top`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_top`
--
ALTER TABLE `t_top`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
