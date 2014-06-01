
<div class="container">
	<div class="col-md-10 col-md-offset-2">
		<div class="panel panel-default ">
			<div class="panel-heading">
    			<center><h3 class="panel-title"><strong>Add User Story To Backlog</strong></h3></center>
    		</div>
         <div class="panel-body">
    
        <?php $this->load->helper('form'); ?>
  	<div>
		<?php echo form_open('Main/create'); ?>
		
		<div>
	    <label >Project Id: </label>
	    <select name='project_id' id="project_id" width="150" style="width: 150px">
	    	<option>P01</option>
	    	<option>P02</option>
	    	<option>P03</option>
	    	<option>P04</option>
		</select>	
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
	    <label>Iteration: </label>	
		<?php
		 
		 $dd_list = array(
		                  'Iteration 01'   => 'Iteration 01',
		                  'Iteration 02'   => 'Iteration 02',
		                  'Iteration 03'   => 'Iteration 03',
		                );
		 echo form_dropdown('iteration', $dd_list, 'Iteration 01');   ?> 
	    </div>
	    <br>
	    
	    <div>
	    <lable>Plan Estimation :</lable>
	    <input type="text"	name="plan_estimation" id="plan_estimation" />Hours
	    </div>
	    <br>
	    
	    
	    
        <p>
        <div class="form-group">
    	<div class="col-sm-offset-7 col-sm-5">
        <input class = 'btn btn-primary' type="submit" value="Submit" />
	
		<?php echo form_close(); ?>
        </div>
  	</div>
         </p>
</div>
             
</div>
	</div>
	</div>
</div>
    </body>
</html>
