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

        // View
        $this->template->title = $data['title'] = array('New SHOP');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/input', $data);
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

        // View
        $this->template->title = $data['title'] = array('Shop Menu');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/menu', $data);
    }

            /**
     * SHOP Menu
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
