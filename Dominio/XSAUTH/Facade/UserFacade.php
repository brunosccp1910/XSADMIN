<?php

namespace XSAUTH\Facade;

use XSAUTH\Facade\AbstractFacade;
use XSAUTH\Business\UserBusiness;
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
