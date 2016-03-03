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

        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
             self::debug($params);

            Model_T_Top::updateByPk($params['id'], $params);
            $top_id = $params['id'];
        }

        $top_info = Model_T_Top::find('first', array(
            'where' => array(
                'id' => $top_id
            )
        ));
        // self::debug($top_info);
        if (!empty($top_info)) {
            $data['top_info'] = $top_info;
        }

        // View
        $this->template->title = $data['title'] = array('TOP Page');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('top/edit', $data);
    }   
}
