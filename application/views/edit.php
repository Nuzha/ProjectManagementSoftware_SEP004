

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-11">
            <?php
            //otherwise, we display the values of the database
            $query = mysql_fetch_array(mysql_query('select username,password,email from member where id="' . $this->session->userdata('userid') . '"'));
            $username = htmlentities($query['username'], ENT_QUOTES, 'UTF-8');
            $password = htmlentities($query['password'], ENT_QUOTES, 'UTF-8');
            $email = htmlentities($query['email'], ENT_QUOTES, 'UTF-8');
            ?>

            <div class="container">
                <div class="col-md-8 col-md-offset-1 center">
                    <div class="well well-large">  

                        <?php echo validation_errors(); ?>
                        <?php echo form_open('msg/update_details'); ?>

                        <b>You can edit your personal information</b><br /> <br>
                        <div class="center">
                            <label for="username">Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" name="username" id="username" value="<?php echo $username; ?>" /><br /><br>
                            
                            <label for="password">Password <span class="small">(6 characters min.)&nbsp;&nbsp;&nbsp; </span></label>
                            <input type="password" name="password" id="password" value="" /><br /><br>
                            
                            <label for="passverif">Password <span class="small">(verification)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></label><input type="password" name="repassword" id="passverif" value="" /><br /><br>
                            <label for="email">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" disabled name="email" id="email" value="<?php echo $email; ?>" /><br /><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          
                            <?php
                            $attributes = array('class' => 'btn btn-primary', 'name' => 'Submit', 'value' => 'Update');
                            echo form_submit($attributes);
                            ?>
            
                            <?php
                            echo form_close();
                            ?>   
                        <a class="btn btn-warning"  href="<?php echo base_url() . 'main/show_profile'; ?>">back to your profile</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
