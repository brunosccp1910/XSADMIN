<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Groupmodel
 *
 * @author lazaro
 */

use XSADMIN\Facade\GroupFacade;
use XSADMIN\Facade\UserGroupFacade;
use XSADMIN\Facade\UserFacade;
use XSADMIN\Entity\Group;
use XSADMIN\Entity\UserGroup;



class Groupmodel extends CI_Model{
    function findUserGroups($userId){
        $facade = new UserGroupFacade();
        try{
            return $facade->findAllGroupsUser($userId);
        }catch(\Exception $ex){
            throw new Exception($ex->getMessage(), $ex->getCode(), $ex->getPrevious());
        }
    }
    
    function cadastrar($name, $acronym, $email, $phone, $address, $description){
        $facade = new GroupFacade();
        $userGroupFacade = new UserGroupFacade();
        $userFacade = new UserFacade();
        $userData = $this->sessionstorage->getUserSession();
        if($name == NULL || $name == ''){
            throw new Exception('O nome do grupo não pode ser nulo');
        }
        
        $grupo = new Group(NULL, $name, $acronym, $description, $email, $phone, $address);
        try{
            $savedGroup = $facade->save($grupo);
            $user = $userFacade->findById($userData['id']);

            $userGroup = new UserGroup(NULL, TRUE);
            $userGroup->setGroup($savedGroup);
            $userGroup->setUser($user);

            $userGroupFacade->save($userGroup);
            return TRUE;
        }  catch (\Exception $ex){
            throw new Exception($ex->getMessage());
        }
    }

    function removerMembro($groupId, $userId){
        $facade = new GroupFacade();
        try{
            $facade->removeMember($groupId, $userId);
        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    function arrayAllMembros($id){
        $facade = new GroupFacade();
        try{
            $grupo =  $facade->findById($id);
            $usuarios = array();
            foreach($grupo->getUser() as $userGroup){
                $user = $userGroup->getUser();
                $usuarios[] = array('id' => $user->getId(), 'name' => $user->getName());
            }
        }catch(\Exception $ex){
            throw new Exception('Erro ao buscar pelos membros deste grupo');
        }

        return $usuarios;
    }
}
