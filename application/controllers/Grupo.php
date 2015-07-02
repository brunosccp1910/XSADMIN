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

    public function arrayallmembros(){
        $id = $this->input->post('id');

        $this->load->model('groupmodel');

        try{
            $membros = $this->groupmodel->arrayAllMembros($id);
            $retorno = array('success' => true, 'membros' => $membros);
        }  catch (\Exception $ex){
            $retorno = array('success' => false, 'msg' => 'Erro ao buscar membros do grupo');
        }
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($retorno));
    }

    public function removermembro(){
        if(!$this->input->is_ajax_request()){
            redirect('error/_404');
        }

        $groupId = $this->input->post('groupId');
        $userId = $this->input->post('memberId');
        $this->load->model('groupmodel');

        try{
            $this->groupmodel->removerMembro($groupId, $userId);
            $retorno = array('success' => true, 'msg' => 'O usuário foi removido do grupo');
        }catch (\Exception $ex){
            $retorno = array('success' => false, 'msg' => $ex->getMessage());
        }
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($retorno));
    }
}
