<html>
    <head>
        <title>otun writes &#8211; admin</title>
        <link rel="shortcut icon" href="../blog/otun-content/themes/voice/favicon.ico" type="image/x-icon" />
    </head>
</html>
<?php

    require_once('../blog/otun-admin/php/dbfunctions/connect.inc.php');
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

        $sqlpost = "SELECT * FROM `adminprofile` WHERE `passWord` = '$changedpass' AND `email` = '$my_email'";
    	if(!$result = $db->query($sqlpost)){
            die('There was an error running the query [' . $db->error . ']');
        }

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                //echo "id: " . $row["id"];
                
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
