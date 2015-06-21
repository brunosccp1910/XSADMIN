<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Grupo
 *
 * @author lazaro
 */
class Grupo extends MY_Controller{
    public function novo(){
        $this->template->load('grupo/novo', '', null, 'Criar Grupo');
    }
    
    public function cadastrar(){
        $dataPost = $this->input->post();
        $this->load->model('groupmodel');
        try{
            $this->groupmodel->cadastrar($dataPost['name'],$dataPost['acronym'],$dataPost['email'],$dataPost['phone'],$dataPost['address'],
                    $dataPost['description']);
            redirect('dashboard/meusgrupos');
        }  catch (\Exception $ex){
            throw new Exception($ex->getMessage());
            $this->session->set_flashdata('error', $ex->getMessage());
            redirect('grupo/novo');
        }
    }
}
