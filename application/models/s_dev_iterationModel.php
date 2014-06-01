<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class S_dev_iterationModel  extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
	$this->load->database();
    }

    function listIterations()
    {
      return $this->db->get('iteration');
    }
    
    function listUserStories()
    {
      return $this->db->get('user_stories');
    }
    
    public function update_u_status()
            
    {
           $rowid = $_POST['status'];
           $this->select('i_id');
           $this->from('iteration');
           $rowid1=$this->db->where('i_status',$rowid );
            
            $this->where('i_id',$rowid1);
            $this->db->update('iteration',$rowid);
    }
    
}
?>
