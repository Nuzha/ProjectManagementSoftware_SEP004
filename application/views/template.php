
<div class="navigation">
<center><?php 
  // nav bar
  echo anchor('Main/userStory', 'Add User Story');
  echo (' | ');
  
  echo anchor('scrum_master/UserStorylisting', 'List All User Stories');
?></center>
</div>



    <h3><strong><?php echo $headline;?></strong></h3>

<?php $this->load->view($include);?>

</body>
</html>
