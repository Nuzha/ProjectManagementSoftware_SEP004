<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Msg extends CI_Controller {

//3rd iteration
    function loadMessageView() {
        $data['obj'] = $this->session;
        $type=$this->session->userdata('type');
        if($type == "Scrum Master"){
            $this->load->view('header');
        }
        else{
        $this->load->view('dev_header');
       // $this->load->view('dev_leftside');
        }
        $this->load->view('page', '$data');
        $this->load->view('footer');
    }

    function inbox() {
         $type=$this->session->userdata('type');
       
        if($type == "Scrum Master"){
            $this->load->view('header');
        }
        else{
        $this->load->view('dev_header');
        }
        $this->load->view('inbox');
        $this->load->view('footer');
    }

    public function users() {
        $data['obj'] = $this->session;
          $type=$this->session->userdata('type');
        if($type == "Scrum Master"){
            $this->load->view('header');
        }
        else{
        $this->load->view('dev_header');
        }
        $this->load->view('users', $data);
        $this->load->view('footer');
    }

    public function load_list() {
       
        $type=$this->session->userdata('type');
        if($type == "Scrum Master"){
            $this->load->view('header');
        }
        else{
        $this->load->view('dev_header');
               }
        $this->load->view('list');
        $this->load->view('footer');
    }
 

    public function readmsg() {

        $data['obj'] = $this->session;
          $type=$this->session->userdata('type');
        if($type == "Scrum Master"){
            $this->load->view('header');
        }
        else{
        $this->load->view('dev_header');
       // $this->load->view('dev_leftside');
        }
      
     //   $this->load->view('dev_leftside');
        $this->load->view('read', $data);
    }
    
   

    public function newmsger($msg = NULL) {

        $data['msg'] = $msg;
        $this->load->helper(array('form', 'url'));
        $type=$this->session->userdata('type');
        
        if($type == "Scrum Master"){
            $this->load->view('header');
        }
        else{
        $this->load->view('dev_header');
        }
        $this->load->view('footer');
        $this->load->view('new_msg');
    }
    
    

    function newmsgs() {

        $userid = $this->session->userdata['userid'];
        $username = $this->session->userdata['USERNAME'];

        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean');
        $this->form_validation->set_rules('recip', 'Recip', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->newmsger();
        } else {

            $this->load->model('test_msg');

            // echo "Go to private area";
            $result = $this->test_msg->msg_dbs();

            if ($result) {
                $msg = '<div class="alert alert-success">message delivered successfuly. </div>';
                $this->newmsger($msg);
            } else {
                $msg = '<div class="alert alert-error"><font color=red>server error.</font><br/></div>';
                $this->newmsger($msg);
            }
        }
    }

    public function profile() {
        $data['obj'] = $this->session;
          $type=$this->session->userdata('type');
        if($type == "Scrum Master"){
            $this->load->view('header');
        }
        else{
        $this->load->view('dev_header');
        }
     
        $this->load->view('profile', $data);
        $this->load->view('footer');
    }

    public function edit($msg = NULL) {
        //$data['msg'] = $msg;
        $this->load->helper(array('form', 'url'));
        $data['obj'] = $this->session;
        $type=$this->session->userdata('type');
        if($type == "Scrum Master"){
            $this->load->view('header');
        }
        else{
        $this->load->view('dev_header');
        }
        $this->load->view('view_edit');
        $this->load->view('footer');
    }
    
    public function update_details(){
        
    }

}
