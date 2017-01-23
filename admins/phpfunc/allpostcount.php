<?php

    $u = $_SESSION['userN'];
    require_once('../otun-admin/php/dbfunctions/connect.inc.php');
    $countall = "SELECT COUNT(*) AS c FROM `otun_posts`";
    if (!$resultcountall = $db->query($countall)){
        die('There was an error running the query [' . $db->error . ']');
    }
    $rowcountall = $resultcountall->fetch_assoc();
    $_SESSION['allpostcount'] = $rowcountall['c'];

    $db->close();

?>
