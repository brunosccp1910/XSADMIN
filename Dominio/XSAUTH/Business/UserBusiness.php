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
    
    function attachEntity($object) {
        return $object;
    }
    
    function validarObjeto($object) {
        return TRUE;
    }
}
