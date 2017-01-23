<?php

    $host = 'localhost';
    $username = 'PoG';
    $password = 'phpmyadmin';
    //$database = 'otunwrit_otundataotun';
    $db = new mysqli($host, $username, $password);
    if($db->connect_errno > 0){
        die('Unable to connect to server [' . $db->connect_error . ']');
    }

    $sql = "CREATE DATABASE IF NOT EXISTS dbofotunremmy";
    if($db->query($sql) === true){
        echo "Database created successfully";
    } else{
        echo "Error while creating databse";
    }



    $db->close();
?>
