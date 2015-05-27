<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Dashboard
 *
 * @author lazaro
 */
class Dashboard extends MY_Controller{
    public function index(){
        $this->template->load('dashboard/index', 'array', null, 'Dashboard');
    }
}
