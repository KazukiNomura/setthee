<?php
namespace ERS\Common\Model;

use ERS\Common\Model;

class Model_T_Top extends Model
{
    protected static $_properties = array(
        'id',
        'header_img',
        'coupon_id',
        'report_id',
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

    protected static $_table_name = 't_top';
    protected static $_primary_key = array('id');
}