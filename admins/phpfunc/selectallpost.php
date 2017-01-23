<?php

    require_once('../otun-admin/php/dbfunctions/connect.inc.php');
    $selectallpost = "SELECT * FROM `otun_posts`";
    if (!$result = $db->query($selectallpost)){
        die('There was an error running the query [' . $db->error . ']');
    }
    $k = 0;
    while ($row = $result->fetch_assoc()){
        $k++;
        $postcontent = nl2br($row['contentofpost']);
        $contentshort = '';
        $contentarr = explode(' ', trim($postcontent));
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        switch ($row['active']) {
            case 0:
                $what = '<td><a href="phpfunc/postrefetch.php?ref='.$row['idofpost'].'" class="btn btn-primary">Refetch</a></td>';
                break;

            default:
                $what = '<td><a href="phpfunc/postdelete.php?del='.$row['idofpost'].'" class="btn btn-warning">Hide</a></td>';
                break;
        }
        echo '
        <tr>
            <td id="'.$row['idofpost'].'">'.$k.'</td>
            <td>'.$row['titleofpost'].'</td>
            <td>'.$row['category'].'</td>
            <td>'.$contentshort.'</td>
            <td>'.$row['authorofpost'].'</td>
            <td class="text-right">'.$row['dateofpost'].'/'.$row['timeofpost'].'</td>
            <td><a href="postedit.php?ed='.$row['idofpost'].'" class="btn btn-default">Edit</a></td>
            '.$what.'
        </tr>
        ';
    }

?>
