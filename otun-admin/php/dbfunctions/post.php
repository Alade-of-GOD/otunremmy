<?php
	$cat = $_GET['cat'];
	require_once ('connect.inc.php');

	$sqlpost = "SELECT * FROM `otun_posts` WHERE `category` = '$cat' AND `active` = 1";
	if(!$result = $db->query($sqlpost)){
        die('There was an error running the query [' . $db->error . ']');
    }

    while($row = $result->fetch_assoc()){
        $postid = $row['idofpost'];
        $posttitle = $row['titleofpost'];
        $postcontent = nl2br($row['contentofpost']);
        $postimage = $row['imageofpost'];
        $category = strtoupper($row['category']);
        $postcategory = $row['categoryofpost'];
        $postauthor = $row['authorofpost'];
        $postnumcomment = $row['numberofcomments'];
        $postlikes = $row['numberoflikes'];
        $postview = $row['viewsofpost'];
        $postdate = $row['dateofpost'];
        $posttime = $row['timeofpost'];
    }

    $arr = explode(' ', trim($postcategory));
    $cat = $arr[0];
    $title = $arr[1];
    $date1 = new DateTime($postdate);
    $date2 = new DateTime();
    $diff = date_diff($date2, $date1);

//author details
    $q = "SELECT * FROM `otun_authors` WHERE `nameofauthor` = '$postauthor'";
    if(!$result = $db->query($q)){
        die('There was an error running the query [' . $db->error . ']');
    }
    while ($row = $result->fetch_assoc()){
        $authoruname = $row['usernameofauthor'];
        $authorgravater = $row['gravatarofauthor'];
        $authornote = $row['noteonauthor'];
    }

?>
