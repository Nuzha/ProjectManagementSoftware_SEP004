<?php

class C_discuss extends CI_Controller{
    
    
    var $discussion_id;
    public $username;
    
    
    public function view_discuss($cateogry){
        $cat['category']=$cateogry;
        $this->load->view('header');
        $this->load->view('left_side');
        $this->load->view('discussion_Home', $cat);
        $this->load->view('category_right_side');
        $this->load->view('footer');
    }
    
    public function discuss_validate(){
        
         $this->load->view('header');
         $this->load->view('left_side');
        $this->load->view('footer');
               
        $this->load->library('form_validation');
        $this->form_validation->set_rules('discussion', 'Discussion Topic', 'required|trim|xss_clean|is_unique[discussion.dis_topic]');
       
        if($this->form_validation->run()){
            $this->load->model('c_discussion');
      
                    if($this->c_discussion->add_discussion()){
                        $this->load->view('discussion_sucessfull_message');
                        }
        }else{
          $this->load->view('discussion_fail');
      }
      $cat['category']=  $this->input->post('category');
      $this->load->view('discussion_Home',$cat);
       $this->load->view('category_right_side');
        
    }
    
    public function select_topic($id){
        
        
        
       $this->load->model('model_users');
        
       // $data['result']=$this->c_discussion->get_comments($id);
        
        
 //       $this->load->model('c_discussion');
       
        
        $this->load->view('header');
        $data['result']=$id;
        
        $data['user']=$this->model_users->get_username($this->session->userdata('email'));
        
        $this->load->library('session');
        $this->session->set_flashdata('id', $id);
      
        $this->load->view('view_comments', $data);
         
        $this->load->view('post_comment', $data);
        $this->load->view('category_right_side');
     $this->load->view('left_side');
      $this->load->view('footer'); 
        
    }
    
    public function save_comment(){
        
        $myvar=  $this->session->flashdata('id');   
        $ID=$this->discussion_id;
        $this->username=$this->session->userdata('USERNAME');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('comment', 'required');
             
        if($this->form_validation->run()){
            $this->load->model('c_discussion');
               
                    if($this->c_discussion->add_comment($myvar, $this->username)){
                         $this->select_topic($myvar);
                        $this->load->view('Answer_posted_sucessfully');
                        }
        }else{
          $this->load->view('discussion_fail');
      }
       }
    
    public function select_category($id){
        
        $this->load->model('c_discussion');
        $data['row_d']=$this->c_discussion->get_discussion($id)->result();
        
        $this->load->view('header');
        $this->load->view('left_side');
        $this->load->view('discussion_Home', $data);
        $this->load->view('category_right_side');
        $this->load->view('footer');    
        
    }
    
}
?>
