<?php

    require_once ('connect.inc.php');
    $sqlpost = "SELECT `idofpost` FROM `otun_posts`";
    if(!$result = $db->query($sqlpost)){
        die('There was an error running the query [' . $db->error . ']');
    }
    while($row = $result->fetch_assoc()){
        $start = $row['idofpost'];
        break;
    }

    while ($row = $result->fetch_assoc()) {
        $kol = $row['idofpost'];
    }

    $end = $kol;
    //echo $start.", ".$end;
    $pic = rand($start, $end);
    if ($pic == $end){
        $pic = $pic - 15;
    }

    for ($i = ($pic+10); $i >= $pic; $i--){
        //echo $i."<br>";

        $sqlpost = "SELECT * FROM `otun_posts` WHERE `idofpost` = '$i'";
    	if(!$result = $db->query($sqlpost)){
            die('There was an error running the query [' . $db->error . ']');
        }

        $row = $result->fetch_assoc();
        $postid = $row['idofpost'];
        $posttitle = $row['titleofpost'];
        $postcontent = $row['contentofpost'];
        $postimage = $row['imageofpost'];
        $category = strtoupper($row['category']);
        $postcategory = $row['categoryofpost'];
        $postauthor = $row['authorofpost'];
        $postnumcomment = $row['numberofcomments'];
        $postlikes = $row['numberoflikes'];
        $postview = $row['viewsofpost'];
        $postdate = $row['dateofpost'];
        $posttime = $row['timeofpost'];
        $arr = explode(' ', trim($postcategory));
        $cat = $arr[0];
        $title = substr($postcategory, 5);
        $contentshort = '';
        $contentarr = explode(' ', trim($postcontent));
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        $date1 = new DateTime($postdate);
        $date2 = new DateTime();
        $diff = date_diff($date2, $date1);

        //echo "<br>". $posttitle;

        echo '
        <li>
            <a href="#" class="featured_image_sidebar" title="'.$posttitle.'">
                <span class="vce-post-img">
                    <img width="145" height="100" src="otun-content/post/feauturedimage/'.$postimage.'" class="attachment-vce-lay-d size-vce-lay-d wp-post-image" alt="'.$postimage.'" />
                </span>
            </a>
            <div class="vce-posts-wrap">
                <a href="" title="'.$posttitle.'" class="vce-post-link">'.$contentshort.'</a>
            </div>
        </li>


        ';


    }

 ?>
