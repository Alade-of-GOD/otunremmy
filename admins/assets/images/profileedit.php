<?php
    session_start();
    require_once('../../../otun-admin/php/dbfunctions/connect.inc.php');
    //echo $imgtoedit;
    if (isset($_FILES['avatar']) && !empty($_FILES['avatar'])){
        $imgtoedit = $_GET['imgtoedit'];
        $filename = $imgtoedit;
        if(file_exists($filename)){
    	//	echo "file <b>'".$filename."'</b> exists.<br>";
    		if(unlink($filename)){
    		//	echo "file <b>'".$filename."'</b> deleted!<br>";
                $newavatar = ($_FILES['avatar']['name']);
                $extension = strtolower(substr($newavatar, strpos($newavatar,'.')+1));
                $tmp_name = ($_FILES['avatar']['tmp_name']);
                $error = ($_FILES['avatar']['error']);
                $location = '';
                $location.$newavatar = $imgtoedit;
                if(move_uploaded_file($tmp_name, $location.$newavatar)){
                echo '<script type="text/javascript">
                        window.setTimeout(function(){
                            // Move to a new location or you can do something else
                            window.location.href = "../../profile.php";
                        }, 100);
                </script>';
                }
                else echo "File not Uploaded";
            }
            else echo "file <b>'".$filename."'</b> not deleted!<br>";
    	}
        else  echo "avatar doesn't exist";
    }

    else //echo "no image selected";

    if (isset($_POST['userN']) && !empty($_POST['userN']) && isset($_POST['fName']) && !empty($_POST['fName']) && isset($_POST['userLoc']) && !empty($_POST['userLoc']) && isset($_POST['userNote']) && !empty($_POST['userNote'])) {

        $me = $_GET['me'];
        $f = $_SESSION['fName'];
        $g = $_SESSION['userGend'];
        if ($_POST['gender'] == "") $_POST['gender'] = $_SESSION['userGend'];

        $update = "UPDATE `adminprofile` SET fullName = '".mysqli_real_escape_string($db, $_POST['fName'])."', userName = '".mysqli_real_escape_string($db, $_POST['userN'])."', aboutnote = '".mysqli_real_escape_string($db, $_POST['userNote'])."', gender = '".mysqli_real_escape_string($db, $_POST['gender'])."'
        , location = '".mysqli_real_escape_string($db, $_POST['userLoc'])."' WHERE `userName` = '$me'";
        if(!$res = $db->query($update)){
            die('There was an error running the query [' . $db->error . ']');
        }

        else {
            $update = "UPDATE `broadcast` SET sender = '".mysqli_real_escape_string($db, $_POST['userN'])."' WHERE `sender` = '$me'";
            if(!$res = $db->query($update)){
                die('There was an error running the query [' . $db->error . ']');
            }
            else {
                $update = "UPDATE `otun_posts` SET authorofpost = '".mysqli_real_escape_string($db, $_POST['fName'])."' WHERE `authorofpost` = '$f'";
                if(!$res = $db->query($update)){
                    die('There was an error running the query [' . $db->error . ']');
                }
                else {
                    $update = "UPDATE `otun_authors` SET nameofauthor = '".mysqli_real_escape_string($db, $_POST['fName'])."', usernameofauthor = '".mysqli_real_escape_string($db, $_POST['userN'])."', noteonauthor = '".mysqli_real_escape_string($db, $_POST['userNote'])."' WHERE `usernameofauthor` = '$me'";
                    if(!$res = $db->query($update)){
                        die('There was an error running the query [' . $db->error . ']');
                    }
                    else{
                        echo '<script type="text/javascript">
                                alert("Profile Update Successful");
                                window.setTimeout(function(){
                                    // Move to a new location or you can do something else
                                    window.location.href = "../../login.html";
                                }, 100);
                        </script>';
                    }
                }
            }
        }
    }

    if (isset($_POST['formerEmail']) && !empty($_POST['formerEmail']) && isset($_POST['newPass']) && !empty($_POST['newPass']) && isset($_POST['newPass_2']) && !empty($_POST['newPass_2'])){
        $newPass = $_POST['newPass'];
        $newPass_2 = $_POST['newPass_2'];
        $user = $_SESSION['userN'];
        if ($newPass != $newPass_2) {
            echo '<script type="text/javascript">
                    alert("Passwords do not match");
                    window.setTimeout(function(){
                        // Move to a new location or you can do something else
                        window.location.href = "../../profile.php";
                    }, 100);
            </script>';
        }
        else {
            $rel = $_GET['rel'];
            $reversed = strrev($newPass);
            $new = md5(sha1($reversed));
            $update = "UPDATE `adminprofile` SET passWord = '".mysqli_real_escape_string($db, $new)."', email = '".mysqli_real_escape_string($db, $_POST['formerEmail'])."' WHERE `userName` = '$rel'";
            if(!$res = $db->query($update)){
                die('There was an error running the query [' . $db->error . ']');
            }
            else {
                $db->query("UPDATE `otun_authors` SET emailofauthor = '".mysqli_real_escape_string($db, $_POST['formerEmail'])."' WHERE usernameofauthor = '$rel'");
                echo '<script type="text/javascript">
                        alert("update Successful");
                        window.setTimeout(function(){
                            // Move to a new location or you can do something else
                            window.location.href = "../../login.html";
                        }, 100);
                </script>';
            }
        }
    }
    else {
        echo '<script type="text/javascript">
                window.setTimeout(function(){
                    // Move to a new location or you can do something else
                    window.location.href = "../../profile.php";
                }, 100);
        </script>';
    }


    $db->close();
?>
