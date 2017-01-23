<?php

    require_once ('otun-admin/php/dbfunctions/connect.inc.php');

    $sqlpost = "SELECT * FROM `ads_table` WHERE `id` = '3'";
    if(!$result = $db->query($sqlpost)){
        die('There was an error running the query [' . $db->error . ']');
    }

    while($row = $result->fetch_assoc()){
        echo '
        <a href="'.$row["adslink"].'" target="_blank">
            <img style="margin: 0 auto;  display: block;"  width="728" height="90" src="'.$row["adslinkimg"].'" alt="Free Hosting" >
        </a>
        ';
    }
 ?>
