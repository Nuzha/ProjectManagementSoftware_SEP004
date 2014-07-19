<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Burndown extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function get_it_burndown(){
        $numOfus = $this->load->model('model_burndown');
       
        $data['num'] = $numOfus;
        echo $numOfus;
        $this->load->view('it_burndown', $data);
    }
    
 }