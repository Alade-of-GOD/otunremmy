<?php

    require_once ('otun-admin/php/dbfunctions/connect.inc.php');

    $sqlpost = "SELECT * FROM `ads_table` WHERE `id` != '3'";
    if(!$result = $db->query($sqlpost)){
        die('There was an error running the query [' . $db->error . ']');
    }

    echo '<div class="vce-sticky">
        <div id="mks_ads_widget-3" class="widget mks_ads_widget">
            <h4 class="widget-title">Place Ads Here</h4>
            <ul class="mks_adswidget_ul small">';

    while($row = $result->fetch_assoc()){
        echo '
            <li data-showind="0">
                <a href="'.$row["adslink"].'" target="_blank">
                    <img src="'.$row["adslinkimg"].'" alt="Free Hosting" width="125"  height="125"/>
                </a>
            </li>
        ';
    }

    echo '
            </ul>
        </div>
        </div>';
 ?>
