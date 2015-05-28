<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Dashboard
 *
 * @author lazaro
 */
class Dashboard extends MY_Controller{
    public function index(){
        redirect('dashboard/perfil');
    }
    
    public function perfil(){
        $userData = $this->sessionstorage->getUserSession();
        $this->template->load('dashboard/index', array('userData' => $userData), null, 'Dashboard');
    }
}
