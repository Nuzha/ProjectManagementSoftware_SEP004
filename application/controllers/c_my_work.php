<?php

class C_my_work extends CI_Controller{
    
    
    
    
    
    public  function view_story_board(){
        
        $this->load->view('header');
        $this->load->view('dev_leftside');
        $this->load->view('footer');
        $this->load->view('dev_story_board');
        
        
        
    }
    
    
    
    
}
?>
