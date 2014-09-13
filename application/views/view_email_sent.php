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
                <form class="form-horizontal" role="form" action='<?= base_url(); ?>c_forgotpw/load_view_forgotpw' method="post">
                    <h5 class="form-forgotPw-heading">Please check your Email</h5> 
                </form>
            </div>       
        </div>
    </body>
</html>
