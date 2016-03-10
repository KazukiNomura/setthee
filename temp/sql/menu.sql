-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016 年 3 月 10 日 08:02
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

INSERT INTO `t_menu` (`id`, `menu_type`, `menu_name`, `description`, `photo`, `money`, `del_flag`, `created_at`, `updated_at`) VALUES
(1, 'Drink', 'xxx', ' xxxx', '', 'xxxx', 0, '2016-02-29 10:30:10', '2016-02-29 10:30:10'),
(2, 'Drink', '修正できていますか？3/3', ' 3/3', '', '修正できていますか？3/3', 0, '2016-02-29 10:31:04', '2016-03-03 10:04:34'),
(3, 'Drink', 'sssss', ' sssss', '', 'ssssss', 0, '2016-02-29 10:31:11', '2016-02-29 10:31:11'),
(4, 'Drink', 'sssss', ' sssss', '', 'ssssss', 0, '2016-02-29 10:33:05', '2016-02-29 10:33:05'),
(5, 'Food', 'テスト', 'テスト.', '', 'テスト', 0, '2016-02-29 10:34:29', '2016-02-29 10:34:29'),
(6, 'Drink', 'karaage', 'this is food very good ', 'logo_myanmar_developer.png', '5000', 0, '2016-02-29 12:18:39', '2016-03-02 10:47:07'),
(7, 'Food', 'xxxxxx', ' xxxxx', '', 'xxxxx', 0, '2016-02-29 12:49:59', '2016-02-29 12:49:59'),
(8, 'Food', 'ddddd', ' dddddd', '', 'dddd', 0, '2016-03-01 03:10:10', '2016-03-01 03:10:10'),
(9, 'Food', '', ' xxxx', '', '', 0, '2016-03-01 04:44:30', '2016-03-01 04:44:30'),
(10, 'Food', '', ' xxxx', '', '', 0, '2016-03-01 04:46:52', '2016-03-01 04:46:52'),
(11, 'Drink', 'sssss', ' ssssss', '', 'sssss', 0, '2016-03-01 04:46:59', '2016-03-01 04:46:59'),
(12, 'Food', '', ' ', '', '', 0, '2016-03-01 07:17:00', '2016-03-01 07:17:00'),
(13, 'Food', 'xxxxx', ' xxxxx', 'logo_myanmar_developer.png', 'xxxx', 0, '2016-03-01 12:32:27', '2016-03-01 12:32:27'),
(14, 'Drink', '', ' ', '', '', 0, '2016-03-02 03:14:11', '2016-03-02 03:14:11'),
(15, 'Food', '', ' ', '', '', 0, '2016-03-02 05:04:49', '2016-03-02 05:04:49'),
(16, 'Drink', '', ' ', '', '', 0, '2016-03-02 08:15:26', '2016-03-02 08:15:26'),
(17, 'Drink', 'Description', ' Description', '', 'Description', 0, '2016-03-02 10:41:17', '2016-03-02 10:41:17'),
(18, 'Drink', 'Description', ' Description', '', 'Description', 0, '2016-03-02 10:46:07', '2016-03-02 10:46:07'),
(19, 'Drink', 'xxx', ' xxxxx', '', 'xxx', 0, '2016-03-03 06:39:28', '2016-03-03 06:39:28'),
(20, 'Drink', 's', ' sssss', '', '', 0, '2016-03-03 10:01:51', '2016-03-03 10:01:51'),
(21, 'Drink', 's', ' sssss', '', '', 0, '2016-03-03 10:02:21', '2016-03-03 10:02:21');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
