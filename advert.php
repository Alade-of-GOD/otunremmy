<?php

    require_once ('otun-admin/php/dbfunctions/connect.inc.php');

    $sqlpost = "SELECT * FROM `ads_table` WHERE `id` != '3' AND `flag` != '0'";
    if(!$result = $db->query($sqlpost)){
        die('There was an error running the query [' . $db->error . ']');
    }

    echo '<div class="vce-sticky">
        <div id="mks_ads_widget-3" class="widget mks_ads_widget">
            <h4 class="widget-title">Order For Yours</h4>
            <ul class="mks_adswidget_ul small">';

    while($row = $result->fetch_assoc()){
        echo '
            <li data-showind="0">
                <a href="'.$row["adslink"].'" target="_blank">
                    <img src="'.$row["adslinkimg"].'" alt="'.$row["alt"].'" width="125"  height="125"/>
                </a>
            </li>
        ';
    }

    echo '
            </ul>
        </div>
        </div>';
 ?>
