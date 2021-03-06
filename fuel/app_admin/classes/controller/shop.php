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
use ERS\Common\Model\Model_T_Shop;
use ERS\Common\Model\Model_T_Menu;
use ERS\Common\Model\Model_T_Photo;
use ERS\Common\Model\Model_T_Report;
use ERS\Common\Model\Model_T_coupon;


class Controller_Shop extends View_Admin
{
    /**
     * SHOPリスト
     *
     * @access  public
     * @return  Response
     */
    public function action_list()
    {
        $data = array();

        $data['list'] = Model_T_Shop::find('all', array(
            'where' => array(
                'del_flag' => 0
            ),
            'order_by' => array('id' => 'desc')
        ));
        // self::debug($list);

        // マスター取得
        $data['master_info'] = \Config::get('master.shop');
        // self::debug($data['master_info']);

        // View
        $this->template->title = $data['title'] = array('SHOP List');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/list', $data);
    }

    /**
     * SHOPリスト削除
     *
     * @access  public
     * @return  Response
     */
    public function action_delete()
    {
        $data = array();

                // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
            self::debug($params);

            $update_param = array(
              'del_flag' => 1
            );

            Model_T_Shop::updateByPk($params['shop_id'], $update_param);
            \Response::redirect('shop/list');
        }     



        $shop_id = \Input::get('id');
         self::debug($shop_id);

         // shop_id受け渡し__________________
        $data['shop_id'] = $shop_id;
         self::debug($data); 



