<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Burndown extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function get_it_burndown(){
//        $this->load->model('model_burndown'); 
//        $data['query'] = $this->model->getDays();
//        $this->load->view('it_burndown', $data);
        
        $this->load->model('model_burndown','',TRUE);
        $data['userStory_qry'] = $this->model_burndown->getDays()->result_array();
        $this->load->view('it_burndown', $data);
    }
    
 }