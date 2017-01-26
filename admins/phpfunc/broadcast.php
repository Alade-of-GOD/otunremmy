<?php

    require_once('../../otun-admin/php/dbfunctions/connect.inc.php');
    $u = $_SESSION['userN'];

    if (isset($_POST['message']) && !empty($_POST['message'])){
        $message = $_POST['message'];
        $sql = "SELECT * FROM `adminprofile` WHERE `userName` != '$u'";
        if(!$result = $db->query($sql)){
            die('There was an error running the query [' . $db->error . ']');
        }
        $time = date("h:i:sa");
    	$date = date("d/m/Y");
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $userName = $row['userName'];
                $ins = "INSERT INTO `broadcast` (user, sender, flag, message, broadcastdate, broadcasttime)
            	VALUES ('$userName', '$u', 0, '".mysqli_real_escape_string($db, $message)."', '$date', '$time')";
                if(!$res = $db->query($ins)){
                    die('There was an error running the query [' . $db->error . ']');
                }
                //echo "<br>".$userName;
            }

            echo '<script type="text/javascript">window.location.href = "../profile.php";</script>';
        }   //echo '<script type="text/javascript"> alert("Broadcast Sent Successfully"); </script>';
        //
    }
 ?>
