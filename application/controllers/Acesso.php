<?php

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
