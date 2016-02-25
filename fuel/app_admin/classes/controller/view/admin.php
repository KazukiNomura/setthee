<?php
/**
 * Part of the Fuel framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Controller;

// Model
use ERS\Common\Model;

// use Fuel\Core\ERSUnauthorizedException;

/**
 * Template Controller class
 *
 * A base controller for easily creating templated output.
 *
 * @package   Fuel
 * @category  Core
 * @author    Fuel Development Team
 */
abstract class View_Admin extends \Controller_Template
{
    // admin template
    public $template = 'template_admin';

    // auth
    public $auth = array();

    /**
     * Load the template and create the $this->template object
     */
    public function before()
    {
        if (!empty($this->template) and is_string($this->template)) {
            // Load the template
            $this->template = \View::forge($this->template);
        }
        // echo "view_admin"; exit;

        return parent::before();
    }

    /**
     * After controller method has run output the template
     *
     * @param  Response  $response
     */
    public function after($response)
    {
        return parent::after($response);
    }

    // debug
    public static function debug($value, $exit=false)
    {
        if (is_array($value) || is_object($value)) {
            echo "<pre>"; print_r($value); echo "</pre>";
        } else {
            echo "<br>"; echo $value;
        }
        if ($exit != false) {
            exit;
        }
    }
}
