<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Template {

    var $template_data = array();
    var $layout = 'layout';
    function set($name, $value) {
        $this->template_data[$name] = $value;
    }

    function load($view = '', $view_data = array(), $template = '', $title = '', $return = FALSE) {
        $this->CI = & get_instance();
        
        $this->set('title' , $title);
        
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
        if($template == NULL || $template == ''){
            return $this->CI->load->view($this->layout, $this->template_data, $return);
        }else{
            return $this->CI->load->view($template, $this->template_data, $return);
        }
        
    }

}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */