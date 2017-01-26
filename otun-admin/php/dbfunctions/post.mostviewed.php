<?php
    require_once ('connect.inc.php');
    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `viewsofpost` DESC LIMIT 5";
	if(!$result = $db->query($sqlpost)){
        die('There was an error running the query [' . $db->error . ']');
    }

    while($row = $result->fetch_assoc()){
        $postid = $row['idofpost'];
        $posttitle = $row['titleofpost'];
        $postcontent = $row['contentofpost'];
        $postimage = $row['imageofpost'];
        $category = strtoupper($row['category']);
        $postauthor = $row['authorofpost'];
        $postnumcomment = $row['numberofcomments'];
        $postlikes = $row['numberoflikes'];
        $postview = $row['viewsofpost'];
        //$postdate = date("d/m/Y", strtotime($row['dateofpost']));
        $posttime = $row['timeofpost'];
        $contentshort = '';
        $contentarr = explode(' ', trim($postcontent));
        for ($i = 0; $i < 10; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
            <article class="vce-post vce-lay-b post-203 post type-post status-publish format-standard has-post-thumbnail hentry category-environment category-technology tag-earth tag-ecology tag-solar-energy">
                <div class="meta-image">
                    <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                        <img width="375" height="195" src="otun-content/post/feauturedimage/'.$postimage.'" class="attachment-vce-lay-b size-vce-lay-b wp-post-image" alt="'.$posttitle.'" />
                    </a>
                </div>
                <header class="entry-header">
                    <span class="meta-category">
                        <span>&bull;</span>
                        <a href="otunwrites.'.strtolower($category).'.php" class="category-6">'.$category.'</a>
                    </span>
                    <h2 class="entry-title">
                        <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="">'.$posttitle.'</a>
                    </h2>
                    <div class="entry-meta">
                        <div class="meta-item comments">
                            <div>'.$postnumcomment.' Comment</div>
                        </div>
                    </div>
                </header>
            </article>
        ';

    }
 ?>
