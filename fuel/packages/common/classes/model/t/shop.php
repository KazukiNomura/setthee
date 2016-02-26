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
        'genre_id',
        'header_img',
        'address_info',
        'businesshours',
        'credit_id',
        'phone_number',
        'wi-fi',
        'menu_type',
        'menu_name',
        'menu_description',
        'menu_photo',
        'photo_type_id',
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