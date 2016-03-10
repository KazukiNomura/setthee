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
-- テーブルの構造 `t_news`
--

CREATE TABLE `t_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `time` date NOT NULL,
  `textarea` text NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='News formのテーブル';

--
-- テーブルのデータのダンプ `t_news`
--

INSERT INTO `t_news` (`id`, `title`, `time`, `textarea`, `del_flag`, `created_at`, `updated_at`) VALUES
(1, '0000-00-00', '0000-00-00', ' xxxxx', 0, '2016-03-03 09:24:16', '2016-03-03 09:24:16'),
(2, '0000-00-00', '0000-00-00', ' new DBnew DBnew DBnew DBnew DB', 0, '2016-03-03 09:24:26', '2016-03-03 09:24:26'),
(3, '0000-00-00', '0000-00-00', 'タイトルです。', 0, '2016-03-03 11:13:41', '2016-03-03 11:13:41'),
(4, 'title title title', '2016-02-15', ' title title titletitle title titletitle title titletitle title titletitle title titletitle title title', 0, '2016-03-03 11:15:24', '2016-03-03 11:15:24'),
(5, 'title title title', '2016-02-15', ' title title titletitle title titletitle title titletitle title titletitle title titletitle title title', 0, '2016-03-03 11:17:23', '2016-03-03 11:17:23'),
(6, 'title title title', '2016-02-15', ' title title titletitle title titletitle title titletitle title titletitle title titletitle title title', 0, '2016-03-03 11:21:14', '2016-03-03 11:21:14'),
(7, 'title title title', '2016-02-15', ' title title titletitle title titletitle title titletitle title titletitle title titletitle title title', 0, '2016-03-03 11:24:33', '2016-03-03 11:24:33'),
(8, '《News!》new shop GET!', '2016-03-04', '《News!》new shop GET!', 0, '2016-03-03 11:32:09', '2016-03-04 08:47:01'),
(9, 'xxxx', '0000-00-00', ' xxx', 0, '2016-03-04 08:52:07', '2016-03-04 08:52:07'),
(10, 'xxxx', '0000-00-00', ' xxx', 0, '2016-03-04 08:54:33', '2016-03-04 08:54:33'),
(11, 'cccccc', '0000-00-00', ' cccccc', 0, '2016-03-04 08:58:15', '2016-03-04 08:58:15'),
(12, 'cccccc', '0000-00-00', ' cccccc', 0, '2016-03-04 08:58:38', '2016-03-04 08:58:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_news`
--
ALTER TABLE `t_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_news`
--
ALTER TABLE `t_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
