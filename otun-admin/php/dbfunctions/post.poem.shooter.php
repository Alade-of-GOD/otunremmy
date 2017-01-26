<?php
    require_once ('connect.inc.php');

	$sqlpost = "SELECT * FROM `otun_posts` WHERE `category` = 'Grace' OR `category` = 'Sacred' OR `category` = 'Special' OR `category` = 'End Time' AND `active` = 1 ORDER BY `dateofpost` DESC LIMIT 0, 10";
	if(!$result = $db->query($sqlpost)){
        die('There was an error running the query [' . $db->error . ']');
    }

    while($row = $result->fetch_assoc()){
        $postid = $row['idofpost'];
        $posttitle = $row['titleofpost'];
        $postcontent = nl2br($row['contentofpost']);
        $postimage = $row['imageofpost'];
        $category = strtoupper($row['category']);
        $postauthor = $row['authorofpost'];
        $postnumcomment = $row['numberofcomments'];
        $postlikes = $row['numberoflikes'];
        $postview = $row['viewsofpost'];
        //$postdate = $row['dateofpost'];
        $posttime = $row['timeofpost'];
        $contentshort = '';
        $contentarr = explode(' ', trim($postcontent));
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
        <article class="vce-post vce-lay-c post-191 post type-post status-publish format-standard has-post-thumbnail hentry category-food tag-chocolates tag-food-2 tag-magazine tag-sugar tag-sweet">
            <div class="meta-image">
                <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                    <img width="375" height="195" src="otun-content/post/feauturedimage/'.$postimage.'" class="attachment-vce-lay-b size-vce-lay-b wp-post-image" alt="'.$postimage.'" />
                </a>
            </div>
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1">'.$posttitle.'</a>
                </h2>
            </header>
            <div class="entry-content">
                <p>'.$contentshort.'</p>
            </div>
        </article>

        ';

    }
 ?>
