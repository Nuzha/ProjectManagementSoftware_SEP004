
<?php
            //otherwise, we display the values of the database
            $query = mysql_fetch_array(mysql_query('select username,password,email from member where id="' . $this->session->userdata('userid') . '"'));
            $username = htmlentities($query['username'], ENT_QUOTES, 'UTF-8');
            $password = htmlentities($query['password'], ENT_QUOTES, 'UTF-8');
            $email = htmlentities($query['email'], ENT_QUOTES, 'UTF-8');
?>
    
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-9">
            <div class="well well-small">
                <center><h3><span class="label label-default">Update Information</span></h3></center>
	<?php
		$formattributes = array('class' => 'form-horizontal', 'role' => 'form');
		echo form_open('main/signup_validate',$formattributes);
	?>
        
  		<br />
  		<div class="form-group">
    		<label for="inputEmail" class="col-sm-3 control-label">Email Address &nbsp;&nbsp;</label>
    		<div class="col-sm-7">
      		<label for="inputUsername" class="col-sm-3 control-label"> <?php echo $email; ?>&nbsp;&nbsp;</label>
                </div>
  		</div>
  	
                
  		<div class="form-group">
    		<label for="inputUsername" class="col-sm-3 control-label">User Name &nbsp;&nbsp;</label>
    		  <div class="col-sm-7">
      			<?php
      				$usernameattributes = array('class' => 'form-control','name'=>'username');
      				echo form_input($usernameattributes,$this->input->post('username'));
					if(form_error('username')!=null)
						echo '<div class="alert alert-danger">'.form_error('username').'</div>';
      			?>
    		  </div>
  		</div>

                <br />

                <div class="form-group">
    		<label for="inputPassword" class="col-sm-3 control-label">Password&nbsp;&nbsp;</label>
    		<div class="col-sm-7">
      			<?php
      				$passwordattributes = array('class' => 'form-control','name'=>'password');
      				echo form_password($passwordattributes);
					if(form_error('password')!=null)
						echo '<div class="alert alert-danger">'.form_error('password').'</div>';
      			?>
    		</div>
  		</div>

                <br />

                <div class="form-group">
    		<label for="inputConfirmPassword" class="col-sm-3 control-label">Confirm Password&nbsp;&nbsp;</label>
    		<div class="col-sm-7">
      			<?php
      				$confirmpasswordattributes = array('class' => 'form-control','name'=>'confirmpassword');
      				echo form_password($confirmpasswordattributes);
					if(form_error('confirmpassword')!=null)
						echo '<div class="alert alert-danger">'.form_error('confirmpassword').'</div>';
      			?>
    		</div>
  		</div>
  		<br />
                
         	<div class="form-group">
    		<div class="col-sm-offset-7 col-sm-5">
      		
      			<?php
      				$attributes = array('class' => 'btn btn-primary','name'=>'Submit','value'=>'Update');
				echo form_submit($attributes);
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
