<!DOCTYPE HTML>
<html>
    <head>
        <title>Agile Project Management Software</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url() . 'css/bootstrap.min.css' ?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/bootstrap.css' ?>" rel="stylesheet">
        <link href="<?php echo base_url() . 'css/styles.css' ?>" rel = "stylesheet">
        <link href="<?php echo base_url() . 'css/dashboardNew.css' ?>" rel = "stylesheet">
        <link href="<?php echo base_url() . 'css/datepicker.css' ?>" rel = "stylesheet">
        <link href="<?php echo base_url() . 'css/datepicker3.css' ?>" rel = "stylesheet">
        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src = "http://localhost/ProjectManagementSoftware_SEP004/js/bootstrap.js"></script>
        <script src = "http://localhost/ProjectManagementSoftware_SEP004/js/bootstrap-datepicker.js"></script>
        <script src = "http://localhost/ProjectManagementSoftware_SEP004/js/bootstrap-popover.js"></script>
        <script src = "http://localhost/ProjectManagementSoftware_SEP004/js/bootstrap-tooltip.js"></script>
        <script src = "http://localhost/ProjectManagementSoftware_SEP004/js/bootstrap-twispy.js"></script>
        <link href="<?php echo base_url() . 'css/style.css' ?>" rel = "stylesheet">

        <script>
            function myFunction()
            {
                $(".menuItem").click(function() {
                    var myURL = $(this).attr("mref");

                    $.ajax({
                        type: "POST",
                        url: myURL,
                        success: function(data) {
                            $('#workingspace').html(data);

                        }
                    });
                    return true;
                });
            }
            $(document).ready(myFunction);
        </script> 


        <script>


            $(document).ready(function() {
                $('#assign_members').popover({
                    placement: "bottom",
                    title: "Assign Members",
                    content: ' <h5><b>Selected Project:</b></h5> <h5 class="label label-success"><b><?php echo $this->session->userdata('project_name'); ?></b></h5> <h5><b>Assign Members:</b></h5>\n\
            <h5><b>Selected Project:</b></h5> ',
                });
            });
        </script>
    </head>

<?php
if ($this->session->userdata('is_logged_in')) {
    $id = $this->session->userdata['userid'];
    $username = $this->session->userdata['USERNAME'];
    $req1 = mysql_query('select m1.id, m1.title, m1.timestamp, count(m2.id) as reps, member.id as userid, member.username from pm as m1, pm as m2,member where ((m1.user1="' . $id . '" and m1.user1read="no" and member.id=m1.user2) or (m1.user2="' . $id . '" and m1.user2read="no" and member.id=m1.user1)) and m1.id2="1" and m2.id=m1.id group by m1.id order by m1.id desc');
} else {
    $this->load->view('restricted');
}

