<?php

class C_my_work extends CI_Controller{
    
    
    
    
    
    public  function view_story_board(){
        
        $id['pro_id']=$this->session->userdata('project_id');
        $id['owner']=  $this->session->userdata('email');
       
        $this->load->model('project');
        $id['row_i']=$this->project->getProject($id['pro_id'])->result();
         
        if($this->session->userdata('project_id')){
            $this->load->view('dev_header');
            $this->load->view('dev_leftside');
            $this->load->view('footer');
            $this->load->view('dev_story_board',$id);
            
        }
         else{
            $id['row_i']="NULL";
            $this->load->view('dev_header');
        $this->load->view('dev_leftside');
        $this->load->view('footer');
         $this->load->view('project_not_selected');
         
         }
        
        
        
    }
    
    
    
    
}
?>
