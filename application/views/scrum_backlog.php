<div id="page-wrapper">
    <div class="row">
        <?php echo form_open('scrum_master/change_priority'); ?>
        <div class="form-group">
    	       <input class = 'btn btn-success' type='submit' value="change priority"/>
        </div>
         <?php echo form_close(); ?>
    </div>
    <div class="row">
        
        <div class="col-lg-12">
        <h3><center> <span class="label label-default">List of User Stories</span></center></h3>
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
                    foreach ($userStory_qry->result() as $story) {
                        // Print out the contents of the entry 
                        echo '<tr class="' . $story->u_status . '">';
                        echo'<td><nobr>' .
                        anchor('Main/edit/' . $story->StoryId, 'edit') . ' | ' .
                        anchor('Main/delete/' . $story->StoryId, 'delete', "onClick=\" return confirm('Are you sure you want to '
            + 'delete the record for $story->StoryId?')\"") . ' | ' .
                        anchor('Main/add_task/' . $story->StoryId, 'add tasks') .
                        '</nobr></td>';
                        echo '<td>' . $story->ProjectId . '</td>';
                        echo '<td>' . $story->name . '</td>';
                        echo '<td>' . $story->Description . '</td>';
                        echo '<td>' . $story->IterationId . '</td>';
                        echo '<td>' . $story->PlanEst . '</td>';
                        echo '<td>' . mailto($story->OwnerEmail) . '</td>';
                        echo '<td>' . $story->u_status . '</td>';
                    }
                    ?>
                </tbody>
                
          </table>


        </div>
    </div>
    </div>
<!--</div>-->
<!-- /container -->



