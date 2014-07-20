<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Burndown extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function get_it_burndown(){
       
        $this->load->view('header');
        $this->load->model('model_burndown','',TRUE);        
        $data['userStory_qry'] = $this->model_burndown->getUserStories()->result_array();
        $data['days'] = $this->model_burndown->getDuration()->result_array();
        $data['end_dates'] = $this->model_burndown->getEndDates();
        $data['start_date'] = $this->model_burndown->getStartDate()->result_array();        
        $this->load->view('it_burndown', $data);
        $this->load->view('footer');
    }
    
    public function getDetails(){
        $this->load->view('header');
        $this->load->view('getChartData');
        $this->load->view('footer');
    }
    
}