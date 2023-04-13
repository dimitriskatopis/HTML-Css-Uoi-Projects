<?php 
$server = "127.0.0.1";
$user ="root";
$pass ="";
$db = "ask2";

function connect_db() {
	global $server ;
	global $user;
	global $pass;
	global $db;


	$conn = new mysqli($server,$user,$pass,$db);
	return $conn;

}
?>