<?php

    require_once('../../otun-admin/php/dbfunctions/connect.inc.php');
    $d = $_GET['ref'];
    $selectallpost = "UPDATE `otun_posts` SET active = 1 WHERE idofpost = $d";
    if (!$result = $db->query($selectallpost)){
        die('There was an error running the query [' . $db->error . ']');
    }
    else {
        echo '<script type="text/javascript">
                alert("post refetch successfully");
                window.setTimeout(function(){
                    // Move to a new location or you can do something else
                    window.location.href = "../index.php#postview";
                }, 100);
        </script>';
    }

?>
