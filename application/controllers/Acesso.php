<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of acesso
 *
 * @author petcomp
 */
class Acesso extends MY_Controller{
    public function index(){
        if($this->sessionstorage->hasSession()){
            redirect('/dashboard');
        }else{
            $this->template->load('acesso/acesso', array(), null, 'Entrar');
        }
        
    }
    
    public function login(){
       $data = $this->input->post();
       $this->load->model('usermodel');
       try{
           if($this->usermodel->authenticate($data['email'], md5($data['password']))){
               $this->sessionstorage->setUserSession($this->usermodel->createSessionData($data['email']));
               redirect('/dashboard');
           }else{
               $this->session->set_flashdata('error', 'Usuário ou senha inválidos.');
               redirect('/acesso');
           }
       }  catch (\Exception $ex){
           throw new \Exception($ex->getMessage());
       }
    }
}
