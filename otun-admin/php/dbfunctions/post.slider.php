<?php
    require_once ('connect.inc.php');
    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `idofpost` DESC LIMIT 10";
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
            <div class="vce-grid-item">
                <div class="vce-grid-text">
                    <div class="vce-featured-info">
                        <div class="vce-featured-section">
                            <a class="category-2">'.$category.'</a>
                         </div>
                        <h2 class="vce-featured-title">
                            <a class="vce-featured-link-article" href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1">'.$posttitle.'</a>
                        </h2>
                    </div>
                    <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" class="vce-featured-header-background"></a>
                </div>
                <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="Stunning Health Benefits of Eating Chocolates">
                    <img width="380" height="260" src="otun-content/post/feauturedimage/'.$postimage.'" class="attachment-vce-fa-grid size-vce-fa-grid wp-post-image" alt="'.$posttitle.'" sizes="(max-width: 380px) 100vw, 380px" />
                </a>
            </div>

        ';
    }


?>
