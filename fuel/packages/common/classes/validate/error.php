<?php
/**
 * Created by PhpStorm.
 * User: bp027
 * Date: 2014/12/17
 * Time: 18:53
 */
namespace ERS\Common\Validate;

use ERS\Common\Api\Error as ApiError;
use ERS\Common\Api\Collection;

class Error
{
    /**
     * APIでエラーが発生した時に呼び出す
     * @param $error
     * @return Collection
     */
    public static function setMessage($error)
    {
        $msg = array();
        foreach ($error as $v) {
            $msg[] = $v->get_message();
        }

        return join("\n\n", $msg);
    }
}