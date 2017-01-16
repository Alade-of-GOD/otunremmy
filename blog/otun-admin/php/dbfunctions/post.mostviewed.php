<?php
    require_once ('connect.inc.php');
    $sqlpost = "SELECT * FROM `otun_posts` ORDER BY `viewsofpost` DESC LIMIT 5";
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
                        <div class="meta-item date"><span class="updated">'.$diff->format("%a days ago ").'</span></div>
                        <div class="meta-item comments">
                            <div>'.$postnumcomment.' Comment</div>
                        </div>
                    </div>
                </header>
            </article>
        ';

    }
 ?>
