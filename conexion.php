<?php
	function conexion(){
	$host = "containers-us-west-170.railway.app";
	$port = "5797";
	$dbname = "railway";
	$user = "postgres";
	$password = "vNnF8btMoCUig3PHp2nw";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>