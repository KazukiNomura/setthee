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

class Controller_Top extends View_Admin
{

    public function action_top()
    {
        $data = array();

        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
             self::debug($params);

            //Model_T_Top::insert($params);
        }   

        // View
        $this->template->title = $data['title'] = array('TOP Edit');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('top/top', $data);
    }	

   /* public function action_edit()
    {
        $data = array();

        $report_id = \Input::get('id');

        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
             self::debug($params);

            Model_T_Report::updateByPk($params['id'], $params);
            $report_id = $params['id'];
        }

        $report_info = Model_T_Report::find('first', array(
            'where' => array(
                'id' => $report_id
            )
        ));
        // self::debug($report_info);
        if (!empty($report_info)) {
            $data['report_info'] = $report_info;
        }

        // View
        $this->template->title = $data['title'] = array('Edit REPORT');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('report/edit', $data);
    }
    */
}