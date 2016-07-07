<?php
namespace ERS\Common\Model;

use ERS\Common\Model;

class Model_T_Shop extends Model
{
    protected static $_properties = array(
        'id',
        'shop_name',
        'region',
        'address',
        'phone',
        'coupon_icon',
        'report_icon',
        'genre_id',
        'header_img',
        'description',
        'address_info',
        'businesshours',
        'price',
        'credit_id',
        'phone_number',
        'wi-fi',
        'del_flag',
        'created_at',
        'updated_at',
    );

    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => true,
        ),
        'Orm\Observer_UpdatedAt' => array(
            'events' => array('before_save'),
            'mysql_timestamp' => true,
        ),
    );

    protected static $_table_name = 't_shop';
    protected static $_primary_key = array('id');
}