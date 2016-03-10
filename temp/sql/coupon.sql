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
-- テーブルの構造 `t_coupon`
--

CREATE TABLE `t_coupon` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `Conditions1` varchar(128) NOT NULL,
  `Conditions2` varchar(128) NOT NULL,
  `Conditions3` varchar(128) NOT NULL,
  `Conditions4` varchar(128) NOT NULL,
  `expirationdate` varchar(128) NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='coupon formのテーブル';

--
-- テーブルのデータのダンプ `t_coupon`
--

INSERT INTO `t_coupon` (`id`, `title`, `thumbnail`, `description`, `Conditions1`, `Conditions2`, `Conditions3`, `Conditions4`, `expirationdate`, `del_flag`, `created_at`, `updated_at`) VALUES
(1, 'xxx', '', 'xxxxx ', 'xxx', '0', '0', '0', '', 0, '2016-03-02 07:51:45', '2016-03-02 07:51:45'),
(2, '', '', ' ', '', '0', '0', '0', 'xxxx', 0, '2016-03-02 07:51:49', '2016-03-02 07:51:49'),
(3, 'campaign title2', '', ' campaign title2', 'campaign title2campaign title2campaign title2campaign title2', '0', '0', '0', '2016/02/32', 0, '2016-03-02 07:52:09', '2016-03-02 08:47:25'),
(4, '', '', ' ', '', '0', '0', '0', 'xxxx', 0, '2016-03-02 07:52:13', '2016-03-02 07:52:13'),
(5, 'xxxxx', '', ' xxxx', 'xxxx', '0', '0', '0', 'xxxx', 0, '2016-03-02 07:52:21', '2016-03-02 07:52:21'),
(6, 'xxxx', '', ' xxxx', 'xxx', '0', '0', '0', '', 0, '2016-03-02 07:54:05', '2016-03-02 07:54:05'),
(7, 'xxxx', '', ' xxxx', 'xxx', '0', '0', '0', '', 0, '2016-03-02 08:15:12', '2016-03-02 08:15:12'),
(8, '', '', ' ', 'varchar(128) になっていますか？', 'varchar(128) になっていますか？', 'varchar(128) になっていますか？', 'varchar(128) になっていますか？', '', 0, '2016-03-02 09:15:56', '2016-03-04 08:38:55'),
(9, '', '', ' ', '', '0', '0', '0', '', 0, '2016-03-02 09:21:27', '2016-03-02 09:21:27'),
(10, 'Summer campaign 2016', 'seadream.png', ' The Asahi Shimbun is widely regarded for its journalism as the most respected daily newspaper in Japan. The English version offers selected articles from the vernacular Asahi Shimbun, as well as extensive coverage of cool Japan,focusing ...\r\n\r\nThe Asahi Shimbun is widely regarded for its journalism as the most respected daily newspaper in Japan. The English version offers selected articles from the vernacular Asahi Shimbun, as well as extensive coverage of cool Japan,focusing ...\r\n\r\nThe Asahi Shimbun is widely regarded for its journalism as the most respected daily newspaper in Japan. The English version offers selected articles from the vernacular Asahi Shimbun, as well as extensive coverage of cool Japan,focusing ...', 'Summer campaign 2016 1', '0', '0', '0', '2016/04/05', 0, '2016-03-03 02:40:05', '2016-03-04 08:36:37');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
