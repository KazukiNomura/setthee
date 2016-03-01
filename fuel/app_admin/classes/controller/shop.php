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

        // View
        $this->template->title = $data['title'] = array('SHOP List');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/list', $data);
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

        $menu_info = Model_T_Menu::find('first', array(
            'where' => array(
                'id' => $menu_id
            )
        ));
        //self::debug($menu_info);
        if (!empty($menu_info)) {
            $data['menu_info'] = $menu_info;
        }

        // View
        $this->template->title = $data['title'] = array('Edit MENU');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/editmenu', $data);
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

        // View
        $this->template->title = $data['title'] = array('Shop Photo');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/photo', $data);
    }   
}
