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
        if (array_key_exists("XSADMIN", $arrayUserData)) {
            return TRUE;
        }
        return FALSE;
    }
    public function setUserSession($value) {
        $this->CI->session->set_userdata('XSADMIN', $value);
    }

    public function getUserSession() {
        return $this->CI->session->userdata("XSADMIN");
    }
    
    public function unsetUserSession(){
        $this->CI->session->unset_userdata('XSADMIN');
        $this->CI->session->sess_destroy();
        return TRUE;
    }
}
