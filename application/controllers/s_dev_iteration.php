<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class S_dev_iteration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
       
    }
    
    function index() {
        $this->UserStorylisting();
    }

    function Iterationlisting()
      {
        //$this->load->library('table');

        $this->load->model('s_dev_iterationModel','',TRUE);
        $data['it_qry'] = $this->s_dev_iterationModel->listIterations();

        
        $this->load->view('header');
        $this->load->view('left_side');
        $this->load->view('footer');
        $this->load->view('S_VdevIteration', $data);
      }

      function UserStorylisting()
     {
        //$this->load->library('table');
        $mail = $this->session->userdata['email'];
        $this->load->model('s_dev_iterationModel','',TRUE);
        $data['userStory_qry'] = $this->s_dev_iterationModel->listUserStories($mail);
        $this->load->view('dev_header');
        $this->load->view('dev_leftside');
        $this->load->view('S_VdevBacklog', $data);
        $this->load->view('footer');
      }
      
      function update_iteration_status() {
        $this->load->helper('url');
        $id=  $this->input->post('ID');
        $status=  $this->input->post('category');

        $this->load->model('s_dev_iterationModel', '', TRUE);
       $this->s_dev_iterationModel->update_status($id, $status);
     
        redirect('s_dev_iteration/Iterationlisting', 'refresh');
       
    }
    function update_userstory_status() {
        $this->load->helper('url');
        $id=  $this->input->post('ID');
        $status=  $this->input->post('category');

        $this->load->model('s_dev_iterationModel', '', TRUE);
       $this->s_dev_iterationModel->update_u_story_status($id, $status);
     
        redirect('s_dev_iteration/UserStorylisting', 'refresh');
       
    }
    

}
?>