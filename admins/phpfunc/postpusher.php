<?php

    require_once('../../otun-admin/php/dbfunctions/connect.inc.php');
    session_start();
    $u = $_SESSION['userN'];
    if (isset($_POST['posttitle']) && !empty($_POST['posttitle']) && isset($_FILES['feauturedimage']) && !empty($_FILES['feauturedimage'])
            && isset($_POST['category']) && !empty($_POST['category']) && isset($_POST['postcontent']) && !empty($_POST['postcontent']) ){

        $posttitle = $_POST['posttitle'];
        $category = "";
        if ($_POST['category'] == "Poem End Time" || $_POST['category'] == "Poem Grace" || $_POST['category'] == "Poem Sacred" || $_POST['category'] == "Poem Special") {
            $category = "poem";
        }
        else if ($_POST['category'] == "Amebo Education" || $_POST['category'] == "Amebo Latest Discoveries" || $_POST['category'] == "Amebo Nigeria" || $_POST['category'] == "Amebo Science and Technology"){
            $category = "ameb";
        }

        else {
            $category = $_POST['category'];
        }

        $postcategory = $_POST['category'];
        $postcontent = nl2br($_POST['postcontent']);
        $date = date("Y-m-d");
    	$time = date("d/m/Y");
        $fName = $_SESSION['fName'];
        $feauturedimage = ($_FILES['feauturedimage']['name']);
        //echo $feauturedimage;

        $insert = "INSERT INTO `otun_posts` (titleofpost, contentofpost, imageofpost, category, categoryofpost, authorofpost, numberofcomments, numberoflikes, viewsofpost, dateofpost, timeofpost)
        VALUES ('".mysqli_real_escape_string($db, $posttitle)."', '".mysqli_real_escape_string($db, $postcontent)."', '".mysqli_real_escape_string($db, $feauturedimage)."', '".mysqli_real_escape_string($db, $category)."', '".mysqli_real_escape_string($db, $postcategory)."', '".mysqli_real_escape_string($db, $fName)."', '0', '0', '0', '$date', '$time')";
        if(!$res = $db->query($insert)){
            die('There was an error running the query [' . $db->error . ']');
        }

        else {
            $db->close();
            $feauturedimage = ($_FILES['feauturedimage']['name']);
			$extension = strtolower(substr($feauturedimage, strpos($feauturedimage,'.')+1));
			//$type = ($_FILES['stu_passport']['type']);
			//$size = ($_FILES['stu_passport']['size']);
			//$maxsize = 524288;
			//$type = ($_FILES['stu_passport']['type']);
			$tmp_name = ($_FILES['feauturedimage']['tmp_name']);
			$error = ($_FILES['feauturedimage']['error']);
			$location = '../../otun-content/post/feauturedimage/';
			$location.$feauturedimage = $feauturedimage;
			if(move_uploaded_file($tmp_name, $location.$feauturedimage)){
				//echo "File Uploaded";
			} else {
			    //echo "File not uploaded";
			}
            echo '<script type="text/javascript">
                    alert("post sent successfully");
                    window.setTimeout(function(){
                        // Move to a new location or you can do something else
                        window.location.href = "../profile.php";
                    }, 100);
            </script>';
        }
        //echo '<script type="text/javascript">window.location.href = "../profile.php";</script>';
    }

?>
