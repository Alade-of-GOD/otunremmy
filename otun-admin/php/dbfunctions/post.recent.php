<?php
    require_once ('connect.inc.php');

    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `idofpost` DESC LIMIT 0, 1";
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
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
        <div id="main-box-3" class="main-box vce-border-top main-box-half ">
            <h3 class="main-box-title cat-4">'.$category.'</h3>
            <div class="main-box-inside ">
                <article class="vce-post vce-lay-c post-192 post type-post status-publish format-video has-post-thumbnail hentry category-fashion post_format-post-format-video">
                    <div class="meta-image">
                        <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                            <img width="375" height="195" src="otun-content/post/feauturedimage/'.$postimage.'" class="attachment-vce-lay-b size-vce-lay-b wp-post-image" alt="voice_15" />
                        </a>
                    </div>
                    <header class="entry-header">
                        <span class="meta-category"><a href="#" class="category-4">'.$postauthor.'</a></span>
                        <h2 class="entry-title">
                            <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">'.$posttitle.'</a>
                        </h2>
                    </header>
                    <div class="entry-content">
                        <p>'.$contentshort.'</p>
                    </div>
                </article>

        ';

    }
    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `idofpost` DESC LIMIT 1, 1";
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
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
        <div class="vce-loop-wrap" >
            <article class="vce-post vce-lay-d post-144 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion">
                <div class="meta-image">
                    <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                        <img width="145" height="100" src="otun-content/post/feauturedimage/'.$postimage.'" alt="'.$posttitle.'" />
                    </a>
                </div>
                <header class="entry-header">
                    <span class="meta-category"><a href="#" class="category-4">'.$category.'</a></span>
                    <h2 class="entry-title">
                        <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="">'.$posttitle.'</a>
                    </h2>
                </header>
            </article>

        ';

    }
    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `idofpost` DESC LIMIT 2, 1";
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
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
            <article class="vce-post vce-lay-d post-144 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion">
                <div class="meta-image">
                    <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                        <img width="145" height="100" src="otun-content/post/feauturedimage/'.$postimage.'" />
                    </a>
                </div>
                <header class="entry-header">
                    <span class="meta-category"><a href="#" class="category-4">'.$category.'</a></span>
                    <h2 class="entry-title">
                        <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="">'.$posttitle.'</a>
                    </h2>
                </header>
            </article>
        </div>
        ';

    }
    echo '</div></div>';

    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `idofpost` DESC LIMIT 3, 1";
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
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
        <div id="main-box-3" class="main-box vce-border-top main-box-half ">
            <h3 class="main-box-title cat-4">'.$category.'</h3>
            <div class="main-box-inside ">
                <article class="vce-post vce-lay-c post-192 post type-post status-publish format-video has-post-thumbnail hentry category-fashion post_format-post-format-video">
                    <div class="meta-image">
                        <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                            <img width="375" height="195" src="otun-content/post/feauturedimage/'.$postimage.'" />
                        </a>
                    </div>
                    <header class="entry-header">
                        <span class="meta-category"><a href="#" class="category-4">'.$postauthor.'</a></span>
                        <h2 class="entry-title">
                            <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">'.$posttitle.'</a>
                        </h2>
                    </header>
                    <div class="entry-content">
                        <p>'.$contentshort.'</p>
                    </div>
                </article>


        ';

    }
    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `idofpost` DESC LIMIT 4, 1";
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
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
        <div class="vce-loop-wrap" >
            <article class="vce-post vce-lay-d post-144 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion">
                <div class="meta-image">
                    <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                        <img width="145" height="100" src="otun-content/post/feauturedimage/'.$postimage.'" />
                    </a>
                </div>
                <header class="entry-header">
                    <span class="meta-category"><a href="#" class="category-4">'.$category.'</a></span>
                    <h2 class="entry-title">
                        <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="">'.$posttitle.'</a>
                    </h2>
                </header>
            </article>

        ';

    }
    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `idofpost` DESC LIMIT 5, 1";
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
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
            <article class="vce-post vce-lay-d post-144 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion">
                <div class="meta-image">
                    <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                        <img width="145" height="100" src="otun-content/post/feauturedimage/'.$postimage.'" />
                    </a>
                </div>
                <header class="entry-header">
                    <span class="meta-category"><a href="#" class="category-4">'.$category.'</a></span>
                    <h2 class="entry-title">
                        <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="">'.$posttitle.'</a>
                    </h2>
                </header>
            </article>
        </div>
        ';

    }

    echo '</div></div>';

    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `idofpost` DESC LIMIT 6, 1";
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
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
        <div id="main-box-3" class="main-box vce-border-top main-box-half ">
            <h3 class="main-box-title cat-4">'.$category.'</h3>
            <div class="main-box-inside ">
                <article class="vce-post vce-lay-c post-192 post type-post status-publish format-video has-post-thumbnail hentry category-fashion post_format-post-format-video">
                    <div class="meta-image">
                        <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                            <img width="375" height="195" src="otun-content/post/feauturedimage/'.$postimage.'" class="attachment-vce-lay-b size-vce-lay-b wp-post-image" alt="voice_15" />
                        </a>
                    </div>
                    <header class="entry-header">
                        <span class="meta-category"><a href="#" class="category-4">'.$postauthor.'</a></span>
                        <h2 class="entry-title">
                            <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">'.$posttitle.'</a>
                        </h2>
                    </header>
                    <div class="entry-content">
                        <p>'.$contentshort.'</p>
                    </div>
                </article>

        ';

    }
    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `idofpost` DESC LIMIT 7, 1";
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
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
        <div class="vce-loop-wrap" >
            <article class="vce-post vce-lay-d post-144 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion">
                <div class="meta-image">
                    <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                        <img width="145" height="100" src="otun-content/post/feauturedimage/'.$postimage.'" alt="'.$posttitle.'" />
                    </a>
                </div>
                <header class="entry-header">
                    <span class="meta-category"><a href="#" class="category-4">'.$category.'</a></span>
                    <h2 class="entry-title">
                        <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="">'.$posttitle.'</a>
                    </h2>
                </header>
            </article>

        ';

    }
    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `idofpost` DESC LIMIT 8, 1";
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
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
            <article class="vce-post vce-lay-d post-144 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion">
                <div class="meta-image">
                    <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                        <img width="145" height="100" src="otun-content/post/feauturedimage/'.$postimage.'" />
                    </a>
                </div>
                <header class="entry-header">
                    <span class="meta-category"><a href="#" class="category-4">'.$category.'</a></span>
                    <h2 class="entry-title">
                        <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="">'.$posttitle.'</a>
                    </h2>
                </header>
            </article>
        </div>
        ';

    }
    echo '</div></div>';

    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `idofpost` DESC LIMIT 9, 1";
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
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
        <div id="main-box-3" class="main-box vce-border-top main-box-half ">
            <h3 class="main-box-title cat-4">'.$category.'</h3>
            <div class="main-box-inside ">
                <article class="vce-post vce-lay-c post-192 post type-post status-publish format-video has-post-thumbnail hentry category-fashion post_format-post-format-video">
                    <div class="meta-image">
                        <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                            <img width="375" height="195" src="otun-content/post/feauturedimage/'.$postimage.'" />
                        </a>
                    </div>
                    <header class="entry-header">
                        <span class="meta-category"><a href="#" class="category-4">'.$postauthor.'</a></span>
                        <h2 class="entry-title">
                            <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">'.$posttitle.'</a>
                        </h2>
                    </header>
                    <div class="entry-content">
                        <p>'.$contentshort.'</p>
                    </div>
                </article>


        ';

    }
    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `idofpost` DESC LIMIT 10, 1";
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
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
        <div class="vce-loop-wrap" >
            <article class="vce-post vce-lay-d post-144 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion">
                <div class="meta-image">
                    <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                        <img width="145" height="100" src="otun-content/post/feauturedimage/'.$postimage.'" />
                    </a>
                </div>
                <header class="entry-header">
                    <span class="meta-category"><a href="#" class="category-4">'.$category.'</a></span>
                    <h2 class="entry-title">
                        <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="">'.$posttitle.'</a>
                    </h2>
                </header>
            </article>

        ';

    }
    $sqlpost = "SELECT * FROM `otun_posts` WHERE `active` = 1 ORDER BY `idofpost` DESC LIMIT 11, 1";
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
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        //$date1 = new DateTime($postdate);
        //$date2 = new DateTime();
        //$diff = date_diff($date2, $date1);
        echo '
            <article class="vce-post vce-lay-d post-144 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion">
                <div class="meta-image">
                    <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="'.$posttitle.'">
                        <img width="145" height="100" src="otun-content/post/feauturedimage/'.$postimage.'" />
                    </a>
                </div>
                <header class="entry-header">
                    <span class="meta-category"><a href="#" class="category-4">'.$category.'</a></span>
                    <h2 class="entry-title">
                        <a href="otunwrites.post.view.php?page_post_id='.$postid.'&currentpage=1" title="">'.$posttitle.'</a>
                    </h2>
                </header>
            </article>
        </div>
        ';

    }

    echo '</div></div>';

 ?>
