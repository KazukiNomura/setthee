-- テーブルの構造 `coupon`
--

CREATE TABLE `t_coupon` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `thumbnail` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `conditions1` varchar(128) NOT NULL,
  `conditions2` varchar(128) NOT NULL,
  `conditions3` varchar(128) NOT NULL,
  `conditions4` varchar(128) NOT NULL,
  `expirationdate` date NOT NULL,
  `del_flag` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='couponのテーブル';
