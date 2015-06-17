<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Grupo
 *
 * @author lazaro
 */
class Grupo extends CI_Controller{
    public function criar(){
        $this->template->load('grupo/criar', '', null, 'Criar Grupo');
    }
}
