<?php

namespace XSAUTH\Business;

use XSAUTH\Business\AbstractBusiness;
use XSAUTH\DAO\DAOGenericImpl;
use XSAUTH\Entity\User;
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
            throw new Exception($ex->getMessage());
        }
        
        if($userEntity != NULL){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    function attachEntity($object) {
        return $object;
    }
    
    function validarObjeto($object) {
        return TRUE;
    }
}
