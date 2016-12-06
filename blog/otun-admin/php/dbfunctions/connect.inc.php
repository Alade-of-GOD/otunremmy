<?php

	$host = 'localhost';
	$username = 'PoG';
	$password = 'phpmyadmin';
	$database = 'otunsdb';
	$db = new mysqli($host, $username, $password, $database);
	if($db->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
	}

?>
