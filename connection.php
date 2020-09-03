<!DOCTYPE html>
<html lang="en">
<body background="fond.JPG" TEXT= red> 

<?php

session_start();

$host = "host=www.eecs.uottawa.ca";
$port = "port=15432";
$dbname = "dbname=mrafe084";
$credentials = "user=mrafe084 password=U4ans57m9m";

$_SESSION["host"] = $host;
$_SESSION["port"] = $port;
$_SESSION["db"] = $dbname;
$_SESSION["credentials"] = $credentials;




function connectDB($host, $port, $dbname, $credentials) {

	$db = pg_connect ( "$host $port $dbname $credentials" );
	if (! $db) {
		echo "Error : Unable to open database\n";
	} else {
		echo "Opened database successfully\n";
	}
}

connectDB ($host, $port, $dbname, $credentials);

?>