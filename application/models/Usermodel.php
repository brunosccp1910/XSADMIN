<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use XSADMIN\Facade\UserFacade;
use XSADMIN\Entity\User;

/**
 * Description of UserModel
 *
 * @author lazaro
 */
class UserModel extends CI_Model {

    public function cadastrar($name, $email, $password, $birthdate, $phone) {
        $birthdate = str_replace('/', '-', $birthdate);
        $user = new User(NULL, NULL, $name, $email, md5($password), $admin = false, $active = true, $type = 'visitor', new DateTime($birthdate), $phone);
        $facade = new UserFacade();
        try {
            return $facade->save($user);
        } catch (\Exception $ex) {
            throw new Exception($ex->getMessage());
        }
    }
    
    public function findById($id){
        $facade = new UserFacade();
        return $facade->findById($id);
    }

    public function editarPerfil($name, $email, $birthdate, $phone) {
        $birthdate = str_replace('/', '-', $birthdate);
        $userData = $this->sessionstorage->getUserSession();
        $facade = new UserFacade();

        if ($email != $userData['email'] && !$facade->avaliableEmail($email)) {
            throw new Exception('Este email já está sendo utilizado');
        }

        $user = $facade->findById($userData['id']);
        $user->setName($name);
        $user->setEmail($email);
        $user->setBirthdate(new DateTime($birthdate));
        $user->setPhone($phone);
        try {
            $facade->update($user);
        } catch (\Exception $ex) {
            throw new Exception($ex->getMessage());
        }
    }

    public function authenticate($email, $password) {
        $facade = new UserFacade();
        try {
            return $facade->authenticate($email, $password);
        } catch (\Exception $ex) {
            throw new Exception($ex->getMessage());
        }
    }

    public function createSessionData($userEmail) {
        $facade = new UserFacade();
        try {
            $session = array();
            $user = $facade->findByEmail($userEmail);
            if ($user != NULL) {
                $session = array('id' => $user->getId(), 'name' => $user->getName(), 'email' => $user->getEmail(),
                    'admin' => $user->getAdmin(), 'active' => $user->getActive(), 'type' => $user->getType(),
                    'birthdate' => $user->getBirthdate()->format('d/m/Y'), 'phone' => $user->getPhone());
                if ($user->getGroup() != NULL) {
                    $session['group_id'] = $user->getGroup()->getId();
                    $session['group_name'] = $user->getGroup()->getName();
                }
            }
            return $session;
        } catch (\Exception $ex) {
            throw new Exception($ex->getMessage());
        }
    }

}
