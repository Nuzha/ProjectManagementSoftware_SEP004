<!DOCTYPE html>
 
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="author">
  <link href="" rel="shortcut icon">
 
  <title>List of Iterations</title><!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  
<script>
    

    $(document).ready(function() {
            $('#example').popover({
               
                placement: "bottom",
                
                title: "Discussion Forum",
                });
        });
  </script>
</head>
 
<body>
  <div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
         <th>Project ID</th>
 
          <th>Iteration Name</th>
 
          <th>Start Date</th>
 
          <th>End Date</th>
          <th>Status</th>
        </tr>
      </thead>
 
      <tbody>
        <?php
            

 
            foreach ($it_qry ->result() as $col) {
                // Print out the contents of the entry 
                echo '<tr class="'.$col->i_status.'">';
                
                echo '<td>' . $col->ProjectId . '</td>';
                echo '<td>' . $col->i_name . '</td>';
                echo '<td>' . $col->i_start_date . '</td>';
                echo '<td>' . $col->i_end_date . '</td>';
                echo '<td>'.'<a href = "#u_status" data-toggle="modal">' . $col->i_status . '</a>'.'</td>';
            }
            ?>      
 
      </tbody>
 
      <tbody></tbody>
    </table>
      
               <div class = "modal fade" id = "u_status">
                                            <div class = "modal-dialog">
                                                <div class = "modal-content">
                                                    <div class = "modal-header">
                                                        <p><b>Change User Story Status</b></p>
                                                    </div>
                                                    <div class = "modal-body">
                                                        
                                                        <?php
                                                        $formattributes = array('class' => 'form-horizontal', 'role' => 'form');
                                                        echo form_open('s_dev_iteration/update_u_status', $formattributes);
                                                        
                                                        
                                                        $dd_list = array(
                                                                        'sucess'   => 'success',
                                                                        'active'   => 'active',
                                                                        'warning'   => 'warning',
                                                                      );
                                                            echo form_dropdown('status', $dd_list,$col->i_status); 
                                                            
                                                                                                   ?>

                                                   
                                                        
                                                        
                                                    
                                                    
                                                    <div class = "modal-footer">
                                                        <a class ="btn btn-default" href="#test" data-dismiss= "modal">Submit</a>
                                                        <a class ="btn btn-primary" data-dismiss = "modal">Close</a>
                                                    </div>
                                                     <?php   echo form_close();?>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
  </div><!-- /container -->
</body>
</html>
