<?php

    $urlpostid = $_GET['page_post_id'];
    require_once ('connect.inc.php');
    $sql = "SELECT * FROM `otun_posts` WHERE `idofpost` = $urlpostid  AND `active` = 1";
    if(!$result = $db->query($sql)){
        die('There was an error running the query [' . $db->error . ']');
    }

    while($row = $result->fetch_assoc()){
        $postid = $row['idofpost'];
        $posttitle = $row['titleofpost'];
        $postcontent = nl2br($row['contentofpost']);
        $postimage = $row['imageofpost'];
        $category = $row['category'];
        $postauthor = $row['authorofpost'];
        $postnumcomment = $row['numberofcomments'];
        $postlikes = $row['numberoflikes'];
        $postview = $row['viewsofpost'];
        $postdate = $row['dateofpost'];
        $posttime = $row['timeofpost'];
    }

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
