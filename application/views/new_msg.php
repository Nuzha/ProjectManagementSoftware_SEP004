<div class="col-md-7 col-md-offset-2">
    <div class="well well-small">

<?php $req1 = mysql_query('select * from member');

if ($this->session->userdata('is_logged_in')) {

         $un = $this->session->userdata['USERNAME'];
?>

<?php
if ($msg) {
    echo $msg;
}
?>

    <h3><span class="label label-default">New Message</span></h3>
    <?php echo validation_errors(); ?>
    <?php echo form_open('main/newmsgs'); ?> <br/>
    
    <label for="title">Title</label> <br>
    <input type="text" value="" id="title" name="title" /><br /><br>
    
    <label for="recip">Recipient(Username)</label></br>
    <select name="recip" multiple="multiple"> <br>
        <?php
        if ($req1 === FALSE) {
                    die(mysql_error()); // TODO: better error handling
                }
                
        while ($dn = mysql_fetch_array($req1)) {
            if ($dn['username'] == '$USERNAME') {
                
            } else {
                ?>

                <option><?php echo $dn['username']; ?></option>

       <?php }
          }
        }
        ?></select> 
    </br>
    
    <br>
    <label for="message">Message</label> <br>
    <textarea cols="30" rows="5" id="message" name="message"></textarea><br />
    
    <input class="navbar-btn btn-success btn" type="submit" value="Send"/>
    
</div>
</div>
