<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_notify extends CI_Controller {

    public function __construct() {
        parent::__construct();

    }

    function notify(){
            $this->load->view('notification');
     }
}
?>