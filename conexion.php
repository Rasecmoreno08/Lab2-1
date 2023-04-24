<?php
	function conexion(){
	$host = "host=containers-us-west-170.railway.app";
	$port = "port=5797";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=vNnF8btMoCUig3PHp2nw";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>