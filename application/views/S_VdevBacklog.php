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
         <th>Project ID</th>
 
          <th>User Story</th>
 
          <th>Description</th>
 
          <th>Iteration</th>
          <th>Plan Estimation</th>
          <th>Status</th>
          <th>Owner Email</th>
        </tr>
       
      </thead>
 
      <tbody>
        <?php
            
            

 
            foreach ($userStory_qry ->result() as $story) {
                // Print out the contents of the entry 
                echo '<tr class="'.$story->u_status.'">';
                
                echo '<td>' . $story->ProjectId. '</td>';
                echo '<td>' . $story->name . '</td>';
                echo '<td>' . $story->Description . '</td>';
                echo '<td>' . $story->IterationId . '</td>';
                echo '<td>' . $story->PlanEst . '</td>';
                echo '<td>' . $story->u_status . '</td>';
                echo '<td>' . mailto($story->OwnerEmail) . '</td>';
            }
            ?>      
 
      </tbody>
 
      <tbody></tbody>
    </table>
  </div><!-- /container -->
</body>
</html>

