-- テーブルの構造 `shop`
--

CREATE TABLE `t_shop` (
  `id` int(11) NOT NULL,
  `shop_name` varchar(128) NOT NULL,
  `address` varchar(32) NOT NULL,
  `phone` tinyint(4) NOT NULL,
  `coupon_icon` varchar(32) NOT NULL,
  `report_icon` varchar(32) NOT NULL,
  `genre` varchar(32) NOT NULL,
  `header_img` varchar(32) NOT NULL,
  `address_info` varchar(32) NOT NULL,
  `businesshours` varchar(32) NOT NULL,
  `price` tinyint(32) NOT NULL,
  `credit` varchar(62) NOT NULL,
  `phone_info` tinyint(4) NOT NULL,
  `wi-fi` varchar(32) NOT NULL,
  `menu_id_info` int(11) NOT NULL,
  `photo_id_info` int(11) NOT NULL,
  `menu_type` varchar(32) NOT NULL,
  `menu_name` varchar(128) NOT NULL,
  `menu_description` text NOT NULL,
  `menu_photo` varchar(32) NOT NULL,
  `photo_type` varchar(32) NOT NULL,
  `photo_img` varchar(32) NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='SHOPのテーブル';