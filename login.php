<?php
	
	include('db_connection.php');
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


.form {
  background: lightgreen;
  margin: auto;
  text-align: center;
  width: 400px; 
  padding:30px;
}
</style>
</head>
<body class="bg-success">
	<h1 class=" mt-3 text-center text-white"> Login Here</h1>
	<div class= "container py-5 h-100">
		<section>
					<form class="form" action="auth.php" method="POST">
						<h3 class="text-center text-success"> Login</h3>
					
							<div class="form-outline mb-4">
							 <input type="email" class="form-control" value="" name="femail" placeholder="Email"  /> 
							</div>
							
							<div class=" form-outline mb-4">
							 <input type="password"  class="form-control" value="" placeholder="Password" name="password" /> 
							</div>
							
							<div class=" form-outline mb-4">
								<a href="signup.php" >Need to Create New Account? Sign Up Here! </a>
							</div>						
			
							<input type="submit"  style="width:100%" class="btn btn-success btn-lg " value="Login" name="login">
						
							
					</form>
		</section>
	</div>	
</body>
</html>