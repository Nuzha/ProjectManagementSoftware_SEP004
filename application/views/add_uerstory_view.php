<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-8">
        <h3>Backlog</h3>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              You can create the backlog by adding new user stories.
            </div>
        
        <div class="panel panel-default ">
			<div class="panel-heading">
    			<center><h3 class="panel-title"><strong>Add User Story To Backlog</strong></h3></center>
    		</div>
         <div class="panel-body">
    
        
        <?php $this->load->helper('form'); ?>
  	<div>
		<?php echo form_open('Main/create');
                 echo validation_errors(); ?>
            
		
		<div class="form-group">
	    <label >Project name:  </label>
            <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $this->session->userdata('project_name')?>" disabled>
	   	
	    </div>
	  
	    
	    
		<div  class="form-group">
        <label >User Story: </label>
        <input class="form-control" type="text" name="user_story" id="user_story" value="" size="30" />
		</div>
		
		
		<div class="form-group" >
        <label >Description: </label>
        <br>
        <textarea class="form-control" name="description" id="description" value="" cols="60" rows="4"></textarea>
        </div>
        <br>
        
        <div class="form-group">
	    <label for="email">Owner e-mail: </label>
	   	<?php
                
                echo form_dropdown('email',$email_list,'','class="form-control"'); ?>
	    </div>
	    
        
       <div class="form-group">
	    <label for="email">Iteration Id: </label>
	   	<?php
                
                echo form_dropdown('iteration',$iteration_list,'','class="form-control"'); ?>
	    </div>
	    
	    
	    
	    <div class="form-group input-group">
	    <lable for="plan">Plan Estimation :</lable>
	    <input class="form-control" type="text"	name="plan_estimation" id="plan_estimation" /><span class="input-group-addon">Hours</span>
	    </div>
	  
	    
	    
        <p>
        <div class="form-group">
    	       <input class = 'btn btn-success' type='submit' value="create user story"/>
                <?php echo form_close(); ?>
  	</div>
         </p>
</div>
             
</div>
	</div>
        </div>
        
        <div class="col-lg-4">
    <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-clock-o"></i> Recent Activity</h3>
              </div>
              <div class="panel-body">
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <span class="badge">just now</span>
                    <i class="fa fa-calendar"></i> Calendar updated
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">4 minutes ago</span>
                    <i class="fa fa-comment"></i> You commented on a post
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">23 minutes ago</span>
                    <i class="fa fa-truck"></i> User Story #10 of Project 01 modified
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">46 minutes ago</span>
                    <i class="fa fa-money"></i> New user stories has been added for Project 02
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">1 hour ago</span>
                    <i class="fa fa-user"></i> A new user has been added for Project 02
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">2 hours ago</span>
                    <i class="fa fa-check"></i> Completed task: "create Administrator login"
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">1 hour ago</span>
                    <i class="fa fa-globe"></i> Completed user story: "As scrum master I need to add copy or delete work items when...."
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">yesterday</span>
                    <i class="fa fa-check"></i> Completed task: "fix error on sales page"
                  </a>
                   <a href="#" class="list-group-item">
                    <span class="badge">two days ago</span>
                    <i class="fa fa-check"></i> Completed task: "fix error on login page"
                  </a>
                   <a href="#" class="list-group-item">
                    <span class="badge">two days ago</span>
                    <i class="fa fa-check"></i> New user story assigned: "As scrum master I want to view reports so that I can track ..."
                  </a>
                </div>
                <div class="text-right">
                  <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
</div>
    </div>
    
    <div class="row">
        <div class="col-lg-8">
           
		
        </div>
        
        
    </div>
</div>
