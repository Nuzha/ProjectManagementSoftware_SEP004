<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Model_burndown extends CI_Model {


    public function __construct() {
        parent::__construct();
    }

    public function getUserStories() {

       return $this->db->query("SELECT  num_of_userstories FROM  iteration WHERE i_name = 'Iteration 01' AND `ProjectId` = '1'");
    }

    public function getDuration() {

        return $this->db->query("SELECT  Duration FROM  iteration WHERE i_name = 'Iteration 01' AND `ProjectId` = '1'");

    }

    public function getEndDates() {
        return $this->db->query("SELECT  end_date FROM  user_stories WHERE IterationId = 'Iteration 01' AND `ProjectId` = '1' AND u_status = 'Success'");
    }
    
     public function getStartDate() {

        return $this->db->query("SELECT  i_start_date FROM  iteration WHERE i_name = 'Iteration 01' AND `ProjectId` = '1'");

    }
    
}

?>