<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Grupo
 *
 * @author lazaro
 */
class Grupo extends CI_Controller{
    public function novo(){
        $this->template->load('grupo/novo', '', null, 'Criar Grupo');
    }
    
    public function criar(){
        
    }
}
