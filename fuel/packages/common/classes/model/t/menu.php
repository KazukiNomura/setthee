<?php
namespace ERS\Common\Model;

use ERS\Common\Model;

class Model_T_Menu extends Model
{
    protected static $_properties = array(
        'id',
        'shop_id',
        'menu_type',
        'menu_name',
        'description',
        'photo',
        'money',
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

    protected static $_table_name = 't_menu';
    protected static $_primary_key = array('id');
}