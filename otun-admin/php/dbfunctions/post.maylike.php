<?php

    require_once ('connect.inc.php');
    //$sqlpost = "SELECT `idofpost` FROM `otun_posts`";
    //if(!$result = $db->query($sqlpost)){
    //    die('There was an error running the query [' . $db->error . ']');
    //}
    //while($row = $result->fetch_assoc()){
    //    $start = $row['idofpost'];
    //    break;
    //}

    //while ($row = $result->fetch_assoc()) {
    //    $kol = $row['idofpost'];
    //}

    //$end = $kol;
    //echo $start.", ".$end;
    //$pic = rand($start, $end);
    //if ($pic == $end){
    //    $pic = $pic - 15;
    //}

    //for ($i = ($pic+10); $i >= $pic; $i--){
        //echo $i."<br>";
    //$i = $pic + 10;

    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `viewsofpost` DESC LIMIT 0, 6";
	if(!$result = $db->query($sqlpost)){
        die('There was an error running the query [' . $db->error . ']');
    }

    while ($row = $result->fetch_assoc()) {
        $postid = $row['idofpost'];
        $posttitle = $row['titleofpost'];
        $postimage = $row['imageofpost'];
        echo '
        <li>
            <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" class="featured_image_sidebar" title="'.$posttitle.'">
                <span class="vce-post-img">
                    <img width="145" height="100" src="otun-content/post/feauturedimage/'.$postimage.'" class="attachment-vce-lay-d size-vce-lay-d wp-post-image" alt="'.$postimage.'" />
                </span>
            </a>
            <div class="vce-posts-wrap">
                <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'" class="vce-post-link">'.$posttitle.'</a>
            </div>
        </li>


        ';
    }

 ?>
