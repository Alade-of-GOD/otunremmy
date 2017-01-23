<?php
    //$host = '46.16.188.12';
    //$username = 'otunwrit_theuser';
    //$password = 'PhemmyAlade_of_GOD106';
    //$database = 'otunwrit_dbofotunwritesotunwritesdbdbofotunwrites';
    $host = 'localhost';
    $username = 'PoG';
    $password = 'phpmyadmin';
    $database = 'otunwrit';
    $db = new mysqli($host, $username, $password, $database);
    if($db->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }

    //posts table
    $sql = "CREATE TABLE IF NOT EXISTS otun_posts (idofpost INT(11) UNSIGNED auto_increment PRIMARY KEY,
        titleofpost VARCHAR(100) NOT NULL,
        contentofpost TEXT NOT NULL,
        imageofpost VARCHAR(500) NOT NULL,
        category VARCHAR(100) NOT NULL,
        authorofpost VARCHAR(30) NOT NULL,
        numberofcomments INT(11) NOT NULL,
        numberoflikes INT(11) NOT NULL,
        viewsofpost INT(11) NOT NULL,
        dateofpost DATE NOT NULL,
        timeofpost VARCHAR(10) NOT NULL,
        active INT(1) NOT NULL DEFAULT 1) ";

    if ($db->query($sql) === TRUE) {
        //echo "Table otun_posts created successfully";
    } else {
        echo "Error creating table: " . $db->error;
    }

    //comments table
    $sql = "CREATE TABLE IF NOT EXISTS otun_comments (idofcomment INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        postid INT(11) NOT NULL,
        commentonpost VARCHAR(1000) NOT NULL,
        imageofpost VARCHAR(500),
        commentby VARCHAR(25) NOT NULL,
        commentbyemail VARCHAR(30) NOT NULL,
        commentwebpage VARCHAR(100) NOT NULL,
        commentdate DATE NOT NULL,
        commenttime VARCHAR(10) NOT NULL,
        approved INT(11) NOT NULL)";

    if ($db->query($sql) === TRUE) {
        //echo "Table otun_comments created successfully";
    } else {
        echo "Error creating table: " . $db->error;
    }

    //otun_authors table
    $sql = "CREATE TABLE IF NOT EXISTS otun_authors (idofauthor INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nameofauthor VARCHAR(25) NOT NULL,
        usernameofauthor VARCHAR(25) NOT NULL,
        emailofauthor VARCHAR(50) NOT NULL,
        noteonauthor TEXT(500) NOT NULL,
        gravatarofauthor VARCHAR(500) NOT NULL)";

    if ($db->query($sql) === TRUE) {
        //echo "Table otun_authors created successfully";
    } else {
        echo "Error creating table: " . $db->error;
    }

    //broadcast table
    $sql = "CREATE TABLE IF NOT EXISTS broadcast (id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user VARCHAR(25) NOT NULL,
        sender VARCHAR(25) NOT NULL,
        flag INT(1) NOT NULL,
        message TEXT(500) NOT NULL,
        broadcastdate DATE NOT NULL,
        broadcasttime INT(10) NOT NULL)";

    if ($db->query($sql) === TRUE) {
        //echo "Table broadcast created successfully";
    } else {
        echo "Error creating table: " . $db->error;
    }

    //adminprofile table
    $sql = "CREATE TABLE IF NOT EXISTS adminprofile (id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fullName VARCHAR(25) NOT NULL,
        userName VARCHAR(25) NOT NULL,
        passWord VARCHAR(100),
        email VARCHAR(50) NOT NULL,
        gravatar VARCHAR(500) NOT NULL,
        priviledge VARCHAR(50) NOT NULL,
        aboutnote TEXT(500) NOT NULL,
        gender VARCHAR(6) NOT NULL,
        location VARCHAR(200) NOT NULL)";

    if ($db->query($sql) === TRUE) {
        //echo "Table adminprofile created successfully";
    } else {
        echo "Error creating table: " . $db->error;
    }

    $db->close();
?>
