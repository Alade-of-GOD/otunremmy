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
	else {
		//echo "connection created successfully";
	}
	//46.16.188.12 [main host];
?>
