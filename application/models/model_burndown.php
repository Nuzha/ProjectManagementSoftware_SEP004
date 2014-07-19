<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Chart extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getDays() {

       $query = $this->db->query("SELECT  `num_of_userstories` 
                                  FROM  `iteration` 
                                  WHERE `i_name` = 'Iteration 01'");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }

}
 

?>