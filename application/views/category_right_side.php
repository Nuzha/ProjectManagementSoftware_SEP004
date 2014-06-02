 



<script>
    

    $(document).ready(function() {
            $('#example').popover({
               
                placement: "bottom",
                
                title: "Discussion Forum",
                });
        });
  </script>
<script>
$(document).ready(function() {
    $('#discussion_form').bootstrapValidator({
        fields: {
            discussion: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            discription: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            
        },
       
    });
});
</script>




<div class="col-lg-offset-9  ">
                    <div class="">
                       
                            <ul id="rightsidemenu" >
                                
<!-- -----------------------------------------------------creating discuss topic popover------------------------------------------------------------------------------------------------------------------------->
                                
                                  <a  data-html="true "id="example" class="btn btn-success" data-content='<?php
                                    $formattributes = array('class' => 'form-horizontal', 'role' => 'form');
                                    echo form_open('c_discuss/discuss_validate',$formattributes);?>
                                      
                                   <div class="form-group">
                                    <label for="topic" class="control-label">Discussion Topic &nbsp;&nbsp;</label>
                                    <div class="col-sm-11">  
                                    <?php
					$discussionattributes = array('class' => 'form-control','name'=>'discussion');
      				echo form_input($discussionattributes,$this->input->post('discussion'));
					if(form_error('discussion')!=null)
						echo '<div class="alert alert-danger">'.form_error('discussion').'</div>';
      			?>
                                </div>
                                </div>
                               
                                
                                
                                <div class="form-group">
    		<label for="Category" class="control-label">Category &nbsp;&nbsp;</label>
    		<div class="col-sm-11">
                <?php
      			echo '<select class="form-control" name="category">
                        <option value="general">General</option>
                        <option value="bugs">Bugs</option>
                        <option value="other">Other</option>
                        </select> '
                    
                  ?>  
    		</div>
           
                
                
       

  		</div>
                
                 <div class="form-group">
    		<label for="Discription" class="control-label">Discription &nbsp;&nbsp;</label>
    		<div class="col-sm-11">
      			<?php
      				$Discriptionattributes = array('class' => 'form-control','name'=>'discription');
      				echo form_textarea($Discriptionattributes,$this->input->post('discription'));
					if(form_error('discription')!=null)
						echo '<div class="alert alert-danger">'.form_error('discription').'</div>';
      			?>
                    
                    
    		</div>
           
                
                
       

  		</div>
                
                <div class="form-group">
    		<div class="col-sm-offset-1">
      			<?php
      				$clearbtnattributes = array('class' => 'btn btn-default','name'=>'clear','value'=>'Clear','type'=>'reset','content'=>'Clear','data-toggle'=>'tooltip', 'data-original-title'=>'this button will reset all the values in the text feilds');
      				echo form_button($clearbtnattributes);
      			?>
      			&nbsp;
      			<?php
      				$registerbtnattributes = array('class' => 'btn btn-primary','name'=>'discription_submit','value'=>'Post');
					echo form_submit($registerbtnattributes);
      			?>
    		</div>
  		</div>
                                      
                                      
                                      
                                      ' >+Create a Discussion Topic</a></center>
                                  
                                  
                                  
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                <br>
                                <div class="" >
                                <p class="h5"><b>Discussion Categories</b></p>
                                <li><a class ="active" href ='<?php echo base_url()."c_discuss/view_discuss/general" ?>'>--------------General-------------</a></li><br>
                                <li><a class ="menuItem" href ='<?php echo base_url()."c_discuss/view_discuss/bugs" ?>'>---------------Bugs---</a></li><br>
                                <li><a class ="menuItem" href ='<?php echo base_url()."c_discuss/view_discuss/other" ?>'>---------------Other---</a></li><br>
                                <li><a  class ="menuItem" href ='<?php echo base_url()."c_discuss/view_discuss/general" ?>'>----------Projects problem---</a></li>
                                
                                </div>
                            </ul>
                        
                       
                    </div>
  </div>

         
		    <div class = "modal fade" id = "members">
                                            <div class = "modal-dialog">
                                                <div class = "modal-content">
                                                    <div class = "modal-header">
                                                        <p><b>Project Assign Members</b></p>
                                                    </div>
                                                    <div class = "modal-body">
                                                   
                                                        
                                                        
<!--                                                       ------------------------------------------------------>
                                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
<!--                                                       ------------------------------------------------------->
                                                    </div>
                                                    <div class = "modal-footer">
                                                        <a class ="btn btn-default" href="#test" data-dismiss= "modal">Submit</a>
                                                        <a class ="btn btn-primary" data-dismiss = "modal">Close</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>