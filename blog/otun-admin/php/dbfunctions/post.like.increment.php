<?php
    require_once ('connect.inc.php');
    $pid = $_GET['page_post_id'];
    $sqllike = "UPDATE `otun_posts` SET numberoflikes = numberoflikes + 1 WHERE idofpost = $pid";
	if(!$result = $db->query($sqllike)){
        die('There was an error running the query [' . $db->error . ']');
    }	
    else {
    	header("Location: ../../../otun-remmy-writes.post.view.php?page_post_id=".$pid."&currentpage=1#li");
    }

?>