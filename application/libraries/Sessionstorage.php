<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of SessionStorage
 *
 * @author lazaro
 */
class Sessionstorage {
    function __construct() {
        $this->CI = & get_instance();
        $this->CI->load->library('session');
    }
    public function hasSession() {
        $arrayUserData = $this->CI->session->all_userdata();
        if (array_key_exists("xsauth", $arrayUserData)) {
            return TRUE;
        }
        return FALSE;
    }
    public function setUserSession($value) {
        $this->CI->session->set_userdata('xsauth', $value);
    }

    public function getUserSession() {
        return $this->CI->session->userdata("xsauth");
    }
    
    public function unsetUserSession(){
        $this->CI->session->unset_userdata('xsauth');
        $this->CI->session->sess_destroy();
        return TRUE;
    }
}
