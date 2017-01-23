<?php
    $u = $_SESSION['userN'];
    require_once('../otun-admin/php/dbfunctions/connect.inc.php');
    $broadcast = "SELECT COUNT(*) AS c FROM `broadcast` WHERE `user` = '$u' AND `flag` = 0";
    if (!$r = $db->query($broadcast)){
        die('There was an error running the query [' . $db->error . ']');
    }
    $rw = $r->fetch_assoc();
    $_SESSION['newBroadCast'] = $rw['c'];
    //echo $_SESSION['newBroadCast'];

    $countall = "SELECT COUNT(*) AS c FROM `otun_posts`";
    if (!$resultcountall = $db->query($countall)){
        die('There was an error running the query [' . $db->error . ']');
    }
    $rowcountall = $resultcountall->fetch_assoc();
    $_SESSION['allpostcount'] = $rowcountall['c'];

    $viewssumall = "SELECT SUM(`viewsofpost`) AS c FROM `otun_posts`";
    if (!$resultviewssumall = $db->query($viewssumall)){
        die('There was an error running the query [' . $db->error . ']');
    }
    $rowviewsall = $resultviewssumall->fetch_assoc();
    $_SESSION['viewssum'] = $rowviewsall['c'];

    $avgviews = $_SESSION['viewssum'] / $_SESSION['allpostcount'];

    //$db->close();

?>
