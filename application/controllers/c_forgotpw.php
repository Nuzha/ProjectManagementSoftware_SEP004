<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_forgotpw extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function load_view_forgotpw(){
        $this->load->view('view_forgotPw');
    }
    
    public function email_sent(){
        $this->load->view('view_email_sent');
    }

    public function send_pw_email(){
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        if ($this->form_validation->run()) {
         $this->load->model('model_users');
         $email = $this->input->post('email');
         $query = "SELECT `username` ,`type`, `id` FROM member WHERE `email`='$email'";
         echo $email;
         echo 'test';
        }
    }

    public function check_n_sendEmail() {
        echo 'hiiiiiiiii';
        $this->load->helper('url');
        
        $email = $this->input->post('email');
        
        //$email = $_POST['email'];

        $query = $this->db->query("select * from member where `email`='" . $email . "'");
        
        if ($query->num_rows > 0) {
            
            $r = $query->result();
            $user = $r[0];
            $this->resetpassword($user);
            //$info = "Password has been reset and has been sent to email id: " . $email;
            //redirect('c_forgotpw/email_sent');
        }
        $error = "The email you entered not found in our database ";
        redirect('c_forgotpw/load_view_forgotpw');
    }
    
    	private function resetpassword($user)
	{
                echo 'hi';
		date_default_timezone_set('GMT');
		$this->load->helper('string');
		$password= random_string('alnum', 16);
		$this->db->where('id', $user->id);
		$this->db->update('member',array('password'=>MD5($password)));
		$this->load->library('email');
		$this->email->from('fadilanuzha@gmail.com', 'Fadila Nuzha');
		$this->email->to($user->email); 	
		$this->email->subject('Password reset');
		$this->email->message('You have requested the new password, Here is you new password:'. $password);	
		$this->email->send();
	}

}