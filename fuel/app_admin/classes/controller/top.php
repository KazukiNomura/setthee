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

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
use Controller\View_Admin;

// Model
use ERS\Common\Model;
use ERS\Common\Model\Model_T_Top;

class Controller_Top extends View_Admin
{

    public function action_top()
    {
        $data = array();

        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
             self::debug($params);

            Model_T_Top::insert($params);
        }   

        // View
        $this->template->title = $data['title'] = array('TOP Page');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('top/top', $data);
    }	

    public function action_edit()
    {
        $data = array();


$top_id = \Input::get('id');
         //self::debug($top_id);

        // 情報登録 ---------------------------------
        if (\Input::post()) {

            // 設定（ファイル保存場所）
            $config = array(
                'path' => 'uploads',
            );

            // アップロード実行
            Upload::process($config);

            $getFile = Upload::get_files();
            // self::debug($getFile); //exit;

            // 検証
            if (Upload::is_valid()) {         
                // アップロードファイルを保存
                Upload::save();         
            }

            // メニューインサート
            $params = \Input::post();
            if (isset($getFile[0]['id'])) {
                $params['id'] = $getFile[0]['name'];
            }
            // self::debug($params); exit;
            Model_T_Top::insert($params);
            $top_id = \Input::post('id');
        } 
        //self::debug($shop_id);

        $data['list'] = Model_T_Top::find('all', array(
            'where' => array(
              'id' => $top_id,
              'del_flag' => 0

            ),
            'order_by' => array('id' => 'desc')
        ));
         //self::debug($data);


        // shop_id受け渡し__________________
        $data['id'] = $top_id;
         //self::debug($data); 


        // View
        $this->template->title = $data['title'] = array('TOP Page');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('top/edit', $data);
    }   
}


