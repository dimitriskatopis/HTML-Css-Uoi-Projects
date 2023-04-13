<?php 
include_once ("connect.php");
$mysqli = connect_db();

if ($result = $mysqli->query ("SELECT * FROM emails")) {
	if ($result->num_rows >0){
		while ($row = $result->fetch_object()){
			echo $row["name"];
			echo $row["email"];

		}
	}
}
?>