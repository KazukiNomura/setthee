<?php
/**
 * Created by PhpStorm.
 * User: ersj1
 * Date: 2014/12/15
 * Time: 11:08
 */
namespace ERS\Common;

use ERS\Common\Model\Model_Admin_History;

class Model extends \Orm\Model
{
    protected static $_write_connection = 'ERSdb';
    protected static $_connection       = 'ERSdb';
    protected static $_write_db         = false;

    /**
     * insert
     * @param $vars
     * @return bool|int
     */
    public static function insert($vars) {

        isset($vars['created_at']) ?: $vars['created_at'] = self::getDateTime();
        isset($vars['updated_at']) ?: $vars['updated_at'] = $vars['created_at'];
 
        $query = self::forge()->query();
        $query->set($vars);        
        $result = $query->insert();      
        return $result;
    }

    /**
     * update(id指定)
     * @param $id
     * @param $vars
     * @return bool
     */
    public static function updateByPk($id , $vars) {
        $primaryKeys = self::forge()->primary_key();
        $primaryKey = $primaryKeys[0];
        return self::updateByWhere(
            array($primaryKey , $id)
            , $vars
        );
    }

    /**
     * update(where句指定)
     * @param $where
     * @param $vars
     * @return bool
     */
    public static function updateByWhere($where, $vars,&$affectedRows = 0) {
        isset($vars['updated_at']) ?: $vars['updated_at'] = self::getDateTime();
        $query = self::forge()->query();
        $query->where($where);
        $query->set($vars);
        $result = $query->update();
        $affectedRows = $query->affected_rows();
        return $result;
    }

    /**
     * admin update(id指定)
     * @param $id
     * @param $vars
     * @return bool
     */
    public static function Admin_updateByPk($id , $vars)
    {

        $primaryKeys = self::forge()->primary_key();
        $primaryKey = $primaryKeys[0];
        return self::Admin_updateByWhere(
            array($primaryKey, $id),
            $vars
        );
    }

    /**
     * admin update(where句指定)
     * @param $where
     * @param $vars
     * @return bool
     */
    public static function Admin_updateByWhere($where, $vars)
    {

        // DB更新履歴保存　----------------------------
        $sql = 'SELECT * FROM '.static::$_table_name.' WHERE '.$where[0].' = '.$where[1];
        $info = \DB::query($sql)->execute('ERSdb')->current();
 
        // 更新項目のみ
        $before = array();
        foreach ($vars as $field_name => $tmp) {
            $before[$field_name] = $info[$field_name];
        }

        // 履歴保存
        $user_id = \Auth::get_user_id();
        $uri = \Uri::segments();
        $params = array(
            'controller'    => $uri[0],
            'action'        => $uri[1],
            'user_id'       => $user_id[1],
            'auth_flag'     => \Auth::get_auth_flag(),
            'table_name'    => static::$_table_name,
            'before'        => json_encode($before),
            'after'         => json_encode($vars),
        );

        $table_id = Model_Admin_History::insert($params);

        // 本来の処理 -----------------------------
        isset($vars['updated_at']) ?: $vars['updated_at'] = self::getDateTime();
        $query = self::forge()->query();
        $query->where($where);
        $query->set($vars);
        $result = $query->update();

        return $result;
    }

    /**
     * admin insert
     * @param $vars
     * @return bool|int
     */
    public static function Admin_insert($vars)
    {
        // DB更新履歴保存　----------------------------
        $user_id = \Auth::get_user_id();
        $uri = \Uri::segments();
        $params = array(
            'controller'    => $uri[0],
            'action'        => $uri[1],
            'user_id'       => $user_id[1],
            'auth_flag'     => \Auth::get_auth_flag(),
            'table_name'    => static::$_table_name,
            'before'        => null,
            'after'         => json_encode($vars),
        );
        $table_id = Model_Admin_History::insert($params);

        // 本来の処理 -----------------------------
        isset($vars['created_at']) ?: $vars['created_at'] = self::getDateTime();
        isset($vars['updated_at']) ?: $vars['updated_at'] = $vars['created_at'];

        $query = self::forge()->query();
        $query->set($vars);
        $result = $query->insert();
        return $result;
    }

    /**
     * コネクションの設定
     * @param $handler
     */
    protected static function setConnection($handler) {
        self::$_connection = $handler;
        self::$_write_connection = $handler;
    }

    /**
     * トランザクション開始
     * @todo DB分割とか色々なったらここ改修して下さい
     * @param   string    DB名
     * @return  string
     */
    public static function startTransaction($db=null) {
        if(is_null($db))
            $db = self::$_write_connection;
        // Create the database connection instance
        self::setConnection($db);
        self::$_write_db = \Database_Connection::instance(self::$_write_connection);
        return self::$_write_db->start_transaction();
    }
    /**
     * ロールバック
     * @todo DB分割とか色々なったらここ改修して下さい
     * @return  string
     */
    public static function rollbackTransaction() {
        if(self::$_write_db->rollback_transaction()){
            self::$_write_db = false;
            return false;
        }
        self::$_write_db = false;
        return true;
    }
    /**
     * コミット
     * @todo DB分割とか色々なったらここ改修して下さい
     * @return  string
     */
    public static function commitTransaction() {
        if(self::$_write_db->commit_transaction()){
            self::$_write_db = false;
            return false;
        }
        self::$_write_db = false;
        return true;
    }
    /**
     * トランザクション中か確認する
     * @todo DB分割とか色々なったらここ改修して下さい
     * @return  string
     */
    public static function inTransaction() {
        if (self::$_write_db) {
            return self::$_write_db->in_transaction();
        }else{
            return false;
        }
    }

    /**
     * MySQLの日時取得
     * @return mixed
     */
    public static function getDateTime()
    {
        return \Date::time()->format('mysql');
    }

    /**
     * MySQLの日付取得
     * @return mixed
     */
    public static function getDate()
    {
        return \Date::time()->format('mysql_date');
    }

}