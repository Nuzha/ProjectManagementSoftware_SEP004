<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class S_dev_iteration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
       
    }
    
    function index() {
        $this->Iterationlisting();
    }

    function Iterationlisting()
      {
        //$this->load->library('table');

        $this->load->model('s_dev_iterationModel','',TRUE);
        $data['it_qry'] = $this->s_dev_iterationModel->listIterations();

        
        $this->load->view('header');
        $this->load->view('left_side');

        $this->load->view('S_VdevIteration', $data);
      }

      function UserStorylisting()
     {
        $this->load->library('table');

        $this->load->model('s_dev_iterationModel','',TRUE);
        $data['userStory_qry'] = $this->s_dev_iterationModel->listUserStories();
        $this->load->view('header');
        $this->load->view('left_side');
        $this->load->view('S_VdevBacklog', $data);
      }
      
      function update_u_status() {
        $this->load->helper('url');

        $this->load->model('s_dev_iterationModel', '', TRUE);
        $this->s_dev_iterationModel->update_u_status();
        //redirect('Main/userStory', 'refresh');
    }
    

}
?>