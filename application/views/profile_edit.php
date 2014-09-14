<div id="page-wrapper">
<div class="row">
<div class="col-lg-8">
        <h3>Edit Profile</h3>
        

        <div class="panel panel-default ">
            <div class="panel-heading">
                <center><h3 class="panel-title"><strong>Profile Details</strong></h3></center>
            </div>

            <div class="panel-body">


                <?php $this->load->helper('form'); ?>
                <div>
                    <?php
                    echo form_open('Main/create');
                    echo validation_errors();
                    ?>
                    <?php
                     foreach ($user_data as $data):
                       
                    
                    ?>

                    <div class="form-group">
                        <label >Full Name:  </label>
                       <?php
					$projectnameattributes = array('class' => 'form-control','name'=>'fullname', 'placeholder'=>'');
      				echo form_input($projectnameattributes,$data->Full_name);
					
      			?>

                    </div>



                    <div  class="form-group">
                        <label >User Name: </label>
                       <?php
					$projectnameattributes = array('class' => 'form-control','name'=>'username', 'placeholder'=>'');
      				echo form_input($projectnameattributes,$data->username);
					
      			?>

                    </div>


                    <div class="form-group" >
                        <label >E mail: </label>
                        <br>
                       <?php
					$projectnameattributes = array('class' => 'form-control','name'=>'email', 'placeholder'=>'','disabled'=>'true');
      				echo form_input($projectnameattributes,$data->email);
					
      			?>

                    </div>


                    <div class="form-group">
                        <label for="email">Type: </label>
                      <?php
					$projectnameattributes = array('class' => 'form-control','name'=>'type', 'placeholder'=>'','disabled'=>'true');
      				echo form_input($projectnameattributes,$data->type);
					
      			?>
                    </div>
                    <?php endforeach; ?>
                     <div class="form-group">
                        <label for="email">Enter New Password: </label>
                      <?php
					$projectnameattributes = array('class' => 'form-control','name'=>'password', 'placeholder'=>'','disabled'=>'true');
      				echo form_input($projectnameattributes,$data->type);
					
      			?>
                    </div>
                     <div class="form-group">
                        <label for="email">Confirm Password: </label>
                      <?php
					$projectnameattributes = array('class' => 'form-control','name'=>'c_password', 'placeholder'=>'','disabled'=>'true');
      				echo form_input($projectnameattributes,$data->type);
					
      			?>
                    </div>
                    <div class="form-group">
                        <input class = 'btn btn-success' type='submit' value="Update"/>
                        <?php echo form_close(); ?>
                    </div>

                </div>

            </div>
        </div>
</div>
        
        
</div>
    
    
</div>
