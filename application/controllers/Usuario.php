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
            redirect('error/_404');
        }
        $data = $this->input->post();
        $this->load->model('usermodel');
        try{
            $this->usermodel->editarPerfil($data['name'], $data['email'], $data['birthdate'], $data['phone']);
            $retorno = array('success' => true, 'message' => 'Os dados foram atualizados');
        }  catch (\Exception $ex){
            $retorno = array('success' => false, 'message' => $ex->getMessage());
        }
        
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($retorno));
        
    }
}
