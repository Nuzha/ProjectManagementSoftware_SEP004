
<div class="col-lg-offset-9  ">
      <div class="">
            
     
             <table class="table table-striped">
      
 
      <tbody>
        <?php
            
            if($row_i !="NULL"){
 
            foreach ($row_i  as $col) {
                // Print out the contents of the entry 
                echo '<tr class="'.$col->project_id.'">';
                
                echo '<tr><td>Project Name:</td><td>' . $col->project_name . '</td></tr>';
                echo '<tr><td>Start Date  :</td><td>' . $col->start_date . '</td></tr>';
                echo '<tr><td>End Date    :</td><td>' . $col->end_date . '</td></tr>';
                $duration= round((strtotime($col->end_date)-  strtotime($col->start_date))/86400) ;
                 echo '<td>Duration   :</td><td>' . $duration. 'Days</td>';
                 $this->session->set_userdata('DURATION', $duration);
            }}
            else{
                
            }
            ?>      
           
      </tbody>
 
      <tbody></tbody>
    </table>
        
      </div>
 
          </div>