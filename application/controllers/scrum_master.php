<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class scrum_master extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
       
    }
    
    function index() {
        $this->UserStorylisting();
    }
    
    
    function UserStorylisting()
     {
        //$this->load->library('table');
        $pro_id=  $this->session->userdata('project_id');
        $this->load->model('model_userStory','',TRUE);
        $data['userStory_qry'] = $this->model_userStory->listUserStories($pro_id);
       $this->load->view('header');
       $this->load->view('left_side');
        $this->load->view('scrum_backlog', $data);
      }
}


?>