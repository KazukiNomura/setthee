-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 3 朁E17 日 04:47
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `setthee`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `t_coupon`
--

CREATE TABLE IF NOT EXISTS `t_coupon` (
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='coupon formのテーブル';

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

-- --------------------------------------------------------

--
-- テーブルの構造 `t_menu`
--

CREATE TABLE IF NOT EXISTS `t_menu` (
`id` int(11) NOT NULL,
  `menu_type` varchar(32) NOT NULL,
  `menu_name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(128) NOT NULL,
  `money` varchar(64) NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- テーブルの構造 `t_news`
--

CREATE TABLE IF NOT EXISTS `t_news` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `time` date NOT NULL,
  `textarea` text NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='News formのテーブル';

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

-- --------------------------------------------------------

--
-- テーブルの構造 `t_photo`
--

CREATE TABLE IF NOT EXISTS `t_photo` (
`id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `photo_image` varchar(128) NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Photoのform';

--
-- テーブルのデータのダンプ `t_photo`
--

INSERT INTO `t_photo` (`id`, `type`, `photo_image`, `del_flag`, `created_at`, `updated_at`) VALUES
(1, 'Space', '12348163_1642501666000198_463362214375075232_n.png', 0, '2016-03-01 07:16:09', '2016-03-01 07:16:09'),
(2, 'Drink', 'logo_myanmar.png', 0, '2016-03-01 07:16:28', '2016-03-01 07:16:28'),
(3, 'Food', 'logo_myanmar_developer.png', 0, '2016-03-01 07:26:56', '2016-03-01 07:37:43'),
(4, 'Food', '12348163_1642501666000198_463362214375075232_n.png', 0, '2016-03-01 07:27:27', '2016-03-02 10:48:24'),
(5, 'Space', '', 0, '2016-03-02 08:15:43', '2016-03-02 08:15:43');

-- --------------------------------------------------------

--
-- テーブルの構造 `t_report`
--

CREATE TABLE IF NOT EXISTS `t_report` (
`id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `visit_date` date NOT NULL,
  `description` text NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2022 DEFAULT CHARSET=utf8 COMMENT='Report formのテーブル';

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

-- --------------------------------------------------------

--
-- テーブルの構造 `t_shop`
--

CREATE TABLE IF NOT EXISTS `t_shop` (
`id` int(11) NOT NULL,
  `shop_name` varchar(128) NOT NULL,
  `region` int(11) NOT NULL,
  `address` varchar(128) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `coupon_icon` varchar(128) NOT NULL,
  `report_icon` varchar(128) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `header_img` varchar(255) NOT NULL,
  `address_info` varchar(128) NOT NULL,
  `businesshours` varchar(64) NOT NULL,
  `price` tinyint(64) NOT NULL,
  `credit_id` int(11) NOT NULL,
  `phone_number` varchar(64) NOT NULL COMMENT 'infoの電話番号',
  `wi-fi` varchar(11) NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8 COMMENT='SHOP登録のテーブル';

--
-- テーブルのデータのダンプ `t_shop`
--

INSERT INTO `t_shop` (`id`, `shop_name`, `region`, `address`, `phone`, `coupon_icon`, `report_icon`, `genre_id`, `header_img`, `address_info`, `businesshours`, `price`, `credit_id`, `phone_number`, `wi-fi`, `del_flag`, `created_at`, `updated_at`) VALUES
(1, 'Tokyo Japanese restaurant', 1, 'nisiazabu honchou 12-13-1233', '080-3453-4345', 'ON', 'ON', 2, '0', 'nisiazabu honchou 12-13-1233', '10:00〜21:00', 127, 4, '080-3344-2344', 'yes', 0, '2016-02-26 12:35:39', '2016-03-02 04:27:13'),
(2, 'xxxxxxxx', 0, 'xxxxxxxxxxx', 'xxxxxxxx', 'ON', 'ON', 0, '0', 'ssssss', 'ssssss', 0, 3, 'ssssss', 'yes', 0, '2016-02-26 12:35:56', '2016-03-03 03:45:25'),
(3, 'xxxx', 0, 'xxxx', 'xxxx', 'ON', 'ON', 0, '0', 'xxxx', 'xxxx', 0, 1, 'xxxxx', 'yes', 0, '2016-02-26 12:36:14', '2016-02-26 12:36:14'),
(4, 'Myanmar Special restaurant in Yangon', 11, 'yangon yangon yangon 23-2223-222', '34432-23334-2333', 'ON', 'ON', 1, '0', 'yangon yangon yangon 23-2223-222', '9:00~21:00', 127, 1, '34432-23334-2333', 'yes', 0, '2016-02-29 02:10:22', '2016-03-02 08:18:07'),
(5, 'xxxx', 10, 'xxxxxxxxxxx', 'xxxx', 'ON', 'ON', 1, '0', 'xxxx', 'xxxx', 0, 4, 'xxxxx', 'yes', 0, '2016-02-29 02:14:58', '2016-03-01 03:07:14'),
(6, '2016/03/02', 1, '2016/03/02', '2016/03/02', 'ON', 'ON', 1, 'Myanmar_bk_gausu.jpg', '2016/03/02', '2016/03/02', 127, 1, '2016/03/02', 'yes', 0, '2016-02-29 02:15:40', '2016-03-03 07:02:09'),
(7, '修正15:10', 0, '修正15:10', '修正15:10', 'ON', 'ON', 0, '0', '修正15:10', '修正15:10', 0, 0, '修正15:10', 'yes', 0, '2016-02-29 02:18:07', '2016-02-29 07:16:13'),
(8, 'testtest', 0, '', '', 'ON', 'ON', 0, '0', '', '', 0, 0, '', 'yes', 0, '2016-02-29 02:18:17', '2016-02-29 02:18:17'),
(9, '修正できていますか？14:38', 0, '修正できていますか？14:38', '修正できていますか？14:38', 'ON', 'ON', 0, '0', '修正できていますか？14:38', '修正できていますか？14:38', 0, 0, '修正できていますか？14:38', 'yes', 0, '2016-02-29 02:24:03', '2016-02-29 06:58:29'),
(10, '2月29日修正できてますか？2', 0, '2月29日', '2月29日', 'ON', 'ON', 0, '0', '2月29日', '2月29日', 2, 1, '2月29日', 'yes', 0, '2016-02-29 06:13:43', '2016-02-29 06:37:42'),
(11, 'addressn plus', 0, 'addressn plus', 'addressn plus', 'ON', 'ON', 0, '0', 'addressn plus', 'addressn plus', 0, 3, 'addressn plus', 'yes', 0, '2016-02-29 08:26:16', '2016-02-29 08:36:45'),
(12, 'addressn plus', 0, 'addressn plus', 'addressn plus', 'ON', 'ON', 0, '12348163', 'addressn plus', 'addressn plus', 0, 3, 'addressn plus', 'yes', 0, '2016-02-29 08:28:25', '2016-02-29 08:28:25'),
(13, 'addressn plus', 0, 'addressn plus', 'addressn plus', 'ON', 'ON', 0, '12348163', 'addressn plus', 'addressn plus', 0, 3, 'addressn plus', 'yes', 0, '2016-02-29 08:28:37', '2016-02-29 08:28:37'),
(14, 'addressn plus', 0, 'addressn plus', 'addressn plus', 'ON', 'ON', 0, '12348163', 'addressn plus', 'addressn plus', 0, 3, 'addressn plus', 'yes', 0, '2016-02-29 08:34:59', '2016-02-29 08:34:59'),
(15, '新規追加xxxxx', 0, '', '新規追加xxxxx', 'ON', 'ON', 0, '0', '', '', 0, 0, '', 'yes', 0, '2016-02-29 08:36:42', '2016-02-29 08:36:42'),
(16, '2016-03-01 text', 0, '2016-03-01 text', '2016-03-01 text', 'OFF', 'ON', 0, '12348163', '2016-03-01 text', '2016-03-01 text', 127, 1, '2016-03-01 text', 'no', 0, '2016-03-01 03:08:52', '2016-03-01 03:08:52'),
(17, '2016-03-01 text', 0, '2016-03-01 text', '2016-03-01 text', 'OFF', 'ON', 0, '12348163', '2016-03-01 text', '2016-03-01 text', 127, 1, '2016-03-01 text', 'no', 0, '2016-03-01 03:14:04', '2016-03-01 03:14:04'),
(18, '2016-03-01 text', 0, '2016-03-01 text', '2016-03-01 text', 'OFF', 'ON', 0, '12348163', '2016-03-01 text', '2016-03-01 text', 127, 1, '2016-03-01 text', 'no', 0, '2016-03-01 03:16:43', '2016-03-01 03:16:43'),
(19, '2016-03-01 text', 0, '2016-03-01 text', '2016-03-01 text', 'OFF', 'ON', 0, '12348163', '2016-03-01 text', '2016-03-01 text', 127, 1, '2016-03-01 text', 'no', 0, '2016-03-01 04:16:34', '2016-03-01 04:16:34'),
(20, '', 0, '', '', 'ON', 'ON', 0, '0', '', '', 0, 0, '', 'yes', 0, '2016-03-01 10:01:16', '2016-03-01 10:01:16'),
(21, '', 0, '', '', 'ON', 'ON', 0, '0', '', '', 0, 0, '', 'yes', 0, '2016-03-01 10:01:58', '2016-03-01 10:01:58'),
(22, '', 0, '', '', 'ON', 'ON', 0, '0', '', '', 0, 0, '', 'yes', 0, '2016-03-01 10:02:13', '2016-03-01 10:02:13'),
(23, '', 0, '', '', 'ON', 'ON', 0, '0', '', '', 0, 0, '', 'yes', 0, '2016-03-01 10:02:18', '2016-03-01 10:02:18'),
(24, '', 0, '', '', 'ON', 'ON', 0, '0', '', '', 0, 0, '', 'yes', 0, '2016-03-01 10:02:25', '2016-03-01 10:02:25'),
(25, '', 0, '', '', 'ON', 'ON', 0, '0', '', '', 0, 0, '', 'yes', 0, '2016-03-01 10:03:33', '2016-03-01 10:03:33'),
(26, '', 0, '', '', 'ON', 'ON', 0, '0', '', '', 0, 0, '', 'yes', 0, '2016-03-01 10:04:08', '2016-03-01 10:04:08'),
(27, 'input errot18:04', 10, 'input errot18:04', 'input errot18:04', 'ON', 'ON', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:04:36', '2016-03-01 12:32:04'),
(28, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:13:20', '2016-03-01 10:13:20'),
(29, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:15:06', '2016-03-01 10:15:06'),
(30, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:17:12', '2016-03-01 10:17:12'),
(31, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:17:28', '2016-03-01 10:17:28'),
(32, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:17:48', '2016-03-01 10:17:48'),
(33, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:18:08', '2016-03-01 10:18:08'),
(34, 'Tokto', 0, 'input errot18:04Tokto', '5689876567890', 'OFF', 'ON', 5, 'seadream.png', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:19:25', '2016-03-04 09:31:10'),
(35, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:19:41', '2016-03-01 10:19:41'),
(36, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:19:55', '2016-03-01 10:19:55'),
(37, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:22:37', '2016-03-01 10:22:37'),
(38, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:23:30', '2016-03-01 10:23:30'),
(39, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:23:57', '2016-03-01 10:23:57'),
(40, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:24:36', '2016-03-01 10:24:36'),
(41, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:25:03', '2016-03-01 10:25:03'),
(42, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:25:43', '2016-03-01 10:25:43'),
(43, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:27:49', '2016-03-01 10:27:49'),
(44, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:27:55', '2016-03-01 10:27:55'),
(45, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:36:01', '2016-03-01 10:36:01'),
(46, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:37:08', '2016-03-01 10:37:08'),
(47, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:39:20', '2016-03-01 10:39:20'),
(48, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:39:53', '2016-03-01 10:39:53'),
(49, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:40:38', '2016-03-01 10:40:38'),
(50, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:41:41', '2016-03-01 10:41:41'),
(51, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:41:51', '2016-03-01 10:41:51'),
(52, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:43:50', '2016-03-01 10:43:50'),
(53, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:44:14', '2016-03-01 10:44:14'),
(54, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:44:37', '2016-03-01 10:44:37'),
(55, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:48:01', '2016-03-01 10:48:01'),
(56, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:48:25', '2016-03-01 10:48:25'),
(57, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:48:36', '2016-03-01 10:48:36'),
(58, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:48:52', '2016-03-01 10:48:52'),
(59, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:50:08', '2016-03-01 10:50:08'),
(60, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:50:20', '2016-03-01 10:50:20'),
(61, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:52:03', '2016-03-01 10:52:03'),
(62, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:52:26', '2016-03-01 10:52:26'),
(63, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:57:27', '2016-03-01 10:57:27'),
(64, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 10:58:43', '2016-03-01 10:58:43'),
(65, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:02:03', '2016-03-01 11:02:03'),
(66, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:02:52', '2016-03-01 11:02:52'),
(67, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:03:21', '2016-03-01 11:03:21'),
(68, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:03:52', '2016-03-01 11:03:52'),
(69, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:04:22', '2016-03-01 11:04:22'),
(70, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:04:32', '2016-03-01 11:04:32'),
(71, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:04:58', '2016-03-01 11:04:58'),
(72, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:05:37', '2016-03-01 11:05:37'),
(73, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:06:06', '2016-03-01 11:06:06'),
(74, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:06:22', '2016-03-01 11:06:22'),
(75, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:06:31', '2016-03-01 11:06:31'),
(76, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:07:10', '2016-03-01 11:07:10'),
(77, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:07:20', '2016-03-01 11:07:20'),
(78, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:08:39', '2016-03-01 11:08:39'),
(79, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:09:08', '2016-03-01 11:09:08'),
(80, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:12:34', '2016-03-01 11:12:34'),
(81, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:12:56', '2016-03-01 11:12:56'),
(82, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:13:31', '2016-03-01 11:13:31'),
(83, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:13:47', '2016-03-01 11:13:47'),
(84, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:14:26', '2016-03-01 11:14:26'),
(85, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:14:44', '2016-03-01 11:14:44'),
(86, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:14:52', '2016-03-01 11:14:52'),
(87, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:15:26', '2016-03-01 11:15:26'),
(88, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:16:43', '2016-03-01 11:16:43'),
(89, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:18:11', '2016-03-01 11:18:11'),
(90, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:18:57', '2016-03-01 11:18:57'),
(91, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:19:08', '2016-03-01 11:19:08'),
(92, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:21:30', '2016-03-01 11:21:30'),
(93, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:24:55', '2016-03-01 11:24:55'),
(94, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:25:07', '2016-03-01 11:25:07'),
(95, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:31:11', '2016-03-01 11:31:11'),
(96, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:35:00', '2016-03-01 11:35:00'),
(97, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:36:44', '2016-03-01 11:36:44'),
(98, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:36:56', '2016-03-01 11:36:56'),
(99, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:38:06', '2016-03-01 11:38:06'),
(100, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:39:16', '2016-03-01 11:39:16'),
(101, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:40:38', '2016-03-01 11:40:38'),
(102, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:41:02', '2016-03-01 11:41:02'),
(103, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:41:18', '2016-03-01 11:41:18'),
(104, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:41:30', '2016-03-01 11:41:30'),
(105, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:50:56', '2016-03-01 11:50:56'),
(106, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:52:53', '2016-03-01 11:52:53'),
(107, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:55:33', '2016-03-01 11:55:33'),
(108, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:59:14', '2016-03-01 11:59:14'),
(109, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 11:59:34', '2016-03-01 11:59:34'),
(110, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:01:44', '2016-03-01 12:01:44'),
(111, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:05:04', '2016-03-01 12:05:04'),
(112, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:07:49', '2016-03-01 12:07:49'),
(113, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:08:02', '2016-03-01 12:08:02'),
(114, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:13:46', '2016-03-01 12:13:46'),
(115, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:14:01', '2016-03-01 12:14:01'),
(116, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:17:36', '2016-03-01 12:17:36'),
(117, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:19:41', '2016-03-01 12:19:41'),
(118, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:19:52', '2016-03-01 12:19:52'),
(119, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:20:25', '2016-03-01 12:20:25'),
(120, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:20:30', '2016-03-01 12:20:30'),
(121, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:21:10', '2016-03-01 12:21:10'),
(122, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:22:29', '2016-03-01 12:22:29'),
(123, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:23:05', '2016-03-01 12:23:05'),
(124, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:23:16', '2016-03-01 12:23:16'),
(125, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:23:41', '2016-03-01 12:23:41'),
(126, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:24:44', '2016-03-01 12:24:44'),
(127, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:25:12', '2016-03-01 12:25:12'),
(128, 'input errot18:04', 0, 'input errot18:04', 'input errot18:04', 'ON', 'OFF', 0, '0', 'input errot18:04', 'input errot18:04', 0, 0, 'input errot18:04', 'yes', 0, '2016-03-01 12:26:06', '2016-03-01 12:26:06'),
(129, 'shop test 3/3', 0, 'shop test 3/3', 'shop test 3/3', 'ON', 'ON', 1, 'Myanmar_bk.jpg', 'shop test 3/3', 'shop test 3/3', 0, 3, 'shop test 3/3', 'yes', 0, '2016-03-03 08:38:17', '2016-03-03 08:39:38'),
(130, 'ショップテスト', 0, 'ショップテスト', 'ショップテスト', 'ON', 'ON', 1, '', 'ショップテスト', 'ショップテスト', 0, 2, 'ショップテスト', 'yes', 0, '2016-03-03 08:46:40', '2016-03-04 07:00:51'),
(131, 'xxxxxxx', 0, '', '', 'OFF', 'ON', 5, '', '', '', 0, 0, '', 'yes', 0, '2016-03-04 03:33:32', '2016-03-04 07:09:23'),
(132, '', 0, '', '', 'ON', 'OFF', 5, '', '', '', 0, 0, '', 'yes', 0, '2016-03-04 03:33:35', '2016-03-04 07:10:40'),
(133, '3/43/43/43/43/43/4', 0, '', '3/43/43/43/4', 'OFF', 'ON', 5, '', '', '', 0, 0, '', 'yes', 0, '2016-03-04 04:06:44', '2016-03-04 07:09:14');

-- --------------------------------------------------------

--
-- テーブルの構造 `t_top`
--

CREATE TABLE IF NOT EXISTS `t_top` (
`id` int(11) NOT NULL,
  `header_img` varchar(255) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='TOP登録のテーブル';

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
-- Indexes for table `t_coupon`
--
ALTER TABLE `t_coupon`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_menu`
--
ALTER TABLE `t_menu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_news`
--
ALTER TABLE `t_news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_photo`
--
ALTER TABLE `t_photo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_report`
--
ALTER TABLE `t_report`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_shop`
--
ALTER TABLE `t_shop`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_top`
--
ALTER TABLE `t_top`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_coupon`
--
ALTER TABLE `t_coupon`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t_menu`
--
ALTER TABLE `t_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `t_news`
--
ALTER TABLE `t_news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `t_photo`
--
ALTER TABLE `t_photo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_report`
--
ALTER TABLE `t_report`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2022;
--
-- AUTO_INCREMENT for table `t_shop`
--
ALTER TABLE `t_shop`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `t_top`
--
ALTER TABLE `t_top`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
