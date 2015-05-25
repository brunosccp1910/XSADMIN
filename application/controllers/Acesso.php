<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of acesso
 *
 * @author petcomp
 */
class Acesso extends CI_Controller{
    public function index(){
        
        $this->template->load('acesso/acesso', array(), null, 'Entrar');
    }
}
