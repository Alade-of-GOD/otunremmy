<?php
    session_start();
    require_once('../../otun-admin/php/dbfunctions/connect.inc.php');
    $d = $_GET['br'];
    $e = $_GET['rb'];
    $del = "DELETE FROM `otun_comments` WHERE idofcomment = '$d'";
    if (!$result = $db->query($del)){
        die('There was an error running the query [' . $db->error . ']');
    }
    else {
        $sql = "UPDATE otun_posts SET numberofcomments = (numberofcomments - 1) WHERE idofpost = $e";
		$db->query($sql);

        echo '<script type="text/javascript">
                window.setTimeout(function(){
                    // Move to a new location or you can do something else
                    window.location.href = "../profile.php";
                }, 100);
        </script>';
    }

?>
