<div id="page-wrapper">
    <div class="row">
        <h3>Backlog</h3>
        <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              There are two options for charts: <a href="http://www.flotcharts.org/" target="_blank" class="alert-link">Flot charts</a> and <a href="http://www.oesmith.co.uk/morris.js/" class="alert-link" target="_blank">morris.js</a>. Choose which one best suits your needs, and make sure to master the documentation to get the most out of these charts!
            </div>
    </div>
    
    <div class="row">
        <div class="col-lg-9">
            <div class="navigation">
<center><?php 
  // nav bar
  echo anchor('Main/userStory', 'Add User Story');
  echo (' | ');
  
  echo anchor('scrum_master/UserStorylisting', 'List All User Stories');
?></center>
</div>
		<div class="panel panel-default ">
			<div class="panel-heading">
    			<center><h3 class="panel-title"><strong>Add User Story To Backlog</strong></h3></center>
    		</div>
         <div class="panel-body">
    
        
        <?php $this->load->helper('form'); ?>
  	<div>
		<?php echo form_open('Main/create'); ?>
		
		<div>
	    <label >Project name: <?php echo $this->session->userdata('project_name')?> </label>
	   	
	    </div>
	    <br>
	    
	    
		<div >
        <label >User Story: </label>
        <input type="text" name="user_story" id="user_story" value="" size="30" />
		</div>
		<br>
		
		<div >
        <label >Description: </label>
        <br>
        <textarea name="description" id="description" value="" cols="60" rows="4"></textarea>
        </div>
        <br>
        
        <div>
	    <label for="email">Owner e-mail: </label>
	   	<?php echo form_dropdown('email',$email_list); ?>
	    </div>
	    
        <br>
       <div>
	    <label for="email">Iteration Id: </label>
	   	<?php echo form_dropdown('iteration',$iteration_list); ?>
	    </div>
	    
	    <br>
	    
	    <div>
	    <lable>Plan Estimation :</lable>
	    <input type="text"	name="plan_estimation" id="plan_estimation" />Hours
	    </div>
	  
	    
	    
        <p>
        <div class="form-group">
    	       <input class = 'btn btn-primary' type="submit" value="Submit" />
                <?php echo form_close(); ?>
  	</div>
         </p>
</div>
             
</div>
	</div>
        </div>
    </div>
</div>
