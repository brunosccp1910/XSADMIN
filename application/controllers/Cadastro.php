<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cadastrar
 *
 * @author lazaro
 */
class Cadastro extends CI_Controller{
    public function index(){
        $this->template->load('cadastrar/index', array(), null, 'Cadastro');
    }
    
    public function cadastrar(){
        $dataPost = $this->input->post();
        $this->load->model('usermodel');
        try{
            $retorno = $this->usermodel->cadastrar($dataPost['name'],$dataPost['email'],$dataPost['password'],$dataPost['birthdate'],$dataPost['phone']);
        }  catch (\Exception $ex){
            $retorno = $ex->getMessage();
        }
        print_r($retorno);
    }
}
