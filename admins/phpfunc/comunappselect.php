<?php

    $u = $_SESSION['userN'];
    require_once('../otun-admin/php/dbfunctions/connect.inc.php');
    $newCom = "SELECT * FROM `otun_comments` LEFT JOIN `otun_posts` ON `postid` = `idofpost` WHERE `approved` = 0";
    if (!$rc = $db->query($newCom)){
        die('There was an error running the query [' . $db->error . ']');
    }
    while ($rwc = $rc->fetch_assoc()){
        $who = $rwc['commentby'];
        $what = $rwc['commentonpost'];
        $tit = $rwc['titleofpost'];
        //$on =
        echo '
        <li>
            <div class="row">
                <div class="col-xs-9"><p><i class="fa fa-user activity-image"></i>'.$who.' said <em><span>"'.$what.'"<span/></em> on <strong>'.$tit.'</strong></p></div>
                <div class="col-xs-3 text-right">
                    <a href="phpfunc/delcomment.php?br='.$rwc['idofcomment'].'&rb='.$rwc['postid'].'" title="delete"><i class="fa fa-trash-o"></i></a>
                    <a href="phpfunc/seencomment.php?br='.$rwc['idofcomment'].'" title="approve"><i class="fa fa-check"></i></a>
                </div>
            </div>
        </li>
        ';
    }

?>
