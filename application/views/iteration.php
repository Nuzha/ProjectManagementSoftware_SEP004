
<div class="col-md-7 col-md-offset-2"> 
             
             <!-- BEGIN: XHTML for example 1.3 -->

			<div id="example-1-3">

				<div class="column left first">
                                    <h3><center><span class="label label-primary">User Stories</center></span></h3><br>
                             
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
                                
                            <div class="column left" >
                                <h3><center><span class="label label-primary"><?php echo $project1['i_name'];?></center></span></h3>
                                <h5><center><span class="label label-warning">Start Date:<?php echo $project1['i_start_date'];?></center></span></h5>
                                <h5><center><span class="label label-primary">End Date: <?php echo $project1['i_end_date'];?></center></span></h5>
                                <h5><center><span class="label label-warning">Duration:<?php echo $duration;?></center></span></h5>
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
                                  
                         

