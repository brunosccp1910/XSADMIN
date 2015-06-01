<?php

namespace XSADMIN\Facade;

use XSADMIN\Facade\AbstractFacade;
use XSADMIN\Business\UserBusiness;
/**
 * Description of UserFacade
 *
 * @author lazaro
 */
class UserFacade extends AbstractFacade{
    function __construct() {
        $this->setBusiness(new UserBusiness());
        parent::__construct();
    }
}
