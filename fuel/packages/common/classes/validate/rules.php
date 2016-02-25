<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */
namespace ERS\Common\Validate;

use Fuel\Core\Log;
use ERS\Common\Library\Time;

use ERS\Common\Model;
use ERS\Common\Model\Model_M_Ng_Word;

class Rules
{
    /**
     * アルファベットと数字が混ざっているか
     * @param $val
     * @return bool
     */
    public static function _validation_alph_num($val)
    {
        if(!$val) return true;
        if (preg_match("/([0-9].*[a-zA-Z]|[a-zA-Z].*[0-9])/", $val)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * アルファベットと数字のみか
     * @param $val
     * @return bool
     */
    public static function _validation_alph_num_only($val)
    {
        if(!$val) return true;
        if (preg_match("/^([0-9a-zA-Z])+$/", $val)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 年月日の妥当性
     * @param $val YYYYMMDD形式
     * @return bool
     */
    public static function _validation_date($val)
    {
        return Time::checkData($val);
    }

    /**
     * 時間の妥当性
     * @param $val
     * @return bool
     */
    public static function _validation_time($val)
    {
        return Time::checkTime($val);
    }

    /**
     * 日時の妥当性
     * @param $val
     * @return bool
     */
    public static function _validation_date_time($val)
    {
        return Time::checkDateTime($val);
    }
    public static function _validation_format_date_time($val)
    {
        return Time::checkFormatDateTime($val);
    }

    /**
     * 日付from toの妥当性
     * @param $to
     * @param $from
     * @return bool
     */
    public static function _validation_date_time_from_to($to, $from, $name)
    {
        return strtotime($from) < strtotime($to);
    }

    /**
     * 時間の間隔チェック
     * @param $val
     * @param $interval
     * @return bool
     */
    public static function _validation_minute_interval($val, $interval=15)
    {
        return Time::checkMinuteInterval($val, $interval);
    }

    /**
     * 未来時間かどうかチェック
     * @param $val
     * @return bool
     */
    public static function _validation_future_time($val)
    {
        return strtotime($val) > Time::getTimestamp();
    }

    /**
     * 指定時間を超えていないかチェック
     * @param $to
     * @param $from
     * @param $max 分単位
     * @return bool
     */
    public static function _validation_max_min($to, $from, $max)
    {
        $sec = $max * 60;
        return strtotime($to) <= (strtotime($from) + $sec);
    }

    /**
     * 指定時間を超えていないかチェック
     * @param $to
     * @param $from
     * @param $max 分単位
     * @return bool
     */
    public static function _validation_max_min_h($to, $from, $max)
    {
        $sec = $max * 60 * 60;
        return strtotime($to) <= (strtotime($from) + $sec);
    }

    /**
     * 配列の中に値があるかチェック
     * @param $val
     * @param $array
     * @return bool
     */
    public static  function _validation_in_array($val, $array)
    {
        if(!$val) return true;
        return in_array($val, $array);
    }

    /**
     * 配列の中に値がないかチェック
     * @param $val
     * @param $array
     * @return bool
     */
    public static  function _validation_not_in_array($val, $array)
    {
        if(!$val) return true;
        if (in_array($val, $array)) { return false; }
        return true;
    }

    /**
     * NGワードが含まれているかチェック
     * @param $val
     * @return bool
     */
   /* public static function _validation_ng_word($val)
    {
        // NGワード
        // $ngArray=\Config::load('ngword', true);
        // foreach ($ngArray as $word) {
        //     if (substr_count($val, $word)) {
        //         return false;
        //     }
        // }

        // NGワード
        $ngArray = Model_M_Ng_Word::find('all', array(
            'where' => array('del_flag' => \Config::get('flag.off'))
        ));
        foreach ($ngArray as $word) {
            if (substr_count($val, $word['name'])) {
                return false;
            }
        }
        // 携帯番号
        if (preg_match('/(050|070|080|090)-\d{4}-\d{4}/', $val, $m)) {
            return false;
        }
        // メールアドレス
        if (preg_match('/[\w.\-]+@[\w\-]+\.[\w.\-]+/', $val, $m)) {
            return false;
        }
        // URL
        if (preg_match('(https?://[-_.!~*\'()a-zA-Z0-9;/?:@&=+$,%#]+)', $val, $m)) {
            return false;
        }

        return true;
    }
    */
    /**
     * 自分自身への操作(通話/予約/ファン登録など)をしていないかチェック
     * @param $val
     * @return bool
     */
    public static function _validation_operation_to_self($val, $user_id)
    {
        return $val != $user_id;
    }

    /**
     * 過去の日付かどうか
     * @param $val
     * @return bool
     */
    public static function _validation_past_date($val)
    {
        return strtotime($val) < Time::getTimestamp();
    }

    /**
     * 最小値より未来か
     * @param $val
     * @return bool
     */
    public static function _validation_min_date($val)
    {
        // 最小値
        $minDate = '1900-01-01';
        return strtotime($val) > strtotime($minDate);
    }

    /**
     * 最初値より大きいか
     * @param $to
     * @param $from
     * @return bool
     */
    public static function _validation_morethan_value($to, $from)
    {
        return $from <= $to;
    }

    /**
     * りくえすとポイント
     * @param $val
     * @return bool
     */
    public static function _validation_request_pt($val, $min, $max, $width)
    {
        if ($min <= $val && $val <= $max && !($val%$width)) {
            return true;
        }
        return false;
    }

    /**
     * 全角カタカナ
     * @param $val
     * @return bool
     */
    public static function _validation_zenkaku_katakana($val)
    {
        mb_regex_encoding("UTF-8");
        return preg_match("/^[ァ-ヶー]+$/u", $val) === 1;
    }

    /**
     * SelectBox
     * @param $val
     * @return bool
     */
    public static function _validation_selected($val)
    {
        return !empty($val);
    }  
}