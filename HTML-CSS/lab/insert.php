

<?php
include_once("connect.php");
$mysqli = connect_db();

$n = $_POST['n'];
$e = $_POST['e'];

if ($stmt = $mysqli->prepare("INSERT emails(name,email)VALUES (?,?)")) {
	$stmt->bind_param("ss",$n ,$e);
	$stmt->execute();
	$stmt->close();

}else echo "error";

?>