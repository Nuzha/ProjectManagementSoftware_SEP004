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
            $query = "SELECT * FROM member WHERE `email`='$email'";
            $pw = "SELECT `password` FROM member WHERE `email`='$email'";
           
            if ($query === FALSE) {
                    die(mysql_error()); // TODO: better error handling
                    echo 'error';
                    redirect('c_forgotpw/load_view_forgotpw');
                }
           else{
                $this->resetpassword($pw);
                redirect('c_forgotpw/email_sent');
          }
        }
    }
 
    private function resetpassword($pw)
   {
                     
                     $config = Array(
				'protocol' => 'smtp',
			  	'smtp_host' => 'ssl://smtp.googlemail.com',
			  	'smtp_port' => 465,
			  	'smtp_user' => 'fadilanuzha@gmail.com',
			  	'smtp_pass' => 'mt1891mt1891',
			  	'mailtype' => 'html',
			  	'charset' => 'iso-8859-1',
			  	'wordwrap' => TRUE
			);
              
			$message="Your Password is..".$pw;			
			$this->load->library('email');
                        $this->email->set_newline("\r\n");
                        $this->email->from('fadilanuzha@gmail.com'); 
                        $this->email->to($this->input->post('email'));
                        $this->email->subject('Reset Password');
			$this->email->message($message);
 
     }

}