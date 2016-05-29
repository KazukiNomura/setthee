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
use Controller\View_Webview;

// Model
use ERS\Common\Model;
use ERS\Common\Model\Model_T_Shop;

class Controller_Home extends View_Webview
{
    /**
     * TOP
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
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
        $this->template->title = $data['title'] = array('TOP');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('home/index', $data);
    }
	
}
