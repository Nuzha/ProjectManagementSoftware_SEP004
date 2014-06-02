   






        
<div class="col-md-7 col-md-offset-2"> 

 

<!--<script type="text/javascript">
    $(function() {
            $('#popy').popover({
               
                placement: "bottom",
                
                title: "Create Iteration",
                });
        });   
  </script>-->
  
<!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script>
$(document).ready(function(){
  $("but").click(function(){
    $("div.col-md-offset-2").slideToggle();
  });
});
</script>-->
        
   
     
   

                                
                                
                                
                                <?php
                            $formattributes = array('class' => 'form-horizontal', 'role' => 'form', 'id'=>'tryitForm');
                            echo form_open('main/createIteration', $formattributes);
                            ?>
                                <div class="form-group">
                                <label for="iterationName" class="control-label">&nbsp;&nbsp; Iteration Name </label>
                                <div class="col-sm-11">
                                <?php
                                $iterationattributes = array('class' => 'form-control', 'name' => 'iterationname');
                                echo form_input($iterationattributes, $this->input->post('iterationname'));
                                if (form_error('iterationname') != null)
                                    echo '<div class="alert alert-danger">' . form_error('iterationname') . '</div>';
                                ?>
                                </div>
                                </div>
                                
                                
                                 <div class="form-group">
                                <label for="start_date" class="control-label">&nbsp;&nbsp; Start Date </label>
                                <div class="col-sm-11">
                                <?php
                                $StartDateattributes = array('class' => 'datepicker', 'name' => 'I_start_date', 'id'=>'dp1');
                                echo form_input($StartDateattributes, $this->input->post('I_start_date'));
                                if (form_error('I_start_date') != null)
                                    echo '<div class="alert alert-danger">' . form_error('I_start_date') . '</div>';
                                ?>
                                </div>
                                </div>
                              
                                
                                 <div class="form-group">
                                <label for="end_date" class="control-label">&nbsp;&nbsp; End Date </label>
                                <div class="col-sm-11">
                                <?php
                                $EndDateattributes = array('class' => 'datepicker', 'name' => 'I_end_date', 'id'=>'dp2');
                                echo form_input($EndDateattributes, $this->input->post('I_end_date'));
                                if (form_error('I_end_date') != null)
                                    echo '<div class="alert alert-danger">' . form_error('I_end_date') . '</div>';
                                ?>
                                </div>
                                </div>
                                
                                
                                <div class="form-group">
                                <div class="col-sm-offset-1">
                                <?php
                                $clearbtnattributes = array('class' => 'btn btn-default', 'name' => 'clear', 'value' => 'Clear', 'type' => 'reset', 'content' => 'Clear', 'data-toggle' => 'tooltip', 'data-original-title' => 'this button will reset all the values in the text feilds');
                                echo form_button($clearbtnattributes);
                                ?>
                                &nbsp;
                                <?php
                                $registerbtnattributes = array('class' => 'btn btn-primary', 'name' => 'create_iteration_submit', 'value' => 'create iteration');
                                echo form_submit($registerbtnattributes);
                                ?>
                                </div>
                                </div>

                                <?php
                                echo form_close();
                                ?>
                               
                    
</div>                       

                