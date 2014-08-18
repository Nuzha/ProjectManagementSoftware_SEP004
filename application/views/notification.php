<html>
    <?php
        $sql = "SELECT `msg`, `changetype` from `record_notifications`";
        $query_resource = mysql_query($sql);
        while ($project = mysql_fetch_assoc($query_resource)):
    ?>
            <a href="#" class="list-group-item">
                <span class="badge"><?php echo $project['changetype']; ?></span>
                <i class="fa fa-calendar"></i> <?php echo $project['msg']; ?>
            </a>
    <?php
        endwhile;
    ?>
</html>