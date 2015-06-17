<?php

namespace XSADMIN\Facade;

/**
 * Description of GroupFacade
 *
 * @author lazaro
 */

use XSADMIN\Business\GroupBusiness;

class GroupFacade extends AbstractFacade{
    function __construct() {
        parent::__construct();
        $this->setBusiness(new  GroupBusiness());
    }
}
