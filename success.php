<?php

	include('db_connection.php');
	include('check_session.php');
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
  margin: auto;
  text-align: center;
  width: 400px; 
  padding:30px;
}
</style>
</head>
<body class="">
	<h2 class=" mt-3 text-center "> Login Success</h2><br>
	<div class=" form-outline mb-4"/>
	
	<section>
	<table class="table table-striped table-borderrer">
	<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">mother_name</th>
      <th scope="col">father_name</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">DOB</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Pin Code</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
	  <th scope="col"> Update/Delete</th>
    </tr>
  </thead>
  
<?php	
	$sql = "SELECT * FROM form where id='".$_SESSION['id']."'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo"<tr>";
			echo"<td>" .$row['id']. "</td>";
			echo"<td>" .$row['first_name']. "</td>";
			echo"<td>" .$row['last_name']. "</td>";
			echo"<td>" .$row['mother_name']. "</td>";
			echo"<td>" .$row['father_name']. "</td>";
			echo"<td>" .$row['address_detail']. "</td>";
			echo"<td>" .$row['gender']. "</td>";
			echo"<td>" .$row['city']. "</td>";
			echo"<td>" .$row['state']. "</td>";
			echo"<td>" .$row['dob']. "</td>";
			echo"<td>" .$row['phone_number']. "</td>";
			echo"<td>" .$row['pin']. "</td>";
			echo"<td>" .$row['femail']. "</td>";
			echo"<td>" .$row['password']. "</td>" ;
			echo"<td>";
			echo "<div class='btn-group'>";
            echo "<a class='btn btn-primary' href='./edit.php?id=" .$row['id'] ."'> Edit </a>";
            echo "<a class='btn btn-danger' href='./delete.php?id=" .$row['id'] ."'> Delete</a>";
            echo "</div>";
            echo "</td>";
            echo "</tr>";
			}
			echo "</table>";
	} else { echo "0 results"; }
			$conn->close();
?>
</table>
	<div class="container">
	<a href="logout.php"  style="width:100%" class="btn btn-success btn-lg ">Logout</a>
	</div>
	</section>
	
</body>
</html>
