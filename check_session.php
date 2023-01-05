<?php

	
	
?>

<?php
if(strlen($_SESSION['id']< 1)){ 
	echo"session timeout<br> login again<br>";
	header('login.php');
	echo "<a href='login.php'> Login here </a>";
	exit();
 }

?>