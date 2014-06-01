
<div class="container">
	<div class="col-md-7 col-md-offset-2">
		<div class="panel panel-default ">
			<div class="panel-heading">
    			<center><h3 class="panel-title"><strong>Edit User Story</strong></h3></center>
    		</div>
         <div class="panel-body">


<div>
<?php 

echo form_open('Main/update');

echo form_hidden('StoryId', $row[0]->StoryId);

// an array of the fields in the student table
$field_array = array('ProjectId','name','Description','IterationId','OwnerEmail','PlanEst','u_status');
?>
<div>
<label>Project Id</label>
<?php
$dd_list = array(
                  'P01'   => 'P01',
                  'P02'   => 'P02',
                  'P03'   => 'P03',
		                );
echo form_dropdown('ProjectId', $dd_list,$row[0]->ProjectId)
?>
</div>
<br>
<div>
<label>User Story</label>
<?php

echo form_input('name', $row[0]->name) ;
?>
</div>
<br>

<div>
<label>Description</label>
<?php

echo form_textarea('Description',$row[0]->Description);
?>
</div>
<br>
<div>
<label>Iteration Id</label>	
<?php	 
		 $dd_list = array(
		                  'Iteration 01'   => 'Iteration 01',
		                  'Iteration 02'   => 'Iteration 02',
		                  'Iteration 03'   => 'Iteration 03',
		                );
		 echo form_dropdown('IterationId', $dd_list,$row[0]->IterationId);?>
</div>
<br>
<div>
<label>Owner Email</label>
<?php
echo form_input('OwnerEmail',$row[0]->OwnerEmail);
?>
</div>
<br>

<div>
<label>Plan Estimation</label>
<?php
echo form_input('PlanEst',$row[0]->PlanEst);
?>
</div>
<br
    
<div>
<label>User Story Status</label>	
<?php	 
		 $dd_list = array(
		                  'Defined'   => 'Defined',
		                  'In-Progress'   => 'In-Progress',
		                  'Completed'   => 'Completed',
		                );
		 echo form_dropdown('u_status', $dd_list,$row[0]->u_status);?>
</div>
<br>
    
<p>
<div class="form-group">
<div class="col-sm-offset-7 col-sm-5">
<?php		    
$atri=array('class' => 'btn btn-primary');
echo form_submit('', 'Update');



?>

</p>
<?php echo form_close(); ?>
</div>
</div>
        </div>
        </div>
</div>
	</div>
	</div>
</div>
    </body>
</html>