<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Errors
 *
 * @author lazaro
 */
class Errors extends CI_Controller{
    public function _404(){
        $this->load->view('errors/error_404');
    }
}
