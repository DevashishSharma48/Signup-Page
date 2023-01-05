<?php
	if(isset($_POST['login'])){
		
		
		include('db_connection.php');
	
		$femail=$_REQUEST['femail'];
		$password=$_REQUEST['password'];
	
		$query=mysqli_query($conn,"select * from `form` where femail='$femail' && password='$password'");
	
		if (mysqli_num_rows($query) == 0){
			
			echo "ID and Password incorrect <br> session time out.";
			echo "<a href='login.php'><br> Login here </a>";
		}
		else{
			$row=mysqli_fetch_array($query);			
			$_SESSION['id']=$row['id'];
			header('location:success.php');
		}
	}
?>