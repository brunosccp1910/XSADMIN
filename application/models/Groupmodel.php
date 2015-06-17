<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Groupmodel
 *
 * @author lazaro
 */

use XSADMIN\Facade\GroupFacade;


class Groupmodel extends CI_Model{
    function findUserGroups($userId){
        $facade = new GroupFacade();
        try{
            return $facade->findUserGroups($userId);
        }catch(\Exception $ex){
            throw new Exception($ex->getMessage(), $ex->getCode(), $ex->getPrevious());
        }
    }
}
