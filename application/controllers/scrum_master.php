<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class scrum_master extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
       
    }
    
    function index() {
       // $this->UserStorylisting();
        $this->update_priority();
    }
    
    
    function UserStorylisting()
     {
        //$this->load->library('table');
        $pro_id=  $this->session->userdata('project_id');
        $this->load->model('model_userStory','',TRUE);
        $data['userStory_qry'] = $this->model_userStory->listUserStories($pro_id);
       $this->load->view('header');
       //$this->load->view('left_side');
        $this->load->view('scrum_backlog', $data);
      }
        public function change_priority(){
           $this->load->view('header');
           $this->load->view('change_priority');
          
      }
      
      public function update_priority(){
          
           $this->load->model('updateList','',TRUE);
           $array	= $_POST['arrayorder'];
          
           $update      =$_POST['update'];
          
           $this->updateList->update($array, $update);
           
           
           redirect('scrum_master/change_priority', 'refresh');
    
          //echo 'sdfsdf';
      }
}


?>
