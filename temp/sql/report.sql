-- テーブルの構造 `report`
--

CREATE TABLE `t_report` (
  `type` varchar(64) NOT NULL,
  `menu_name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(32) NOT NULL,
  `report_id` int(11) NOT NULL DEFAULT '0',
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Reportのテーブル';