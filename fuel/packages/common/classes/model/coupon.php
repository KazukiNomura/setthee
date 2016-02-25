<?php
namespace ERS\Common\Model;

use ERS\Common\Model;

class Model_Coupon extends Model
{
    protected static $_properties = array(
        'id',
        'coupon_title',
        'thumbnail',
        'description',
        'conditions1',
        'conditions2',
        'conditions3',
        'conditions4',
        'expiration_date',
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

    protected static $_table_name = 'coupon';
    protected static $_primary_key = array('id');
}