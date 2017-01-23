<?php
    require_once ('connect.inc.php');
    $pid = $_GET['page_post_id'];
    $sqllike = "UPDATE `otun_posts` SET viewsofpost = viewsofpost + 1 WHERE idofpost = $pid";
	if(!$result = $db->query($sqllike)){
        die('There was an error running the query [' . $db->error . ']');
    }	

?>