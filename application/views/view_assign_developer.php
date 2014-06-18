

<div class="container">
	<div class="row col-md-offset-2">
		<div class="panel panel-default ">
			<div class="panel-heading">
    			<center><h3 class="panel-title"><strong>Assign Members to Project</strong></h3></center>
    		</div>
    <div class="panel-body"> 
	<?php
		$formattributes = array('class' => 'form-horizontal', 'role' => 'form');
		echo form_open('main/add_developer',$formattributes);
              
	?>
		<div class="form-group">
    		<label for="inputProjectName" class="col-sm-3 control-label" style="color: #0088cc">Project Name &nbsp;&nbsp;</label>
    		<div class="col-sm-7">
      			<?php
					$projectnameattributes = array('class' => 'form-control','name'=>'project_name');
      				echo form_input($projectnameattributes,$this->session->userdata('project_name'));
					if(form_error('project_name')!=null)
						echo '<div class="alert alert-danger">'.form_error('project_name').'</div>';
      			?>
    		</div>
  		</div>
  		
  		
      			
  		<br />
  		<div class="form-group">
    		<label for="inputNoOfIteration" class="col-sm-3 control-label" style="color: #0088cc">Available Developers &nbsp;&nbsp;</label>
    		<div class="col-sm-7">
                    <select name="tot" class="form-control" onchange="">
                        <?php
                         $sql = "SELECT `id`,`username`, `type`, `email` FROM member WHERE `type`='Developer'";
                          $query_resource = mysql_query($sql);
                          
                          while ($developer = mysql_fetch_assoc($query_resource)):
                              
                          ?>
         
                             <option value="<?php echo $developer['email']; ?>"><?php echo $developer['email'] ?></option>
                         
                        <?php endwhile; ?>
                    </select>
                </div>
                </div>
                    <br>
                    <br>
                  <div class="form-group">
    		<div class="col-sm-offset-8 col-sm-5">
      			<?php
      				$selectbtnattributes = array('class' => 'btn btn-success','name'=>'Add','value'=>'Add Developer','type'=>'Add','content'=>'Add Developer','data-toggle'=>'tooltip', 'data-original-title'=>'');
      				echo form_button($selectbtnattributes);
      			?>
      			
    		</div>
                  </div>
  	
  		<?php
  			echo form_close();
  		?>
  		
	
	
		</div>
	</div>
	</div>
    
    
    
    <div class="row col-md-offset-2">
		<div class="panel panel-default ">
			<div class="panel-heading">
    			<center><h3 class="panel-title"><strong><?php echo $this->session->userdata('project_name');?> Assigned Member Details</strong></h3></center>
    		</div>
    <div class="panel-body">
        <div class="form-group">
            <label for="developers" class="col-sm-3 control-label">Assigned Developers :</label>
            <div class="col-sm-7">
             <?php
                        $id=$this->session->userdata('project_id');
                         $sql2 = "SELECT `project_id`,`member_email` FROM assign_members WHERE `project_id`='$id'";
                          $query_resource2 = mysql_query($sql2);
                          
                          while ($list = mysql_fetch_assoc($query_resource2)):
                              
                          ?>
            
            <a href="" id="<?php echo $list['member_email']; ?>"  class="bg-success" onclick=""><h4><?php echo $list['member_email']; ?></h4></a>
            <?php endwhile; ?>
            </div>
        </div>
    </div>
                </div>
    </div>
    
		</div>


