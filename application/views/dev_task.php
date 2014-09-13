<div id="page-wrapper">
    <div class="row">
        <h3><center><span class="label label-default"> Task Sheet </span></center></h3>
        <table class="table table-striped">

            <thead>
                <tr>
                    <th>Task Name</th>

                    <th> Task Description</th>

                </tr>

            </thead>

            <tbody>
              <?php
                foreach ($task_qry->result() as $task):
                   
                    // Print out the contents of the entry 
                    echo '<tr "class="table table-striped">';

                    echo '<td>' . $task->T_name . '</td>';
                    echo '<td>' . $task->T_Description. '</td>';
                    
                    echo '<td>' . '<a href = "#defect_stat_' . $task->Task_Id . '" data-toggle="modal" >' . $task->T_status . '</a>' . '</td>';
                    ?>    
                    <!--                ------------------------------------------------------------------------------------------------------------>
                <div class = "modal fade" id ="defect_stat_<?php echo $task->Task_Id; ?>" >
                    <div class = "modal-dialog">
                        <div class = "modal-content">
                            <div class = "modal-header">
                                <p><b>Change Task Status</b></p>
                            </div>
                            <div class = "modal-body" > 

    <?php
    $id = $task->Task_Id;

    $formattributes = array('class' => 'form-horizontal', 'role' => 'form');
    echo form_open('s_dev_iteration/update_task_status', $formattributes);
    ?>

                                <div class="form-group">
                                    <div class="col-md-2"> 
                                        Task ID
                                    </div>
                                    <div class="col-md-3">  
                                <?php
                                $discussionattributes = array('class' => 'form-control', 'name' => 'ID', 'value' => $id);
                                echo form_input($discussionattributes, $this->input->post('discussion'));
                                ?>


                                    </div>
                                    <div class="col-md-4"> 

                                        <?php
                                        echo '<select class="form-control" name="category">
                                                                    <option value="Defined">Defined</option>
                                                                    <option value="Active">Active</option>
                                                                    <option value="Testing">Testing</option>
                                                                    <option value="Success">Success</option>
                                                                    </select> ';
                                        ?>  
                                    </div>
                                </div>





                                <div class = "modal-footer">
                                        <?php
                                        $registerbtnattributes = array('class' => 'btn btn-primary', 'name' => 's_submit', 'value' => 'submit');
                                        echo form_submit($registerbtnattributes);
                                        ?>

    <?php
    echo form_close();
    ?>
                                    <a class ="btn btn-primary" data-dismiss = "modal">Close</a>
                                </div>
                                </form>
                            </div>    
                        </div>
                    </div>
                </div> 

                <!--                -------------------------------------------------------------------------------------------------------------->

<?php 
       $this->session->set_userdata('tu_id',$task->UStory_Id);
       endforeach; ?>      

            </tbody>

            <tbody></tbody>
        </table>




    </div>
    <!-- /container -->

</body>
</html>


                
            </tbody>
        </table>



    </div>
</div>

  
   



