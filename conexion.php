<?php

	function conexion(){

	$host = "containers-us-west-38.railway.app";
	$port = "8029";
	$dbname = "railway";
	$user = "postgres";
	$password = "JIcL9swq3Y5O3TS911yU";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>

