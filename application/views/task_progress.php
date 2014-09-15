<div id="page-wrapper">
    <div class="row">
        <h3><center><span class="label label-default"> Task Sheet </span></center></h3>
        <table class="table table-striped">
           <?php $sql1="select UStory_Id from add_task where T_pid='5'";
           mysql_query($sql1);
           
           
           
           
           ?>

            <thead>
                <tr>
                    <th>Task Name</th>

                    <th> Task Description</th>
                    <th> Task Status </th>

                </tr>

            </thead>

            <tbody>
              <?php
                foreach ($task_qry->result() as $task):
        
?>
                
                <?php endforeach; ?>
