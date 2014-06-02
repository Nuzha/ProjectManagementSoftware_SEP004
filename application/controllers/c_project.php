<?php 

class C_project extends CI_Controller{
    
   public function project_select(){
       
       
      $id = $this->input->post('project');

        $this->load->model('project');

        $project_id = $this->project->get_project_id($id);
        

          $data =array(
              'project_id'=>$project_id['project_id'],
          );

        $this->session->set_userdata($data);
        
        redirect('main/Iteration', 'refresh');
      
      
      
       
   }
   
   
   
    
    
}


?>
