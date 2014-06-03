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
  
  
</head>
 
<body>
  <div class="container">
    
   <table class="table table-striped">
   
   
      <thead>
        <tr>
         <th> </th>   
         <th>Project ID</th>
 
          <th>User Story</th>
 
          <th>Description</th>
 
          <th>Iteration</th>
          <th>Plan Estimation</th>
          <th>Owner Email</th>
          <th>Status</th>
        </tr>
       
      </thead>
 
      <tbody>
        
        
                <?php
            

 
                foreach ($userStory_qry ->result() as $story){
                
                
 
            
                // Print out the contents of the entry 
                
                echo '<tr class="'.$story->u_status.'">';
                
                echo'<td><nobr>'. 
                    anchor('Main/edit/' . $story->StoryId, 'edit') . ' | ' .
                    anchor('Main/delete/' . $story->StoryId, 'delete', "onClick=\" return confirm('Are you sure you want to '
            + 'delete the record for $story->StoryId?')\"") . ' | ' .
                    anchor('Main/add_task/' . $story->StoryId, 'add tasks') .
                    '</nobr></td>';
                
                echo '<td>' . $story->ProjectId. '</td>';
                echo '<td>' . $story->name . '</td>';
                echo '<td>' . $story->Description . '</td>';
                echo '<td>' . $story->IterationId . '</td>';
                echo '<td>' . $story->PlanEst . '</td>';
                
                echo '<td>' . mailto($story->OwnerEmail) . '</td>';
                echo '<td>' . $story->u_status . '</td>';
                }
                ?>
                
           
      </tbody>
 
      <tbody></tbody>
    </table>
      
      
         
      
  </div>
    <!-- /container -->
    
</body>
</html>


