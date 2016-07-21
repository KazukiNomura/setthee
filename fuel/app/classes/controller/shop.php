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
use ERS\Common\Model\Model_T_coupon;


class Controller_Shop extends View_Webview
{
    /**
     * TOP
     *
     * @access  public
     * @return  Response
     */
    public function action_detail()
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
         // self::debug($shop_info);
    


        // View
        $this->template->title = $data['title'] = array('SHOP');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('shop/detail', $data);
    }
	
}
