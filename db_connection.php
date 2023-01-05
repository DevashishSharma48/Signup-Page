
<?php

session_start(); 	
$conn = new mysqli('localhost','root','','data');
	if(!$conn){
		die("connection is failed " . 
		mysqli_connect_error());
	}
?>


