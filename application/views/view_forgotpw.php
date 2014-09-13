<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>

        <link href="<?php echo base_url() . 'css/bootstrap.min.css' ?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/bootstrap.css' ?>" rel="stylesheet">
        <script src="<?= base_url();?>js/jquery.js"></script>
        <script src = "<?php echo base_url() . 'js/jquery-1.4.2.min.css' ?>"></script>
    </head>

    <!--Navigation bar-->
            <div class = "navbar navbar-inverse navbar-static-top">
                <div class = "container">

                    <div class="navbar-brand"><h4 style="color: white">Agile Project Management Software</h4></div>
                    <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                </div>
            </div>
        
            <br>
        
            
        
     <form class="form-horizontal" role="form" action='<?= base_url();?>c_forgotpw/send_pw_email' method="post">

            <div class="container">

                <div class="col-md-6 col-md-offset-2">  
                    <h2 class="form-signin-heading">Please enter your Email address</h2>

                    <div class="panel panel-default ">
                        <div class="panel-body"> 

                         <?php
                            echo form_open('c_forgotpw/send_pw_email');
                            echo validation_errors();?>
                
                            <fieldset>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>

                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-md-6 col-md-offset-2"> 
                                        <?php
      				$registerbtnattributes = array('class' => 'btn btn-primary','name'=>'Submit','value'=>'Submit');
					echo form_submit($registerbtnattributes);
      			?>
      
                                       <!--<button type="submit" class="btn btn-success">Sign In</button>-->
                                        
<!--                                       <a class="btn btn-primary" href="<?php echo base_url() . 'c_forgotpw/send_pw_email';?>"> Submit </a>-->
                                                                               
                                    </div>

                                    <?php
                                     echo form_close();
                                     ?>
                                </div>    
                            </fieldset>	
                        </div>
                    </div>
                </div>
            </div>
         
         <div class = "navbar navbar-inverse navbar-fixed-bottom">
                    <div class = "container">
                        <p class = "navbar-text pull-left">Site Built by Curtin SEP-004</p>
                    </div>
        </div>
                
        </form>	
    </body>

</html>