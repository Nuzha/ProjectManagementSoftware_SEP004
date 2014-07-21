<div id="page-wrapper">

    <div class="row">
        <div class="panel panel-default ">
            <div class="panel panel-primary">
                <h3>On Going Changes</h3>



            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h5>User Story Updates</h5>
                </div>

                <div class="panel-body">


                    <!--                        <label class='label label-success'>Available Projects:</label>-->

                    <?php
                    $mail = $this->session->userdata['email'];
                    //echo $mail;
                    $sql = "select user_stories.StoryId as tit,user_stories.name as con,userstory_audit.changetype as type from userstory_audit,user_stories where user_stories.StoryId=userstory_audit.u_id ";
                    $userStory_qry = mysql_query($sql);
                        if(mysql_num_rows($userStory_qry)== 0){ ?>
                           <pre><span style="color: red">There are no user story updates</span> </pre>
                        <?php }
                        else{
                    
                        while ($story = mysql_fetch_assoc($userStory_qry)) {
                            ?>

                            <pre><span style="color: red"><?php echo $story['type'] ?></span>   <span style="color: #0088cc"><?php echo $story['tit'] ?></span>  <span style="color: #00620C"><?php echo $story['con'] ?></span> </pre>
                            <br>


                            <?php
                        }

                        $sql3 = "DELETE FROM `userstory_audit`";
                        mysql_query($sql3);
                        }
                    
                        ?>
                    
                    








                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h5>Defect Updates</h5>
                </div>

                <div class="panel-body">


                    <!--                        <label class='label label-success'>Available Projects:</label>-->

                    <?php
                    $mail = $this->session->userdata['email'];
                    //echo $mail;
                    $sql1 = "select defect_log.defect_id as tit,defect_log.defect_des as con,defect_audit.changetype as type from defect_audit,defect_log where defect_log.defect_id=defect_audit.d_id ";
                    $userStory_qry1 = mysql_query($sql1);
                        if(mysql_num_rows($userStory_qry1)== 0){ ?>
                           <pre><span style="color: red">There are no defect updates</span> </pre>
                        <?php }
                        else{
                    
                        while ($story1 = mysql_fetch_assoc($userStory_qry1)) {
                            ?>

                            <pre><span style="color: red"><?php echo $story1['type'] ?></span>   <span style="color: #0088cc"><?php echo $story1['tit'] ?></span>  <span style="color: #00620C"><?php echo $story1['con'] ?></span> </pre>
                            <br>


                            <?php
                        }

                        $sql2 = "DELETE FROM `defect_audit`";
                        mysql_query($sql2);
                        }
                    
                        ?>
                    
                    








                </div>
            </div>
        </div>
    </div>
</div>
