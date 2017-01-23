<?php

	require_once ('connect.inc.php');
	$pid = $_GET['page_post_id'];
	$name = $_POST['your-name'];
	$email = $_POST['your-email'];
	$comment = $_POST['your-comment'];
	$web = $_POST['your-url'];
	$date = date("Y-m-d");
	$time = date("h:i:sa");

	$ins = "INSERT INTO `otun_comments` (postid, commentonpost, commentby, commentbyemail, commentwebpage, commentdate, commenttime, approved)
	VALUES ('$pid', '$comment', '$name', '$email', '$web', '$date', '$time', 0) ";
    if(!$result = $db->query($ins)){
        die('There was an error running the query [' . $db->error . ']');
    }
	else {
		$sql = "UPDATE otun_posts SET numberofcomments = (numberofcomments + 1) WHERE idofpost = $pid";
		if ($db->query($sql) === TRUE) {
			header("Location: ../../../otunwrites.post.view.php?page_post_id=".$pid."&currentpage=1");
			//echo '<script type="text/javascript"> alert ("comment added"); </script>';
		} else {
		    echo "Error updating record: " . $db->error;
		}
	}

?>
