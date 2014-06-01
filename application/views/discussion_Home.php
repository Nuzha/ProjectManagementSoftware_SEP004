
<div class="col-md-7 col-md-offset-2">
    <div class="panel panel-default ">

        <?php
        //Create the query
       
        
        $sql = "SELECT `dis_id`,`dis_topic`, `category`, `discription` FROM discussion";

        //Run the query
        $query_resource = mysql_query($sql);

        //Iterate over the results that you've gotten from the database (hopefully MySQL)
        while ($project = mysql_fetch_assoc($query_resource)):
             $id=$project['dis_id'];
            ?>
           
        <a href="<?php echo base_url()."c_discuss/select_topic/$id" ?>" id="<?php echo $project['dis_id']; ?>"  class="bg-success" onclick=""><h4><?php echo $project['dis_topic']; ?>?</h4></a>
            
            
        <label style="font-size: small"id="<?php echo $project['dis_id']; ?>"  class="col-md-7"><?php echo $project['discription']; ?></label><br />

        <?php endwhile; ?>



        <br>
    </div>
            
        </div>


