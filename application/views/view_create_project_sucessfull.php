
   <div id="workingspace" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 

<div class="alert alert-success">
    <h3 class="panel-title"><strong>Your Project have been created</strong></h3>
    <a href="<?php echo base_url()."main/create_new_project" ?>">create a new project </a>
    
    </br>
    <?php
    echo anchor('main/project_listing', 'List All created projects');
    ?>
    </div>
   </div>
</body>
</html>