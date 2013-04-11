<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    function beforeFilter() {
        $this->fetchSettings();
    }

    /* Function which read settings from DB and populate them in constants */
    function fetchSettings() {
        //Loading model on the fly
        $this->loadModel('Setting');
        //$settings = new Setting();
        //Fetching All params
        $settings_array = $this->Setting->find('all');
        foreach($settings_array as $key=>$value) {
            $constant = "__".$value['Setting']['key'];
            $val = $value['Setting']['pair'];
            if(!defined($constant)) {
                eval("define(\$constant, \$val);");
            }
        }
    }
}