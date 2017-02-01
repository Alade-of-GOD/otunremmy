<?php

//$host = '46.16.188.12';
//$username = 'otunwrit_theuser';
//$password = 'PhemmyAlade_of_GOD106';
//$database = 'otunwrit_dbofotunwritesotunwritesdbdbofotunwrites';
global $dbo;
$info['dbhost_name'] = "46.16.188.12";
$info['database'] = "otunwrit_dbofotunwritesotunwritesdbdbofotunwrites"; // database name
$info['username'] = "otunwrit_theuser";  // userid
$info['password'] = "PhemmyAlade_of_GOD106";   // password

$dbConnString = "mysql:host=" . $info['dbhost_name'] . "; dbname=" . $info['database'];

$dbo = new PDO($dbConnString, $info['username'], $info['password']);
$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
//$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$error = $dbo->errorInfo();
if($error[0] != "") {
}

?>
