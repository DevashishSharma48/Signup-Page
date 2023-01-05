<?php
	include('check_session.php');
?>
<?php
	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('login.php');
		exit();
	}
	include('db_connection.php');
	$query=mysqli_query($conn,"select * from form where id='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
	
?>
<!DOCTYPE html>
<html>
<head>
<title> Login Bootstrape</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width-device-width, initial-scale=1"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
.container{
	background: lightgreen;
  margin: auto;
  text-align: center;
  width: 400px; 
  padding:30px;
}
</style>
</head>
<body class="bg-success">
	<h2 class=" mt-3 text-center text-white"> Login Success</h2><br>
	<div class=" form-outline mb-4"/>
	<div class= "container py-5 h-100">
	<section>
	<?php echo"Welcome Man to our Website!!". "<br>" .$row['first_name']; ?>
	<?php echo $row['last_name']; ?>
	<br>
	<a href="logout.php"  style="width:100%" class="btn btn-success btn-lg ">Logout</a>
	
	</section>
	</div>
</body>
</html>

