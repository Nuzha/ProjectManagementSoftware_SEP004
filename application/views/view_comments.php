<div class="container">

<div class="col-md-7 col-md-offset-2">
    <div class="panel panel-default ">
		
                    	<div class="panel-heading">
                             <?php $username=$this->session->userdata['USERNAME']; ?>
                            <?php
                            $sql = "SELECT `dis_topic` FROM discussion WHERE `dis_id`=$result";
                            $query_resource= mysql_query($sql);
                            $topic=  mysql_fetch_assoc($query_resource);
                            ?>
                            
                            <center><h3 class="panel-title"><strong><?php echo $topic['dis_topic'];  ?></strong></h3></center>
    		</div>
                            <?php
                    //Create the query
                    
                    $sql2="SELECT `comment`, `comment_username` FROM comment WHERE `dis_id`=$result";
                    //Run the query
                    $query_resource = mysql_query($sql2);
                    

                    //Iterate over the results that you've gotten from the database (hopefully MySQL)
                    while ($comments = mysql_fetch_assoc($query_resource)):
                       
                        ?>

                        <a href="" id="<?php echo $comments['comment_username']; ?>"  class="bg-success" onclick=""><b><?php echo $comments['comment_username']; ?>:</b></a>


                        <label   class=""><?php echo $comments['comment']; ?></label><br />
                        

                    <?php endwhile; ?>

                        
   
    
                     

                    
                    
		
    
    
