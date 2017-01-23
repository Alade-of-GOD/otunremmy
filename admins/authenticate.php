<?php session_start(); ?>
<html>
    <head>
        <title>otun writes &#8211; admin</title>
        <link rel="shortcut icon" href="../otun-content/themes/voice/favicon.ico" type="image/x-icon" />
    </head>
</html>
<?php

    require_once('../otun-admin/php/dbfunctions/connect.inc.php');
    function Redirect(){
        return '<script type="text/javascript">
                window.setTimeout(function(){
                    // Move to a new location or you can do something else
                    window.location.href = "login.html";
                }, 5000);
        </script>';
    }
    if (isset($_POST['e']) && !empty($_POST['e']) && isset($_POST['p']) && isset($_POST['p']) && !empty($_POST['p'])){
        $my_email = $_POST['e'];
        $my_pass = $_POST['p'];
        $passreal = strrev($my_pass);

        //echo "Email: ".$my_email."<br>Pass: ".$my_pass."<br>Reversed Pass: ".$passreal;
        $changedpass = md5(sha1($passreal));

        $sql = "SELECT * FROM `adminprofile` WHERE `passWord` = '$changedpass' AND `email` = '$my_email'";
    	if(!$result = $db->query($sql)){
            die('There was an error running the query [' . $db->error . ']');
        }

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                //echo "id: " . $row["id"];
                $id = $row['id'];
                $userN = $row['userName'];
                $avatar = $row['gravatar'];
                $fName = $row['fullName'];
                $sex = $row['gender'];
                $note = $row['aboutnote'];
                $add = $row['location'];
            }
            $_SESSION['id'] = $id;
            $_SESSION['userN'] = $userN;
            $_SESSION['avatar'] = $avatar;
            $_SESSION['fName'] = $fName;
            $_SESSION['sex'] = $sex;
            $_SESSION['note'] = $note;
            $_SESSION['add'] = $add;

            $s = "SELECT COUNT(*) AS c FROM `otun_posts`";
            if (!$r = $db->query($s)){
                die('There was an error running the query [' . $db->error . ']');
            }
            $rw = $r->fetch_assoc();
            $totalCount = $rw['c'];

            $q = "SELECT COUNT(*) AS i FROM `otun_posts` WHERE `authorofpost` = '$fName'";
            if (!$t = $db->query($q)){
                die('There was an error running the query [' . $db->error . ']');
            }
            $tw = $t->fetch_assoc();
            $postCount = $tw['i'];

            $perc = ($postCount/$totalCount) * 100;
            $_SESSION['perc'] = number_format($perc);

            if ($_SESSION['id']){
                echo '<script type="text/javascript">window.location.href = "index.php";</script>';
            }
        }
        else{
            echo "Access Denied! Redirecting now...<br><a href='login.html'>redirect me now...</a>";

            echo Redirect();
        }

    }

    else {
        echo "Invalid Request! Redirecting now... <br><a href='login.html'>redirect me now...</a>";

        echo Redirect();
    }
?>
