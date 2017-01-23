<?php

    $u = $_SESSION['userN'];
    require_once('../otun-admin/php/dbfunctions/connect.inc.php');
    $broadcastM = "SELECT * FROM `broadcast` WHERE `user` = '$u' AND `flag` = 0";
    if (!$rm = $db->query($broadcastM)){
        die('There was an error running the query [' . $db->error . ']');
    }
    while ($rwm = $rm->fetch_assoc()){
        $_SESSION['mes'] = $rwm['message'];
        $_SESSION['sen'] = $rwm['sender'];

        echo '
        <li>
            <div class="row">
                <div class="col-xs-9"><p><i class="fa fa-bell activity-image"></i>'.$_SESSION["mes"].'</p></div>
                <div class="col-xs-3 text-right"><a href="#"><span class="activity-time">'.$_SESSION["sen"].'</span></a></div>
            </div>
        </li>
        ';
    }

?>
