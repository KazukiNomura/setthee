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

class Controller_Headernav extends View_Admin
{

    public function action_input()
    {
        $data = array();

        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
             self::debug($params);

            //Model_T_Top::insert($params);
        }   

        // View
        $this->template->title = $data['title'] = array('News from');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('headernav/input', $data);
    }

        /**
     * News list
     *
     * @access  public
     * @return  Response
     */
    public function action_list()
    {
        $data = array();

        // View
        $this->template->title = $data['title'] = array('News List');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('headernav/list', $data);
    }	



        /**
     * Set Thee とは？
     *
     * @access  public
     * @return  Response
     */
    public function action_and()
    {
        $data = array();

        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
             self::debug($params);

            //Model_T_Top::insert($params);
        }   

        // View
        $this->template->title = $data['title'] = array('Set Thee and ?');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('headernav/and', $data);
    }

            /**
     * F&Q登録
     *
     * @access  public
     * @return  Response
     */
    public function action_fqinput()
    {
        $data = array();

        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
             self::debug($params);

            //Model_T_Top::insert($params);
        }   

        // View
        $this->template->title = $data['title'] = array('Set Thee and ?');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('headernav/fqinput', $data);
    }

            /**
     *F&Q list
     *
     * @access  public
     * @return  Response
     */
    public function action_fqlist()
    {
        $data = array();

        // View
        $this->template->title = $data['title'] = array('F and Q list');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('headernav/fqlist', $data);
    }   



}