<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use XSAUTH\Facade\UserFacade;
use XSAUTH\Entity\User;
/**
 * Description of UserModel
 *
 * @author lazaro
 */
class UserModel extends CI_Model{
    
    public function cadastrar($name, $email, $password, $birthdate, $phone){
        $birthdate = str_replace('/', '-', $birthdate);
        $user = new User(NULL, NULL, $name, $email, md5($password), $admin = false, $active = true, $type = 'visitor', 
                    new DateTime($birthdate), $phone);
        $facade = new UserFacade();
        try{
            return $facade->save($user);
        }  catch (\Exception $ex){
            throw new Exception($ex->getMessage());
        }
    }
    
    public function authenticate($email, $password){
        $facade = new UserFacade();
        try{
            return $facade->authenticate($email, $password);
        }  catch (\Exception $ex){
            throw new Exception($ex->getMessage());
        }
    }
}
