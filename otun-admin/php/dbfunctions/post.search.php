<?Php
	//ini_set('display_errors', true);//Set this display to display  all erros while testing and developing the script
	error_reporting(0);// With this no error reporting will be there
	include "include/z_db.php";
	$todo=$_POST['todo'];
	$search_text=$_POST['search_text'];
	if(strlen($serch_text) > 0){
		if(!ctype_alnum($search_text)){
			echo "Data Error";
			exit;
		}
	}
	if(isset($todo) and $todo=="search"){
		$type=$_POST['type'];
		$search_text=ltrim($search_text);
		$search_text=rtrim($search_text);
		//if($type<>"any"){
		//	$query="select * from items where item='$search_text'";
		//}
		//else{
		$kt=split(" ",$search_text);//Breaking the string to array of words
		//Now let us generate the sql
		while(list($key,$val)=each($kt)){
			if($val<>" " and strlen($val) > 0){
				$q .= " titleofpost like '%$val%' OR contentofpost like '%$val%' OR category like '%$val%' OR authorofpost like '%$val%' OR categoryofpost like '%$val%' or";
			}
		}// end of while
		$q=substr($q,0,(strLen($q)-3));
		$r=substr($r,0,(strLen($r)-3));
		// this will remove the last or from the string.
		$query="SELECT * FROM otun_posts WHERE $q ORDER BY dateofpost DESC";
		//} // end of if else based on type value
		$count=$dbo->prepare($query);
		$count->execute();
		$no=$count->rowCount();
		if($no > 0 ){echo $no. " Posts Found <br><br>";
			foreach ($dbo->query($query) as $row){
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
		        //$postdate = $row['dateofpost'];
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
		                <span class="meta-category"><a class="category-2">'.$title.'</a></span>
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
		}
		else {
			echo " No Post Found ";
		}
	}
	else {
		echo "could not search...";
	}

?>
