<?php
    require_once ('connect.inc.php');
    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `dateofpost` DESC LIMIT 10";
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
        for ($i = 0; $i < 10; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        $date1 = new DateTime($postdate);
        $date2 = new DateTime();
        $diff = date_diff($date2, $date1);
        echo '
            <div class="vce-grid-item">
                <div class="vce-grid-text">
                    <div class="vce-featured-info">
                        <div class="vce-featured-section">
                            <a class="category-2">'.$category.'</a>
                         </div>
                        <h2 class="vce-featured-title">
                            <a class="vce-featured-link-article" href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1">'.$posttitle.'</a>
                        </h2>
                        <div class="entry-meta"><div class="meta-item date"><span class="updated">'.$diff->format("%a days ago ").'</span></div></div>
                    </div>
                    <a href="indexbbbf.html?p=191" class="vce-featured-header-background"></a>
                </div>
                <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="Stunning Health Benefits of Eating Chocolates">
                    <img width="380" height="260" src="otun-content/post/feauturedimage/'.$postimage.'" class="attachment-vce-fa-grid size-vce-fa-grid wp-post-image" alt="'.$posttitle.'" sizes="(max-width: 380px) 100vw, 380px" />
                </a>
            </div>

        ';
    }

?>
