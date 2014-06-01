

<div class="container">
	<div class="col-md-7 col-md-offset-2">
		<div class="panel panel-default ">
			<div class="panel-heading">
    			<center><h3 class="panel-title"><strong>Assign Members to Project</strong></h3></center>
    		</div>
    <div class="panel-body"> 
	<?php
		$formattributes = array('class' => 'form-horizontal', 'role' => 'form');
		echo form_open('main/add_developer',$formattributes);
                echo form_hidden('id', $row[0]->id);
	?>
		<div class="form-group">
    		<label for="inputProjectName" class="col-sm-3 control-label">Project Name &nbsp;&nbsp;</label>
    		<div class="col-sm-7">
      			<?php
					$projectnameattributes = array('class' => 'form-control','name'=>'project_name');
      				echo form_input($projectnameattributes,$row[0]->project_name);
					if(form_error('project_name')!=null)
						echo '<div class="alert alert-danger">'.form_error('project_name').'</div>';
      			?>
    		</div>
  		</div>
  		
  		
      			
  		<br />
  		<div class="form-group">
    		<label for="inputNoOfIteration" class="col-sm-3 control-label">Available Developers &nbsp;&nbsp;</label>
    		<div class="col-sm-7">
                    <select name="tot" class="form-control" onchange="<?php $this->main->get_dropdown ?>">
                        <?php
                            foreach($developers as $row){
                                echo '<option value="'.$row->Full_name.'">'.$row->Full_name.'</option>';
                            }
                        ?>
                        
                    </select>
                    <div class="form-group">
                        <label for="inputAdddev" class="col-sm-3 control-label">Added Developers &nbsp;&nbsp;</label>
    		<div class="col-sm-offset-7 col-sm-5">
      			<?php
      				$selectbtnattributes = array('class' => 'btn btn-default','name'=>'Add','value'=>'Add','type'=>'Add','content'=>'Add','data-toggle'=>'tooltip', 'data-original-title'=>'');
      				echo form_button($selectbtnattributes);
      			?>
      			<?php
//      				$iterationattributes = array('class' => 'form-control','name'=>'no_of_iterations');
//      				echo form_input($iterationattributes,$row[0]->no_of_iterations);
//					if(form_error('no_of_iterations')!=null)
//						echo '<div class="alert alert-danger">'.form_error('no_of_iterations').'</div>';
      			?>
    		</div>
  		</div>
  		<br />
<!--  		<div class="form-group">
    		<label for="inputConfirmPassword" class="col-sm-3 control-label">Confirm Password&nbsp;&nbsp;</label>
    		<div class="col-sm-7">
      			//<?php
//      				$confirmpasswordattributes = array('class' => 'form-control','name'=>'confirmpassword');
//      				echo form_password($confirmpasswordattributes);
//					if(form_error('confirmpassword')!=null)
//						echo '<div class="alert alert-danger">'.form_error('confirmpassword').'</div>';
//      			?>
    		</div>
  		</div>-->
  		<br />
<!--  		<div class="form-group">
  			<div class="col-sm-12 col-sm-offset-3">
  				<p class="text-muted">By signingup you accept these <a href="#" class="text-primary">terms and conditions.</a></p>
  			</div>
  		</div>-->
                        <?php
      				$addedattributes = array('class' => 'form-control','name'=>'addeddev');
      				echo form_textarea($addedattributes,$this->input->post('tot'));
					if(form_error('no_of_iterations')!=null)
						echo '<div class="alert alert-danger">'.form_error('no_of_iterations').'</div>';
      			?>


  		<div class="form-group">
    		<div class="col-sm-offset-7 col-sm-5">
      			<?php
//      				$clearbtnattributes = array('class' => 'btn btn-default','name'=>'clear','value'=>'Clear','type'=>'reset','content'=>'Clear','data-toggle'=>'tooltip', 'data-original-title'=>'this button will reset all the values in the text feilds');
//      				echo form_button($clearbtnattributes);
      			?>
      			&nbsp;
      			<?php
      				$registerbtnattributes = array('class' => 'btn btn-primary','name'=>'','value'=>'update project');
					echo form_submit($registerbtnattributes);
      			?>
    		</div>
  		</div>
  		
  		<?php
  			echo form_close();
  		?>
  		
		</div>
	</div>
	</div>
</div>
</body>
</html>