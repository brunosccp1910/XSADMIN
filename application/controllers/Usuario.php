<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Usuario
 *
 * @author lazaro
 */
class Usuario extends MY_Controller{
    
    public function editarperfil(){
        if(!$this->input->is_ajax_request()){
            show_error('', '', 'Encontramos um erro :[');
        }
    }
}
