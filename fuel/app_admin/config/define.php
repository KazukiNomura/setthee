<?php
/**
 * Created by ERSJ.
 * User: Lucen
 * Date: 2016/02/29
 * Time: 21:49
 */

define('TEST_SAMPLE_1',      1);
define('TEST_SAMPLE_2',      true);

return array(
	'master' => array(
		'shop' => array(
			// 住所マスター
			'region' => array(
				1 => 'Kachin State',
				2 => 'Kayah State',
				3 => 'Kayin State',
				4 => 'Chin State',
				5 => 'Sagaing Region',
				6 => 'Tanintharyi Region',
				7 => 'Bago Region',
				8 => 'Magway Region',
				9 => 'Mandalay Region',
				10 => 'Mon State',
				11 => 'Yangon Region',
				12 => 'Shan State',
				13 => 'Ayeyarwady Region',
			),

			// ジャンルマスター
			'genre' => array(
				1 => 'Myanmar Food',
				2 => 'Japanese Food',
				3 => 'Italian Food',
				4 => 'Vietnam Food',
				5 => 'Thailand Food',
			),
			
			//クレジットマスター		
			'credit_id' => array(
				1 => 'Not',
				2 => 'Visa',
				3 => 'MasterCard',
				4 => 'JCB',
				5 => 'UnionPay',
				),

		),
	),
);


