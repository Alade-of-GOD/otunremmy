<?php
	require_once ('connect.inc.php');
	$urlpostid = $_GET['page_post_id'];
	$urlpage = $_GET['currentpage'];

	switch ($urlpage) {
		case ($urlpage < 0 ):
			$from = 0;
			break;

		default:
			$from = ($urlpage * 4);
			break;
	}
	$sql = "SELECT * FROM `otun_comments` WHERE `postid` = $urlpostid ORDER BY `idofcomment` DESC LIMIT 0, $from";
	if(!$result = $db->query($sql)){
		die('There was an error running the query [' . $db->error . ']');
	}

	while($row = $result->fetch_assoc()){
		$content = nl2br($row['commentonpost']);
		$by = $row['commentby'];
		$date = $row['commentdate'];
		$time = $row['commenttime'];
		$approved = $row['approved'];
		switch ($approved) {
			case 0:
				$check = "<i>your comment is waiting to be approved...</i>";
				break;
			case 1:
				$check = $content;
				break;
			default:
				$check = "<i>your comment was not approved...</i>";
				break;
		}
		$date1 = new DateTime($date);
	    $date2 = new DateTime();
	    $diff = date_diff($date2, $date1);
	    
		echo '
			<li id="comment-39" class="comment even thread-even depth-1">
				<article id="div-comment-39" class="comment-body">
					<footer class="comment-meta">
						<div class="comment-author vcard">
							<img src="otun-content/post/gravatar.jpg" width="75" height="75" alt="" class="avatar avatar-75wp-user-avatar wp-user-avatar-75 alignnone photo avatar-default" />
							<b class="fn">'.$by.'</b>
						</div>
						<div class="comment-metadata">
								<label>'.$diff->format("%a days ago ").$time.'</label>
						</div>
					</footer>
					<div class="comment-content">
						<p>'.$check.'</p>
					</div>
				</article>
			</li>
		';
	}


//<div class="reply" style="float: right;">
//	<a href="#myPopdown?commentid=1"><button id="myBtn">reply</button></a>
//</div>


?>
