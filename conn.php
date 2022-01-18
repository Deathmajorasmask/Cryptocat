<?php
 
//MySQLi Procedural

//$conn = mysqli_connect("localhost","user","password","db_name");
$conn = mysqli_connect("localhost","root","","chat_system");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>