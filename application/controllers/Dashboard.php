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
        $this->load->model('usermodel');
        $user = $this->usermodel->findById($userData['id']);
        $this->template->load('dashboard/perfil', array('user' => $user), null, 'Perfil');
    }
    
    public function meugrupo(){
        $userData = $this->sessionstorage->getUserSession();
        $this->template->load('dashboard/meugrupo', array('userData' => $userData), null, 'Meu Grupo');
    }
    public function usuarios(){
        $userData = $this->sessionstorage->getUserSession();
        $this->template->load('dashboard/usuarios', array('userData' => $userData), null, 'Usuários');
    }
    public function grupos(){
        $userData = $this->sessionstorage->getUserSession();
        $this->template->load('dashboard/grupos', array('userData' => $userData), null, 'Grupos');
    }
}
