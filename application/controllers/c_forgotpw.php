<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_forgotpw extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function load_view_forgotpw(){
        $this->load->view('forgotPw');
    }
}