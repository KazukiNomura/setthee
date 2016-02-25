<?php

namespace ERS\Common;

class Fieldset extends \Fuel\Core\Fieldset 
{
  //fieldsetの$_instancesを初期化するメソッド
  public static function reset()
  {
    parent::$_instances = array();
  }
}