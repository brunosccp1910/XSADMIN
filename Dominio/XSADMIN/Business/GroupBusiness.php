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

    public function removeMember($groupId, $userId){
        $query = "SELECT ug FROM XSADMIN\Entity\UserGroup ug JOIN ug.user u JOIN ug.group g WHERE u.id = :userId AND g.id = :groupId";
        try{
            $userGroup =  $this->dao->findByParam($query, array('userId' => $userId, 'groupId' => $groupId), 1);
            if(count($userGroup) > 0){
                if($userGroup[0]->getOwner()){
                    throw new \Exception('Você é o dono deste grupo e não pode ser removido');
                }else{
                    //Remover Usuário
                }
            }else{
                throw new \Exception('O usuáiro ou grupo informado deve estar incorreto');
            }

        }  catch (\Exception $ex){
            throw new \Exception($ex->getMessage(), $ex->getCode(), $ex->getPrevious());
        }
    }
    
    public function attachEntity($object) {
        return $object;
    }
    
    public function validarObjeto($object) {
        return TRUE;
    }
}
