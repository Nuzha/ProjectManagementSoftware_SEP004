<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Member page</title>

	
</head>
<body>

<div id="container">
	<h1>Member page</h1>

        <?php
        
        echo "<pre>";
            print_r($this->session->all_userdata());
        echo "</pre>";
        ?>

        <a href ='<?php echo base_url()."main/logout" ?>'>Logout</a>

	

</body>
</html>