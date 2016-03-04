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
use ERS\Common\Model\Model_T_News;

class Controller_Headernav extends View_Admin
{

    public function action_input()
    {
        $data = array();

        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
             self::debug($params);

        Model_T_News::insert($params);
        }   

        // View
        $this->template->title = $data['title'] = array('News from');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('headernav/input', $data);
    }

        /**
     * News修正
     *
     * @access  public
     * @return  Response
     */
    public function action_edit()
    {
        $data = array();

        $news_id = \Input::get('id');

        // 情報登録 ---------------------------------
        if (\Input::post()) {
            $params = \Input::post();
            self::debug($params);

            Model_T_News::updateByPk($params['id'], $params);
            $news_id = $params['id'];
        }

        $news_info = Model_T_News::find('first', array(
            'where' => array(
                'id' => $news_id
            )
        ));
        // self::debug($news_info);
        if (!empty($news_info)) {
            $data['news_info'] = $news_info;
        }

        // View
        $this->template->title = $data['title'] = array('Edit News');
        $this->template->auth  = $this->auth;
        $this->template->content = View::forge('headernav/edit', $data);
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
