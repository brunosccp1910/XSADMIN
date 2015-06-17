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
    
    public function findUserGroups($userId){
        $query = "SELECT grupo FROM XSADMIN\Entity\Group grupo JOIN grupo.user user WHERE user.id = :userId";
        try{
            return $this->dao->findByParam($query, array('userId' => $userId));
        }  catch (\Exception $ex){
            throw new \Exception($ex->getMessage(), $ex->getCode(), $ex->getPrevious());
        }
    }
}
