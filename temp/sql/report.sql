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
-- テーブルの構造 `t_report`
--

CREATE TABLE `t_report` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `visit_date` date NOT NULL,
  `description` text NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Report formのテーブル';

--
-- テーブルのデータのダンプ `t_report`
--

INSERT INTO `t_report` (`id`, `title`, `visit_date`, `description`, `del_flag`, `created_at`, `updated_at`) VALUES
(1, '', '0000-00-00', '', 0, '2016-03-02 07:42:45', '2016-03-02 07:42:45'),
(2, 'xxxxxx', '0000-00-00', '', 0, '2016-03-02 07:42:49', '2016-03-02 07:42:49'),
(3, 'Myanmar food restaurant', '2016-03-02', 'Report TextareaReport TextareaReport TextareaReport TextareaReport TextareaReport TextareaReport TextareaReport TextareaReport TextareaReport TextareaReport TextareaReport TextareaReport Textarea', 0, '2016-03-02 07:44:04', '2016-03-02 08:37:53'),
(4, 'Tokyo second restaurant', '2013-02-22', ' dddddddddddddddddd\r\nddd\r\n\r\n\r\nddddd\r\n\r\ndddddddddd\r\ndddd\r\n\r\ndddddd', 0, '2016-03-02 07:44:08', '2016-03-02 08:38:58'),
(5, 'xxx', '0000-00-00', '', 0, '2016-03-02 07:44:55', '2016-03-02 07:44:55'),
(6, 'xxx', '0000-00-00', '', 0, '2016-03-02 07:45:25', '2016-03-02 07:45:25'),
(7, 'x', '0000-00-00', ' xxx', 0, '2016-03-02 07:47:55', '2016-03-02 07:47:55'),
(8, '', '0000-00-00', ' ', 0, '2016-03-02 09:21:33', '2016-03-02 09:21:33'),
(9, '', '0000-00-00', ' ', 0, '2016-03-02 09:21:52', '2016-03-02 09:21:52'),
(10, '2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test', '2016-03-03', ' 2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test', 0, '2016-03-02 09:22:00', '2016-03-03 02:39:41'),
(2016, '2016/03/03 test test', '2016-03-03', ' 2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test2016/03/03 test test', 0, '2016-03-03 02:38:59', '2016-03-03 02:38:59'),
(2017, 'xxxx', '0000-00-00', ' xxx', 0, '2016-03-03 04:16:43', '2016-03-03 04:16:43'),
(2018, 'xxxx', '0000-00-00', ' xxx', 0, '2016-03-03 04:17:26', '2016-03-03 04:17:26'),
(2019, 'xxxx', '0000-00-00', ' xxxxxx', 0, '2016-03-03 04:17:33', '2016-03-03 04:17:33'),
(2020, 'xxxx', '0000-00-00', ' xxxxxx', 0, '2016-03-03 04:19:10', '2016-03-03 04:19:10'),
(2021, 'testttttt', '2016-03-02', ' xxxxxxxx', 0, '2016-03-04 08:23:50', '2016-03-04 08:23:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_report`
--
ALTER TABLE `t_report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_report`
--
ALTER TABLE `t_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2022;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
