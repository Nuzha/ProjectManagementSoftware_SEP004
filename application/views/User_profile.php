<div class="container">
	<div class="col-md-7 col-md-offset-2">
		<div class="panel panel-default ">
                    <div class="panel-heading">
                        <h4><?php echo $this->session->userdata('USERNAME');  ?> Profile Details</h4>
                    </div>
                     <div class="panel-body"> 
                         
                         <table class="table table-striped">
                             <?php
                             foreach ($profile->result() as $col):
   
                             ?>
                             <tr>
                                 <td>
                                     <img src="http://localhost/ProjectManagementSoftware_SEP004/uploads/<?php echo $col->img_path?>"  width="100" height="100">
                                 </td>
                             </tr>
                             <tr>
                                 <td><h4>Full Name</h4></td>
                                 <?php 
                                     echo '<td>' . $col->Full_name . '</td>';
                                 ?>
                                 
                             </tr>
                              <tr>
                                 <td><h4>User Name</h4></td>
                                 <?php 
                                     echo '<td>' . $col->username . '</td>';
                                 ?>
                                 
                             </tr>
                              <tr>
                                 <td><h4>E mail</h4></td>
                                 <?php 
                                     echo '<td>' . $col->email . '</td>';
                                 ?>
                                 
                             </tr>
                             <tr>
                                 <td><h4>Type</h4></td>
                                 <?php 
                                     echo '<td>' . $col->type . '</td>';
                                 ?>
                                 
                             </tr>
                             
                              <tr>
                                 <td><h4>Sign Up Date</h4></td>
                                 <?php 
                                     echo '<td>' . $col->signup_date . '</td>';
                                 ?>
                                 
                             </tr>
                             <?php endforeach;?>   
                         </table>
                         
                     </div>
                </div>
            
        </div>
    
</div>
