<?php

namespace XSADMIN\Business;

use XSADMIN\Business\AbstractBusiness;
use XSADMIN\DAO\DAOGenericImpl;
use XSADMIN\Entity\User;
/**
 * Description of UserBusiness
 *
 * @author lazaro
 */
class UserBusiness extends AbstractBusiness{
    function __construct() {
        parent::setDAO(new DAOGenericImpl());
        parent::setEntityBusiness(new User());
    }
    
    public function authenticate($user, $password){
        try{
            $userEntity = $this->findOneBy(array('email' => $user, 'password' => $password));
        }  catch (\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
        
        if($userEntity != NULL){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function findByEmail($userEmail){
       try{
            return $this->findOneBy(array('email' => $userEmail));
        }  catch (\Exception $ex){
            throw new Exception($ex->getMessage());
        }
    }
    public function avaliableEmail($userEmail){
       try{
            if($this->findOneBy(array('email' => $userEmail)) != NULL){
                return FALSE;
            }else{
                return TRUE;
            }
        }  catch (\Exception $ex){
            throw new Exception($ex->getMessage());
        } 
    }
    function attachEntity($object) {
        return $object;
    }
    
    function validarObjeto($object) {
        return TRUE;
    }
}
