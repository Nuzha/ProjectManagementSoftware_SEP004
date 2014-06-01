
 <?php
                     
		$formattributes = array('class' => 'form-horizontal', 'role' => 'form');
		echo form_open('c_discuss/save_comment',$formattributes);
	?>
                          <div class="form-group">
                              <div class="col-sm-5 ">
                                
                        <a href="" class="bg-success"><b>  <?php echo $this->session->userdata['USERNAME'] ?>:</b></a>
                              </div>
                          </div>
    		<div class="form-group">
    		<div class="col-sm-9">
      			<?php
      				$commentattributes = array('class' => 'form-control','name'=>'comment','value'=>'Enter Your Answer Here.....');
      				echo form_textarea($commentattributes,$this->input->post('comment'));
					if(form_error('comment')!=null)
						echo '<div class="alert alert-danger">'.form_error('comment').'</div>';
      			?>
                    
                    
                </div>  
    		</div>
                          
                          <div class="form-group">
    		<div class="col-sm-offset-7 col-sm-5">
      			<?php
      				$clearbtnattributes = array('class' => 'btn btn-default','name'=>'clear','value'=>'Clear','type'=>'reset','content'=>'Clear','data-toggle'=>'tooltip', 'data-original-title'=>'this button will reset all the values in the text feilds');
      				echo form_button($clearbtnattributes);
      			?>
      			&nbsp;
      			<?php
      				$registerbtnattributes = array('class' => 'btn btn-primary','name'=>'comment_submit','value'=>'Answer');
					echo form_submit($registerbtnattributes);
      			?>
    		</div>
  		</div>
  		
  		<?php
  			echo form_close();
  		?>

</div>
</div>