        // View
        $this->template->title = $data['title'] = array('SHOP Delete');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/delete', $data);
    }



    /**
     * SHOP作成
     *
     * @access  public
     * @return  Response
     */
    public function action_input()
    {
        $data = array();

        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
            self::debug($params);

            Model_T_Shop::insert($params);
        }        

        $data['master_info'] = \Config::get('master.shop');

        // View
        $this->template->title = $data['title'] = array('New SHOP');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/input', $data);
    }

    /**
     * SHOP修正
     *
     * @access  public
     * @return  Response
     */
    public function action_edit()
    {
        $data = array();

        $shop_id = \Input::get('id');

        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
            self::debug($params);

            Model_T_Shop::updateByPk($params['id'], $params);
            $shop_id = $params['id'];
            \Response::redirect('shop/list');
        }

        $shop_info = Model_T_Shop::find('first', array(
            'where' => array(
                'id' => $shop_id
            )
        ));
        // self::debug($shop_info);
        if (!empty($shop_info)) {
            $data['shop_info'] = $shop_info;
        }

        // マスター取得
        $data['master_info'] = \Config::get('master.shop');
        // self::debug($data['master_info']);

        // View
        $this->template->title = $data['title'] = array('Edit SHOP');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/edit', $data);
    }

        /**
     * SHOP Menu
     *
     * @access  public
     * @return  Response
     */
    public function action_menu()
    {
        $data = array();


        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
            self::debug($params);

            Model_T_Menu::insert($params);
        }        

        // View
        $this->template->title = $data['title'] = array('Shop Menu');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/menu', $data);
    }

      /**
     * MENU修正
     *
     * @access  public
     * @return  Response
     */
    public function action_editmenu()
    {
        $data = array();

        $menu_id = \Input::get('id');


        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
            self::debug($params);

            Model_T_Menu::updateByPk($params['id'], $params);
            $menu_id = $params['id'];
        }
         //self::debug($menu_id);


        $menu_info = Model_T_Menu::find('first', array(
            'where' => array(
                'id' => $menu_id
            )
        ));
        //self::debug($menu_info);
        if (!empty($menu_info)) {
            $data['menu_info'] = $menu_info;
        }
        //self::debug($menu_info);

        // View
        $this->template->title = $data['title'] = array('Edit MENU');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/editmenu', $data);
    }


    /**
     * MENUリスト
     *
     * @access  public
     * @return  Response
     */
    public function action_menulist()
    {

        $data = array();

        $shop_id = \Input::get('id');
         //self::debug($shop_id);

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
            if (isset($getFile[0]['name'])) {
                $params['photo'] = $getFile[0]['name'];
            }
            // self::debug($params); exit;
            Model_T_Menu::insert($params);
            $shop_id = \Input::post('shop_id');
        } 
        //self::debug($shop_id);

        $data['list'] = Model_T_Menu::find('all', array(
            'where' => array(
              'shop_id' => $shop_id,
              'del_flag' => 0

            ),
            'order_by' => array('shop_id' => 'desc')
        ));
         //self::debug($data);


        // shop_id受け渡し__________________
        $data['shop_id'] = $shop_id;
         //self::debug($data); 


        // View
        $this->template->title = $data['title'] = array('MENU List');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/menulist', $data);
    }

        /**
     * MENUリスト削除
     *
     * @access  public
     * @return  Response
     */
    public function action_deletemenu()
    {
        $data = array();

                // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
            self::debug($params);

            $update_param = array(
              'del_flag' => 1
            );

            Model_T_Menu::updateByPk($params['id'], $update_param);
            \Response::redirect('shop/list');
        }     



        $menu_id = \Input::get('id');
         self::debug($menu_id);

         // menu_id受け渡し__________________
        $data['menu_id'] = $menu_id;
         self::debug($data); 



        // View
        $this->template->title = $data['title'] = array('SHOP Delete');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/deletemenu', $data);
    }


    /**
     * SHOP Photo
     *
     * @access  public
     * @return  Response
     */
    public function action_photo()
    {
        $data = array();

                // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
            self::debug($params);

            Model_T_Photo::insert($params);
        }   

        // View
        $this->template->title = $data['title'] = array('Shop Photo');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/photo', $data);
    }  

          /**
     * PHOTO修正
     *
     * @access  public
     * @return  Response
     */
    public function action_editphoto()
    {
        $data = array();

        $photo_id = \Input::get('id');

        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
            self::debug($params);

            Model_T_Photo::updateByPk($params['id'], $params);
            $photo_id = $params['id'];
        }

        $photo_info = Model_T_Photo::find('first', array(
            'where' => array(
                'id' => $photo_id
            )
        ));
        //self::debug($menu_info);
        if (!empty($photo_info)) {
            $data['photo_info'] = $photo_info;
        }

        // View
        $this->template->title = $data['title'] = array('Edit PHOTO');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/editphoto', $data);
    }

   /**
     * Photoリスト
     *
     * @access  public
     * @return  Response
     */
    public function action_photolist()
    {

        $data = array();

        $shop_id = \Input::get('id');
         self::debug($shop_id);

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
            if (isset($getFile[0]['name'])) {
                $params['photo_image'] = $getFile[0]['name'];
            }
            // self::debug($params); exit;
            Model_T_Menu::insert($params);
            $shop_id = \Input::post('shop_id');
        } 
        //self::debug($shop_id);

        $data['list'] = Model_T_Photo::find('all', array(
            'where' => array(
              'shop_id' => $shop_id,
              'del_flag' => 0
            ),
            'order_by' => array('shop_id' => 'desc')
        ));
         //self::debug($data);


        // shop_id受け渡し__________________
        $data['shop_id'] = $shop_id;
         //self::debug($data); 


        // View
        $this->template->title = $data['title'] = array('MENU List');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/photolist', $data);
    }

   /**
     * Photoリスト削除
     *
     * @access  public
     * @return  Response
     */
    public function action_deletephoto()
    {
        $data = array();

                // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
            self::debug($params);

            $update_param = array(
              'del_flag' => 1
            );

            Model_T_Menu::updateByPk($params['id'], $update_param);
            \Response::redirect('shop/list');
        }     



        $menu_id = \Input::get('id');
         self::debug($menu_id);

         // menu_id受け渡し__________________
        $data['shop_id'] = $menu_id;
         self::debug($data); 



        // View
        $this->template->title = $data['title'] = array('Photo Delete');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/deletephoto', $data);
    }

            /**
     * Report登録フォーム
     *
     * @access  public
     * @return  Response
     */
    public function action_reportinput()
    {
        $data = array();


        // 情報登録 ---------------------------------
        if (\Input::get()) {
            $params = \Input::get();
            self::debug($params);

            Model_T_Report::insert($params);
        }        

        // View
        $this->template->title = $data['title'] = array('Report input');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/reportinput', $data);
    }

        /**
     * Reportリスト
     *
     * @access  public
     * @return  Response
     */
    public function action_reportlist()
    {
        $data = array();

        $shop_id = \Input::get('id');
         //self::debug($shop_id);

        // 情報登録 ---------------------------------
        if (\Input::get()) {
            $params = \Input::get();
            self::debug($params);

            Model_T_Report::insert($params);
        }    

        $data['list'] = Model_T_Report::find('all', array(
            'where' => array(
              'shop_id' => $shop_id,
              'del_flag' => 0

            ),
            'order_by' => array('shop_id' => 'desc')
        ));
         //self::debug($data);


        // shop_id受け渡し__________________
        $data['shop_id'] = $shop_id;
         //self::debug($data); 


        // View
        $this->template->title = $data['title'] = array('Report List');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/reportlist', $data);
    }

          /**
     * Report修正
     *
     * @access  public
     * @return  Response
     */
    public function action_reportedit()
    {
        $data = array();

        $menu_id = \Input::get('id');


        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::get();
            self::debug($params);

            Model_T_Report::updateByPk($params['id'], $params);
            $shop_id = $params['id'];
        }
         //self::debug($menu_id);


        $menu_info = Model_T_Report::find('first', array(
            'where' => array(
                'id' => $menu_id
            )
        ));
        //self::debug($menu_info);
        if (!empty($menu_info)) {
            $data['menu_info'] = $menu_info;
        }
        //self::debug($menu_info);

        // View
        $this->template->title = $data['title'] = array('Report edit');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/reportedit', $data);
    }

       /**
     * Reportリスト削除
     *
     * @access  public
     * @return  Response
     */
    public function action_deletereport()
    {
        $data = array();

                // Report削除 ---------------------------------
        if (\Input::get()) {
            $params = \Input::get();
            self::debug($params);

            $update_param = array(
              'del_flag' => 1
            );

            Model_T_Report::updateByPk($params['id'], $update_param);
            \Response::redirect('shop/list');
        }     



        $menu_id = \Input::get('id');
         self::debug($menu_id);

         // menu_id受け渡し__________________
        $data['shop_id'] = $menu_id;
         self::debug($data); 



        // View
        $this->template->title = $data['title'] = array('Report Delete');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/deletereport', $data);
    }




}
