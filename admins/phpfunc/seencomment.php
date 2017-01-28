<?php
    session_start();
    require_once('../../otun-admin/php/dbfunctions/connect.inc.php');
    $d = $_GET['br'];
    $close = "UPDATE `otun_comments` SET approved = 1 WHERE idofcomment = '$d'";
    if (!$result = $db->query($close)){
        die('There was an error running the query [' . $db->error . ']');
    }
    else {
        echo '<script type="text/javascript">
                window.setTimeout(function(){
                    // Move to a new location or you can do something else
                    window.location.href = "../profile.php";
                }, 100);
        </script>';
    }

?>
