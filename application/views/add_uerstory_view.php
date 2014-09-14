<div id="page-wrapper">
<div class="row">
<div class="col-lg-8">
        <h3>Backlog</h3>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            You can create your project backlog by adding new user stories.
        </div>

        <div class="panel panel-default ">
            <div class="panel-heading">
                <center><h3 class="panel-title"><strong>Add User Story To Backlog</strong></h3></center>
            </div>

            <div class="panel-body">


                <?php $this->load->helper('form'); ?>
                <div>
                    <?php
                    echo form_open('Main/create');
                   // echo validation_errors();
                    ?>


                    <div class="form-group">
                        <label >Project name:  </label>
                        <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $this->session->userdata('project_name') ?>" disabled>

                    </div>



                    <div  class="form-group">
                        <label >User Story: </label>
                        <input class="form-control" type="text" name="user_story" id="user_story" value="" size="30" />
                        <?php 
                            if(form_error('user_story')!=null)
                            {echo '<div class="alert alert-danger">'.form_error('user_story').'</div>';}?>
                    </div>


                    <div class="form-group" >
                        <label >Description: </label>
                        <br>
                        <textarea class="form-control" name="description" id="description" value="" cols="60" rows="4"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="email">Owner e-mail: </label>
                        <?php
                        if ($email_list == null) {

                            $mail_notice = 'New Project. No members assigned yet.';
                            echo'<span class="glyphicon glyphicon-info-sign" style="color:red"> ' . $mail_notice . '</span>';
                        } else {
                            echo form_dropdown('email', $email_list, '', 'class="form-control"');
                        }
                        ?>
                    </div>


                    <div class="form-group">
                        <label for="email">Iteration Id: </label>
                        <?php
                        if ($iteration_list == null) {
                            $iteration_notice = 'New Project. No iterations created yet.';
                            echo'<span class="glyphicon glyphicon-info-sign" style="color:red"> ' . $iteration_notice . '</span>';
                        } else {
                            echo form_dropdown('iteration', $iteration_list, '', 'class="form-control"');
                        }
                        ?>
                    </div>



                    <div class="form-group">
                        <label for="plan">Estimation Points :</label>
                        <?php
                        $options = array(
                            '0'=>'0',
                            '1' => '1',
                            '2' => '2',
                            '3' => '3',
                            '5' => '5',
                            '8' => '8',
                            '13' => '13',
                            '21' => '21',
                        );
                        echo form_dropdown('plan_estimation', $options, '', 'class="form-control"');
                        ?>
<!--                        <input class="form-control" type="text"	name="plan_estimation" id="plan_estimation" /><span class="input-group-addon">Pts</span>-->
                    </div>




                    <div class="form-group">
                        <input class = 'btn btn-success' type='submit' value="create user story"/>
                        <?php echo form_close(); ?>
                    </div>

                </div>

            </div>
        </div>
</div>
        
        
</div>
    
    
</div>
