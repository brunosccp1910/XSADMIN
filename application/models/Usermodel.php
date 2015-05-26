<?php

use XSAUTH\Facade\UserFacade;
/**
 * Description of UserModel
 *
 * @author lazaro
 */
class UserModel extends CI_Model{
    
    public function cadastrar($name, $email, $password, $birthdate, $phone){
        $facade = new UserFacade();
        try{
            return $facade->save();
        }  catch (\Exception $ex){
            throw new Exception($ex->getMessage());
        }
    }
}
