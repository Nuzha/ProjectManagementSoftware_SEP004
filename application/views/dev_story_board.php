<div class="col-md-10 col-sm-offset-2"> 
             
             <!-- BEGIN: XHTML for example 1.3 -->

			<div id="example-1-3">

				<div class="column left first">
                                    <center><h4>Assigned User Stories</h4></center>

					<ul class="sortable-list">
						
					
                                <?php
                                    $user=$this->session->userdata('USERNAME');
                            $sql = "SELECT `Description` FROM `user_stories` WHERE ProjectId=$pro_id AND OwnerEmail=$user ";
                            $query_resource = mysql_query($sql);
                            while ($project = mysql_fetch_assoc($query_resource)):
                               
                                ?>
                                 <li class="sortable-item"><?php echo $project['Description']; ?></li>
				

                            <?php endwhile; ?>
                                    </ul>

				</div>
                            
                            
                            
                            
                            
                             
                                
                            <div class="column left">
                                <center><h4><?php echo $project1['i_name'];?></h4></center>
                                <p>Start Date:<?php echo $project1['i_start_date'];?></p><p>End Date: <?php echo $project1['i_end_date'];?> </p>
                                <p>Duration:<?php echo $duration;?></p>
                                <ul class="sortable-list">
						
					</ul>
                                
                            </div>
                          
                            
                            
				
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
                                  
                         

