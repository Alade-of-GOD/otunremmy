<?php
global $dbo;
$info['dbhost_name'] = "localhost";
$info['database'] = "otunsdb"; // database name
$info['username'] = "PoG";  // userid
$info['password'] = "phpmyadmin";   // password

$dbConnString = "mysql:host=" . $info['dbhost_name'] . "; dbname=" . $info['database'];

$dbo = new PDO($dbConnString, $info['username'], $info['password']);
$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
//$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$error = $dbo->errorInfo();
if($error[0] != "") {
}

?>
