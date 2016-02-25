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

class Controller_Coupon extends View_Admin
{
    /**
     * Reportリスト
     *
     * @access  public
     * @return  Response
     */
    public function action_list()
    {
        $data = array();

        // View
        $this->template->title = $data['title'] = array('Coupon List');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('coupon/list', $data);
    }

    /**
     * Report作成
     *
     * @access  public
     * @return  Response
     */
    public function action_input()
    {
        $data = array();

        // View
        $this->template->title = $data['title'] = array('Coupon form');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('coupon/input', $data);
    }	
}
