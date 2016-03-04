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
use ERS\Common\Model\Model_T_Coupon;

class Controller_Coupon extends View_Admin
{
    /**
     * couponリスト
     *
     * @access  public
     * @return  Response
     */
    public function action_list()
    {
        $data = array();

                $data['list'] = Model_T_Coupon::find('all', array(
            'where' => array(
                'del_flag' => 0
            ),
            'order_by' => array('id' => 'desc')
        ));

        // View
        $this->template->title = $data['title'] = array('Coupon List');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('coupon/list', $data);
    }

    /**
     * coupon作成
     *
     * @access  public
     * @return  Response
     */
    public function action_input()
    {
        $data = array();

        if (\Input::post()) {
            $params = \Input::post();
            self::debug($params);

            Model_T_Coupon::insert($params);
        }   

        // View
        $this->template->title = $data['title'] = array('Coupon Form');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('coupon/input', $data);
    }	

    public function action_edit()
    {
        $data = array();

        $coupon_id = \Input::get('id');

        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
             self::debug($params);

            Model_T_Coupon::updateByPk($params['id'], $params);
            $coupon_id = $params['id'];
        }

        $coupon_info = Model_T_Coupon::find('first', array(
            'where' => array(
                'id' => $coupon_id
            )
        ));
        // self::debug($coupon_info);
        if (!empty($coupon_info)) {
            $data['coupon_info'] = $coupon_info;
        }

        // View
        $this->template->title = $data['title'] = array('Edit COUPON');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('coupon/edit', $data);
    }
}
