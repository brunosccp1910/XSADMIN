<?php

namespace XSADMIN\Business;

/**
 * Description of GroupBusiness
 *
 * @author lazaro
 */

use XSADMIN\DAO\DAOGenericImpl;
use XSADMIN\Entity\Group;
class GroupBusiness extends AbstractBusiness{
    
    function __construct() {
        parent::setDAO(new DAOGenericImpl());
        parent::setEntityBusiness(new Group());
    }
    
    public function attachEntity($object) {
        return $object;
    }
    
    public function validarObjeto($object) {
        return TRUE;
    }
}
