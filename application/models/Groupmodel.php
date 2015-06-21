<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Groupmodel
 *
 * @author lazaro
 */

use XSADMIN\Facade\GroupFacade;
use XSADMIN\Entity\Group;


class Groupmodel extends CI_Model{
    function findUserGroups($userId){
        $facade = new GroupFacade();
        try{
            return $facade->findUserGroups($userId);
        }catch(\Exception $ex){
            throw new Exception($ex->getMessage(), $ex->getCode(), $ex->getPrevious());
        }
    }
    
    function cadastrar($name, $acronym, $email, $phone, $address, $description){
        $facade = new GroupFacade();
        if($name == NULL || $name == ''){
            throw new Exception('O nome do grupo não pode ser nulo');
        }
        
        $grupo = new Group(NULL, $name, $acronym, $description, $email, $phone, $address);
        try{
            $facade->save($grupo);
            return TRUE;
        }  catch (\Exception $ex){
            throw new Exception($ex->getMessage());
        }
    }
}
