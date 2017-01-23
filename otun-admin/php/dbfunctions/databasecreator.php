<?php
    $host = 'localhost';
    $username = 'PoG';
    $password = 'phpmyadmin';
    $db = new mysqli($host, $username, $password);
    if($db->connect_errno > 0){
        die('Unable to connect to server [' . $db->connect_error . ']');
    }
    else {
        echo "created connection to server";
    }
    $sql = "CREATE DATABASE dbofotunremmy";
    if($db->query($sql) === true){
        echo "Database created successfully";
    } else{
        echo "Error while creating databse";
    }



    $db->close();
?>
