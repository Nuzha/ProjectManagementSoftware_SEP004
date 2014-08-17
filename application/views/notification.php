<html>
    <?php
        $sql = "SELECT `name`, `changetype` FROM `user_stories`, `record_notifications` WHERE `record_notifications`.`usid`=`user_stories`.`StoryId`";
        $query_resource = mysql_query($sql);
        while ($project = mysql_fetch_assoc($query_resource)):
    ?>
            <a href="#" class="list-group-item">
                <span class="badge"><?php echo $project['changetype']; ?></span>
                <i class="fa fa-calendar"></i> <?php echo $project['name']; ?>
            </a>
    <?php
        endwhile;
    ?>
</html>