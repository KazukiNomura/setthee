-- テーブルの構造 `report`
--

CREATE TABLE `t_report` (
  `id` varchar(64) NOT NULL,
  `title` varchar(128) NOT NULL,
  `visit_date` date NOT NULL,
  `description` text NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Reportのテーブル';
