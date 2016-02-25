<?php
namespace ERS\Common\Model;

use ERS\Common\Model;

class Model_T_Shop extends Model
{
    protected static $_properties = array(
        'id',
        'shop_name',
        'address',
        'phone',
        'coupon_icon',
        'report_icon',
        'genre',
        'header_img',
        'address_info',
        'businesshours',
        'price',
        'credit_not',
        'credit_visa',
        'credit_mastercard',
        'credit_jcb',
        'credit_unionpay',
        'phone_info',
        'wi-fi',
        'menu_id_info',
        'photo_id_info',
        'menu_type',
        'menu_name',
        'menu_description',
        'menu_photo',
        'photo_type',
        'photo_img',
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