<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of AuthController
 *
 * @author lazaro
 */
class MY_Controller extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        if(!$this->sessionstorage->hasSession()){
            $allowed = array(
                'acesso->index',
                'acesso->login',
            );
            if(!in_array($this->router->fetch_class().'->'.$this->router->fetch_method(), $allowed)){
                redirect('/acesso');
            }
        }     
    }
}
