<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>

        <link href="<?php echo base_url() . 'css/bootstrap.min.css' ?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/bootstrap.css' ?>" rel="stylesheet">
        <script src="<?= base_url(); ?>js/jquery.js"></script>
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

    <form class="form-horizontal" role="form" action='<?= base_url(); ?>c_forgotpw/send_pw_email' method="post">

        <div class="container">
            <div class="col-md-6 col-md-offset-2">                  
                 <h4 class="form-forgotPw-heading">Please enter your email address</h4>
                               
                       <?php
                        echo form_open('c_forgotpw/send_pw_email');
                        echo validation_errors();
                        ?>

                        <fieldset>
                            <div class="form-group">                                                             
                                    <input type="email" class="form-control" name="email" placeholder="Email address" required autofocus>
                                                             
                                     <?php
                                    $registerbtnattributes = array('class' => 'navbar-btn btn-info btn pull-left', 'name' => 'Submit', 'value' => 'Submit');
                                    echo form_submit($registerbtnattributes);
                                    ?>
                                </div>

                                <?php
                                echo form_close();
                                ?>                               
                        </fieldset>	
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