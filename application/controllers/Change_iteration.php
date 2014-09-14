<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Change_iteration extends CI_Controller {
    
     public function __construct() {
        parent::__construct();
    }
     function index() {
        // $this->UserStorylisting();
        $this->iteration_update_priority();
    }
      public function iteration_update_priority() {

        $this->load->model('updateList', '', TRUE);
        $array = $_POST['arrayorder'];
        $update = $_POST['update'];
        var_dump($update);
        $this->updateList->update($array, $update);
        redirect('Change_priority/iteration_update_priority', 'refresh');
        //echo 'sdfsdf';
    }
    
    
    
}