if ($req1 === FALSE) {
    die(mysql_error());
}
?>
    <body style="background-image: url('http://localhost/ProjectManagementSoftware_SEP004/img/images.jpg'); ">

        <div id="wrapper">
            <!--Navigation bar-->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

                <div class="navbar-header">
                    <div class="navbar-brand">Agile Project Management Software</div>
                    <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse ">
                    <ul class="nav navbar-nav side-nav">
                        <li><a class ="menuItem" href ='<?php echo base_url() . "main/create_new_project" ?>'><span class="glyphicon glyphicon-th-large"></span><b>  Create Project</b></a></li>
                        <li><a class ="menuItem" href ='<?php echo base_url() . "main/Iteration" ?>'><span class="glyphicon glyphicon-align-center"></span><b>  Iteration Plan</b></a></li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-align-justify"></span><b>  Backlog</b></a>
                            <ul class="dropdown-menu">
                                <li><a href='<?php echo base_url() . "main/userStory" ?>'>Add User story</a></li>
                                <li><a href='<?php echo base_url() . "scrum_master/UserStorylisting" ?>'>List all user stories</a></li>

                            </ul>
                        </li>

                        <li><a  class ="menuItem" href ='<?php echo base_url() . "main/project_listing" ?>'><span class="glyphicon glyphicon-th-list"></span><b>  View current Projects</b></a></li>
                        <li><a  class ="menuItem" href ='<?php echo base_url() . "c_my_work/work_by_person" ?>'><span class="glyphicon glyphicon-user"></span><span class="glyphicon glyphicon-align-left"></span><b>  Work By Person</b></a></li>
                        <li><a class ="menuItem" href ='<?php echo base_url() . "s_scrum_chart/scrum_master_chk_u_status" ?>'><span class="glyphicon glyphicon-sort-by-attributes"></span><b>  View current Progress Of User Story</b></a></li>
                        <li><a class ="menuItem" href ='<?php echo base_url() . "c_discuss/view_discuss/general" ?>'><span class="glyphicon glyphicon-user"></span><span class="glyphicon glyphicon glyphicon-question-sign"></span><b>  Discussions</b></a></li>

                    </ul>

                    

                    <div class = "collapse navbar-collapse navHeaderCollapse">
                        <ul class = "nav navbar-nav navbar-right">

                            <li><a  href ="#contact"  data-toggle="modal"><span class="glyphicon glyphicon-th-large"></span> Projects</a></li>
                            <li ><a   id="" href='<?php echo base_url() . "main/assign_member" ?>'><span class="glyphicon glyphicon-user"></span><span class="glyphicon glyphicon-user"></span>Assign Members</a></li>

                            <li class = "dropdown">
                                <a href = "#dropdown-menu" class = "dropdown-toggle" data-toggle = "dropdown"> <span class="badge"><?php echo intval(mysql_num_rows($req1)); ?></span>  Messages </span> <b class = "caret"></b></a>
                                <ul class = "dropdown-menu">
                                    <li><a href = "<?php echo base_url() . 'msg/inbox'; ?>"><span class="badge"><?php echo intval(mysql_num_rows($req1)); ?></span> Inbox</a></li>
                                    <li><a href = "<?php echo base_url() . 'msg/newmsger'; ?>"> New Message</a></li> 
                                    <li><a href="<?php echo base_url() . 'msg/load_list'; ?>"> All Messages </a></li>
                                </ul>
                            </li>

                            <li><a href = "#"><span class="glyphicon glyphicon-bell"></span> Notifications</a></li>

                            <li class = "dropdown">
                                <a href = "#dropdown-menu" class = "dropdown-toggle" data-toggle = "dropdown"><span class="glyphicon glyphicon-user"> <?php echo $username; ?> <b class = "caret"></b></span></a>
                                <ul class = "dropdown-menu">
                                    <li><a href = "<?php echo base_url() . 'main/show_profile'; ?>"data-toggle="modal">My profile</a></li> 
                                    <li><a href = "<?php echo base_url() . 'msg/edit'; ?>"data-toggle="modal">Settings</a></li> 
                                    <li><a href = "<?php echo base_url() . 'main/logout'; ?>"> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
            </nav>



            <div class = "modal fade" id = "contact">
                <div class = "modal-dialog">
                    <div class = "modal-content">
                        <div class = "modal-header">
                            <p><b>Current Available Projects</b></p>

                        </div>
                        <p class="h4" style="color: #5bb75b">Please select a project</p>
                        <div class = "modal-body">


<?php
$formattributes = array('class' => 'form-horizontal', 'role' => 'form');
echo form_open('c_project/project_select', $formattributes);
?>
                            <?php
                            //Create the query
                            $sql = "SELECT `project_id`,`project_name` FROM project_summary";

                            //Run the query
                            $query_resource = mysql_query($sql);

                            //Iterate over the results that you've gotten from the database (hopefully MySQL)
                            while ($project = mysql_fetch_assoc($query_resource)):
                                ?>


                                <input type="radio" name="project" value="<?php echo $project['project_name']; ?>" />
                                <span>
    <?php echo $project['project_name']; ?></span><br />

<?php endwhile; ?>


                            
                        </div>
                        <div class = "modal-footer">

<?php
$registerbtnattributes = array('class' => 'btn btn-primary', 'name' => 'project_submit', 'value' => 'show project');
echo form_submit($registerbtnattributes);
?>

                            <?php
                            echo form_close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!--            -------------------------------------------------------------------------------------------------------------->

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
            <!--            -------------------------------------------------------------------------------------------------------------->
