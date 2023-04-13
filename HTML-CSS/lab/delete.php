<?php 
include_once("connect.php");
$mysqli =connect_db();

if ($stmt = $mysqli->prepare ("DELETE FROM emails WHERE id = ? LIMIT 1 ")) {

	$stmt->bind_param("i",$id);
	$stmt->execute();
	$stmt->close();

}
else echo "ERROR";

?>