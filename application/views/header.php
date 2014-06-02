<!DOCTYPE HTML>
<html>
	<head>
		<title>Agile Project Management Software</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="<?php echo base_url(). 'css/bootstrap.min.css'?>" rel="stylesheet">
                <link href="<?php echo base_url(). 'css/bootstrap.css'?>" rel="stylesheet">
                <link href="<?php echo base_url(). 'css/styles.css'?>" rel = "stylesheet">
                <link href="<?php echo base_url(). 'css/dashboardNew.css'?>" rel = "stylesheet">
                <link href="<?php echo base_url(). 'css/datepicker.css'?>" rel = "stylesheet">
                <link href="<?php echo base_url(). 'css/datepicker3.css'?>" rel = "stylesheet">
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script src = "http://localhost/ProjectManagementSoftware_SEP004/js/bootstrap.js"></script>
                <script src = "http://localhost/ProjectManagementSoftware_SEP004/js/bootstrap-datepicker.js"></script>
                 <script src = "http://localhost/ProjectManagementSoftware_SEP004/js/bootstrap-popover.js"></script>
		    <script src = "http://localhost/ProjectManagementSoftware_SEP004/js/bootstrap-tooltip.js"></script>
                    <script src = "http://localhost/ProjectManagementSoftware_SEP004/js/bootstrap-twispy.js"></script>
                    <link href="<?php echo base_url(). 'css/style.css'?>" rel = "stylesheet">

		<script>
                function myFunction()
                {
                     $(".menuItem").click(function() {
                         var myURL = $(this).attr("mref");
                         
                      $.ajax({
                         type : "POST",
                         url : myURL,
                         success: function(data){
                          $('#workingspace').html(data);
                         
                          }
                     });
                     return true;
                 });
               }
              $(document).ready(myFunction);
            </script>            
        </head>
	
	<body >
            
            <!--Navigation bar-->
		<div class = "navbar navbar-inverse navbar-static-top">
			<div class = "container">
					
                            <div class="navbar-brand">Agile Project Management Software</div>
					<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
					</button>
										
					<div class = "collapse navbar-collapse navHeaderCollapse">
					<ul class = "nav navbar-nav navbar-right">
                                                                       
		                          	<li><a  href ="#contact"  data-toggle="modal"><span class="glyphicon glyphicon-th-large"></span> Projects</a></li>
						<li><a href = "#members" data-toggle="modal"><span class="glyphicon glyphicon-user"></span><span class="glyphicon glyphicon-user"></span>Assign Members</a></li>
						                                           
                                                <li class = "dropdown">

                                                    <a href = "#dropdown-menu" class = "dropdown-toggle" data-toggle = "dropdown"><span class="glyphicon glyphicon-envelope">Messages </span> <b class = "caret"></b></a>
                                                    <ul class = "dropdown-menu">
                                                        <li><a href = "#"><span class="badge">3</span> Inbox</a></li>
                                                        <li><a href = "<?php echo base_url() . 'main/newmsger';?>"> New Message</a></li> 
                                                        <li><a href="<?php echo base_url() . 'main/load_list';?>"> All Messages </a></li>
                                                      
                                                    </ul>
                                                </li>
                                             
                                                <li><a href = "#"><span class="glyphicon glyphicon-bell"></span> Notifications</a></li>
					
                                                <li class = "dropdown">

                                                    <a href = "#dropdown-menu" class = "dropdown-toggle" data-toggle = "dropdown"><b class = "caret"></b><span class="glyphicon glyphicon-user"></span></a>
                                                    <ul class = "dropdown-menu">
                                                        <li><a href = "#profile"data-toggle="modal">My profile</a></li> 
                                                        <li><a href = "#">Sign Off</a></li>
                                                    </ul>
                                                </li>
					</ul>
					</div>
                                        
                                        

                                       
				</div>
			</div>
	
            
            
             <div class = "modal fade" id = "contact">
                                            <div class = "modal-dialog">
                                                <div class = "modal-content">
                                                    <div class = "modal-header">
                                                        <p><b>Current Available Projects</b></p>
                                                        
                                                    </div>
                                                    <p class="h4" style="color: #5bb75b">Please select a project</p>
                                                    <div class = "modal-body">



                                                        <!--                                                       ------------------------------------------------------>
                                                        <?php
                                                        $formattributes = array('class' => 'form-horizontal', 'role' => 'form');
                                                        echo form_open('c_project/project_select', $formattributes);
                                                        ?>
                                                        <?php
                                                        //Create the query
                                                        $sql = "SELECT `project_id`,`project_name` FROM project_summary";

                                                        //Run the query
                                                        $query_resource = mysql_query($sql);

                                                        //Iterate over the results that you've gotten from the database (hopefully MySQL)
                                                        while ($project = mysql_fetch_assoc($query_resource)):
                                                            ?>


                                                            <input type="radio" name="project" value="<?php echo $project['project_name']; ?>" />
                                                            <span>
                                                            <?php echo $project['project_name']; ?></span><br />

                                                            <?php endwhile; ?>


                                                        <!--                                                       ------------------------------------------------------->
                                                    </div>
                                                    <div class = "modal-footer">

                                                        <?php
                                                        $registerbtnattributes = array('class' => 'btn btn-primary', 'name' => 'project_submit', 'value' => 'show project');
                                                        echo form_submit($registerbtnattributes);
                                                        ?>

                                                        <?php
                                                        echo form_close();
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
            
<!--            -------------------------------------------------------------------------------------------------------------->

                             <div class = "modal fade" id = "members">
                                            <div class = "modal-dialog">
                                                <div class = "modal-content">
                                                    <div class = "modal-header">
                                                        <p><b>Project Assign Members</b></p>
                                                    </div>
                                                    <div class = "modal-body">
                                                   
                                                        
                                                        
<!--                                                       ------------------------------------------------------>
                                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
<!--                                                       ------------------------------------------------------->
                                                    </div>
                                                    <div class = "modal-footer">
                                                        <a class ="btn btn-default" href="#test" data-dismiss= "modal">Submit</a>
                                                        <a class ="btn btn-primary" data-dismiss = "modal">Close</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
<!--            -------------------------------------------------------------------------------------------------------------->
