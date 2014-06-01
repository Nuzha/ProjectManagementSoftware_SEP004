<?php 

class C_project extends CI_Controller{
    
   public function project_select(){
       
       
      $id = $this->input->post('project');

        $this->load->model('project');

        $project_id = $this->project->get_project_id($id);



        $this->session->set_flashdata('project_id', $project_id['project_id']);
        redirect('main/Iteration', 'refresh');
      
      
      
       
   }
   
    
    
}


?>
