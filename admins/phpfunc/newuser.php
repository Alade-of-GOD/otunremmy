<?php

    require_once('../../otun-admin/php/dbfunctions/connect.inc.php');
    if (isset($_POST['checkit']) && $_POST['checkit'] == true){
        //echo "checked";
        if (isset($_POST['full_name']) && !empty($_POST['full_name']) && isset($_POST['user_name']) && !empty($_POST['user_name']) && isset($_POST['your_email']) && !empty($_POST['your_email']) && isset($_POST['about']) && !empty($_POST['about'])){
            $full_name = $_POST['full_name'];
            $user_name = $_POST['user_name'];
            $your_email = $_POST['your_email'];
            $about = $_POST['about'];
            if (isset($_FILES['gravatar']) && !empty($_FILES['gravatar'])){
                $gravatar = ($_FILES['gravatar']['name']);
            } else { $gravatar = "user.jpg"; }

            $insert = "INSERT INTO `otun_authors` (nameofauthor, usernameofauthor, emailofauthor, noteonauthor, gravatarofauthor)
            VALUES ('".mysqli_real_escape_string($db, $full_name)."', '".mysqli_real_escape_string($db, $user_name)."', '".mysqli_real_escape_string($db, $your_email)."', '".mysqli_real_escape_string($db, $about)."', '".mysqli_real_escape_string($db, $gravatar)."')";
            if(!$res = $db->query($insert)){
                die('There was an error running the query [' . $db->error . ']');
            }
            else {
                session_start();
                $_SESSION['full_name'] = $full_name;
                $db->close();
                echo '<script type="text/javascript">
                        alert("We have registered you");
                        window.setTimeout(function(){
                            // Move to a new location or you can do something else
                            window.location.href = "../externalpost.php";
                        }, 500);
                </script>';
            }
        }
    } else {
        echo '<script type="text/javascript">
                alert("you have to agree to terms before posting on the page");
                window.setTimeout(function(){
                    // Move to a new location or you can do something else
                    window.location.href = "../register.html";
                }, 500);
        </script>';
    }
?>
