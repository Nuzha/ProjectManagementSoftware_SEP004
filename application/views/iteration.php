
<div class="col-md-10 col-sm-offset-2"> 
             
             <!-- BEGIN: XHTML for example 1.3 -->

			<div id="example-1-3">

				<div class="column left first">
                                    <center><h4>User Stories</h4></center>

					<ul class="sortable-list">
						
					
                                <?php
                           
                            $sql = "SELECT `Description` FROM `user_stories` WHERE ProjectId=$pro_id  ";
                            $query_resource = mysql_query($sql);
                            while ($project = mysql_fetch_assoc($query_resource)):
                               
                                ?>
                                 <li class="sortable-item"><?php echo $project['Description']; ?></li>
				

                            <?php endwhile; ?>
                                    </ul>

				</div>
                            
                            
                            
                            
                            
                             <?php
                                $tot_duration=0;
                            $sql1 = "SELECT `i_name`,`i_start_date`,`i_end_date` FROM `iteration` WHERE ProjectId=$pro_id ";
                            $query_resource1 = mysql_query($sql1);
                            while ($project1 = mysql_fetch_assoc($query_resource1)):
                                $s_date=strtotime($project1['i_start_date']);
                                $e_date=strtotime($project1['i_end_date']);
                                $duration= $e_date-$s_date ;
                                $duration= round($duration/86400);
                                
                                $tot_duration=$tot_duration+$duration;
                              
                             // $this->session->set_userdata('tot_duration', $tot_duration);
                               
                                ?>
                                
                            <div class="column left">
                                <center><h4><?php echo $project1['i_name'];?></h4></center>
                                <p>Start Date:<?php echo $project1['i_start_date'];?></p><p>End Date: <?php echo $project1['i_end_date'];?> </p>
                                <p>Duration:<?php echo $duration;?></p>
                                <ul class="sortable-list">
						
					</ul>
                                
                            </div>
                          
                            
                            <?php endwhile;  ?>
                            <?php ?>
				
				<div class="clearer">&nbsp;</div>

			</div>

               
  
             
               <script type="text/javascript" src = "http://localhost/ProjectManagementSoftware_SEP004/js/jquery-1.4.2.min.js"></script>
                  <script type="text/javascript" src = "http://localhost/ProjectManagementSoftware_SEP004/js/jquery-ui-1.8.custom.min.js"></script>
             
 <script type="text/javascript">

$(document).ready(function(){

	// Example 1.1: A single sortable list
	

	// Example 1.2: Sortable and connectable lists
	

	// Example 1.3: Sortable and connectable lists with visual helper
	$('#example-1-3 .sortable-list').sortable({
		connectWith: '#example-1-3 .sortable-list',
		placeholder: 'placeholder',
	});

	// Example 1.4: Sortable and connectable lists (within containment)
	

});

</script>

    </div>
                                  
                         

