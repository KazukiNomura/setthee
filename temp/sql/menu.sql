-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016 年 3 月 25 日 03:55
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
-- テーブルの構造 `t_menu`
--

CREATE TABLE `t_menu` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `menu_type` varchar(32) NOT NULL,
  `menu_name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(128) NOT NULL,
  `money` varchar(64) NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `t_menu`
--

INSERT INTO `t_menu` (`id`, `shop_id`, `menu_type`, `menu_name`, `description`, `photo`, `money`, `del_flag`, `created_at`, `updated_at`) VALUES
(1, 0, 'Food', 'Menu name', ' Description', '', '55555', 0, '2016-02-29 10:30:10', '2016-03-23 23:39:59'),
(2, 0, 'Food', '修正できていますか？3/3', 'test Description test Description test Description test Description', '', '修正できていますか？3/3', 0, '2016-02-29 10:31:04', '2016-03-23 18:32:21'),
(3, 0, 'Drink', 'sssss', ' sssss', '', 'ssssss', 0, '2016-02-29 10:31:11', '2016-02-29 10:31:11'),
(4, 0, 'Food', 'テスト', ' ', '', 'テスト', 0, '2016-02-29 10:33:05', '2016-03-23 17:49:27'),
(5, 0, 'Food', 'テスト', 'テスト.', '', 'テスト', 0, '2016-02-29 10:34:29', '2016-02-29 10:34:29'),
(6, 0, 'Drink', 'karaage', 'this is food very good ', 'logo_myanmar_developer.png', '5000', 0, '2016-02-29 12:18:39', '2016-03-02 10:47:07'),
(7, 0, 'Food', 'xxxxxx', ' xxxxx', '', 'xxxxx', 0, '2016-02-29 12:49:59', '2016-02-29 12:49:59'),
(8, 0, 'Food', 'ddddd', ' dddddd', '', 'dddd', 0, '2016-03-01 03:10:10', '2016-03-01 03:10:10'),
(9, 0, 'Food', '', ' xxxx', '', '', 0, '2016-03-01 04:44:30', '2016-03-01 04:44:30'),
(10, 0, 'Food', '', ' xxxx', '', '', 0, '2016-03-01 04:46:52', '2016-03-01 04:46:52'),
(11, 0, 'Drink', 'sssss', ' ssssss', '', 'sssss', 0, '2016-03-01 04:46:59', '2016-03-01 04:46:59'),
(12, 0, 'Food', '', ' ', '', '', 0, '2016-03-01 07:17:00', '2016-03-01 07:17:00'),
(13, 0, 'Food', 'xxxxx', ' xxxxx', 'logo_myanmar_developer.png', 'xxxx', 0, '2016-03-01 12:32:27', '2016-03-01 12:32:27'),
(14, 0, 'Drink', '', ' ', '', '', 0, '2016-03-02 03:14:11', '2016-03-02 03:14:11'),
(15, 0, 'Food', '', ' ', '', '', 0, '2016-03-02 05:04:49', '2016-03-02 05:04:49'),
(16, 0, 'Drink', '', ' ', '', '', 0, '2016-03-02 08:15:26', '2016-03-02 08:15:26'),
(17, 0, 'Drink', 'Description', ' Description', '', 'Description', 0, '2016-03-02 10:41:17', '2016-03-02 10:41:17'),
(18, 0, 'Drink', 'Description', ' Description', '', 'Description', 0, '2016-03-02 10:46:07', '2016-03-02 10:46:07'),
(19, 0, 'Drink', 'xxx', ' xxxxx', '', 'xxx', 0, '2016-03-03 06:39:28', '2016-03-03 06:39:28'),
(20, 0, 'Drink', 's', ' sssss', '', '', 0, '2016-03-03 10:01:51', '2016-03-03 10:01:51'),
(21, 0, 'Drink', 's', ' sssss', '', '', 0, '2016-03-03 10:02:21', '2016-03-03 10:02:21'),
(22, 0, 'Drink', 'test name test name', ' this is test', 'Report.png', '30000', 0, '2016-03-23 21:26:38', '2016-03-23 21:26:38'),
(23, 0, 'Food', 'テストしました', ' ', '', '', 0, '2016-03-23 21:42:43', '2016-03-23 21:42:43'),
(24, 0, 'Food', 'ddd', ' dddd', '', '', 0, '2016-03-23 22:33:38', '2016-03-23 22:33:38'),
(25, 0, 'Food', 'xxx', ' xxxxx', '', 'xxx', 0, '2016-03-23 22:41:16', '2016-03-23 22:41:16'),
(26, 0, 'Food', 'xxx', ' xxxxx', '', 'xxx', 0, '2016-03-23 22:41:26', '2016-03-23 22:41:26'),
(27, 0, 'Food', '', ' xxxxx', '', '', 0, '2016-03-23 22:42:13', '2016-03-23 22:42:13'),
(28, 0, 'Food', '', ' xxxxx', '', '', 0, '2016-03-23 22:43:07', '2016-03-23 22:43:07'),
(29, 0, 'Food', '', ' ', '', '', 0, '2016-03-23 23:16:16', '2016-03-23 23:16:16'),
(30, 0, 'Food', '', ' ', '', '', 0, '2016-03-23 23:23:10', '2016-03-23 23:23:10'),
(31, 0, 'Food', '', ' ', '', '', 0, '2016-03-23 23:26:29', '2016-03-23 23:26:29'),
(32, 0, 'Food', '', ' ', '', '', 0, '2016-03-24 00:02:48', '2016-03-24 00:02:48'),
(33, 0, 'Food', '', ' ', '', '', 0, '2016-03-24 00:28:21', '2016-03-24 00:28:21'),
(34, 0, 'Food', '', ' ', '', '', 0, '2016-03-25 11:13:20', '2016-03-25 11:13:20'),
(35, 0, 'Food', '', ' ', '', '', 0, '2016-03-25 11:13:29', '2016-03-25 11:13:29'),
(36, 0, 'Food', '', ' ', '', '', 0, '2016-03-25 11:13:51', '2016-03-25 11:13:51'),
(37, 0, 'Food', '', ' ', '', '', 0, '2016-03-25 11:13:56', '2016-03-25 11:13:56'),
(38, 0, 'Food', '', ' test', '', '', 0, '2016-03-25 11:30:56', '2016-03-25 11:30:56'),
(39, 0, 'Food', '', ' ', '', '', 0, '2016-03-25 11:35:24', '2016-03-25 11:35:24'),
(40, 0, '', '', '', '', '', 0, '2016-03-25 11:35:47', '2016-03-25 11:35:47'),
(41, 0, 'Drink', '', ' ', '', '', 0, '2016-03-25 11:37:46', '2016-03-25 11:37:46'),
(42, 0, 'Drink', '', ' ', '', '', 0, '2016-03-25 11:37:52', '2016-03-25 11:37:52'),
(43, 1, 'Drink', '', ' ', '', '', 0, '2016-03-25 11:38:05', '2016-03-25 11:38:05'),
(44, 1, 'Food', '', ' ', '', '', 0, '2016-03-25 11:38:07', '2016-03-25 11:38:07'),
(45, 0, 'Food', '', ' ', '', '', 0, '2016-03-25 11:38:58', '2016-03-25 11:38:58'),
(46, 0, 'Food', '', ' ', '', '', 0, '2016-03-25 11:39:55', '2016-03-25 11:39:55'),
(47, 0, 'Food', '', ' ', '', '', 0, '2016-03-25 11:41:14', '2016-03-25 11:41:14'),
(48, 0, 'Food', '', ' ', '', '', 0, '2016-03-25 11:41:43', '2016-03-25 11:41:43'),
(49, 0, 'Food', '', ' ', '', '', 0, '2016-03-25 11:42:30', '2016-03-25 11:42:30'),
(50, 0, 'Food', '', ' ', '', '', 0, '2016-03-25 11:44:34', '2016-03-25 11:44:34'),
(51, 0, 'Food', '', ' ', '', '', 0, '2016-03-25 11:46:38', '2016-03-25 11:46:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_menu`
--
ALTER TABLE `t_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_menu`
--
ALTER TABLE `t_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
