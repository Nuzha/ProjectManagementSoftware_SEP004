 <script type="text/javascript">
    $(document).ready(function() {
            $('#popy').popover({
               
                placement: "bottom",
                
                title: "Create Iteration",
                });
        });   
  </script>
  
<!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script>
$(document).ready(function(){
  $("but").click(function(){
    $("div.col-md-offset-2").slideToggle();
  });
});
</script>-->
        
   
       <div class="container">
          <div class="col-lg-offset-9  ">
              <h4>Project Details</h4>
              
              <table>
                  <td>
                  <tr>Project Name:</tr>
                  <tr><?php echo $project_name; ?></tr>
                  </td>
                  <td>
                  <tr>Start Date</tr>
                  <tr><?php echo $start_date;  ?></tr>
                  </td>
                  
                  <td>
                  <tr>End Date</tr>
                  <tr><?php echo $end_date; ?></tr>
                  </td>
              </table>
          </div>
	<div class="col-md-7 col-md-offset-2">
             
			
            <script>      
                $(this.document).ready(function(){
                $(".datepicker").datepicker({
                format: "mm-dd-yyyy"

                });
                }); </script>

                                
                                
                                
                                <?php
                            $formattributes = array('class' => 'form-horizontal', 'role' => 'form', 'id'=>'tryitForm');
                            echo form_open('main/create_validate', $formattributes);
                            ?>
                                <div class="form-group">
                                <label for="iterationName" class="control-label">Iteration Name </label>
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
                                <label for="start_date" class="control-label">Start Date </label>
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
                                <label for="end_date" class="control-label">End Date </label>
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
                                  
                         </div>
                             
                             

                