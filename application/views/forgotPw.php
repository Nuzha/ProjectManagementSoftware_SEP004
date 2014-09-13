<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>

        <link href="<?php echo base_url() . 'css/bootstrap.min.css' ?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/bootstrap.css' ?>" rel="stylesheet">
        <script src="<?= base_url(); ?>js/jquery.js"></script>
        <script src = "<?php echo base_url() . 'js/jquery-1.4.2.min.css' ?>"></script>
    </head>

    <body style="background-image: url('http://localhost/ProjectManagementSoftware_SEP004/img/new.jpg');">

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

    <body>

        <div class="container">

            <div class="col-md-6 col-md-offset-2">
               
                <form class="form-horizontal" role="form" action='<?= base_url();?>c_forgotpw/sendEmail' method="post">
                    
<!--                    <?php
                       //     echo form_open('c_forgotpw/sendEmail');
                         //   echo validation_errors();?>
                    -->
                    <h4 class="form-forgotPw-heading">Please enter your email address</h4>
                    <input type="email" class="form-control" name="submit_pw" placeholder="Email address" required autofocus>
                    <button type="submit" class="btn btn-success">Sign In</button>
                    
 <!--<a href="<?php echo base_url() . 'c_forgotpw/sendEmail';?>" class="navbar-btn btn-info btn pull-left"> Submit </a>-->
<!--                    <div data-alerts="alerts" data-titles="{'warning': '<em>Warning!</em>'}" data-ids="myid" data-fade="3000"></div>


                    <script>
                        $('#element').tooltip('show');
                    </script>    

                    <div class = "modal fade" id = "warn-me" role="dialog">
                        <div class = "modal-dialog">
                            <div class = "modal-content">
                                <div class = "modal-body">
                                    <p>My number</p>
                                </div>
                                <div class = "modal-footer">
                                    <a class ="btn btn-default" data-dismiss = "modal">I'm Done</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        $("#warn-me").click(function() {
                            $(document).trigger("add-alerts", [
                                {
                                    'message': "This is a warning.",
                                    'priority': 'warning'

                                }
                            ]);
                        });
                    </script>-->

                </form>

            </div>       
        </div>
    </body>
</html>
