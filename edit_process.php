 <?php
include_once("db_connection.php");
if(isset($_POST['update'])){
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$first_name = mysqli_real_escape_string($conn, $_POST['fname']);
	$last_name = mysqli_real_escape_string($conn, $_POST['Lname']);
	$mother_name = mysqli_real_escape_string($conn, $_POST['Mname']);
	$father_name = mysqli_real_escape_string($conn, $_POST['fathername']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$state = mysqli_real_escape_string($conn, $_POST['state']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$phone_number = mysqli_real_escape_string($conn, $_POST['fphone']);
	$pin = mysqli_real_escape_string($conn, $_POST['pin']);
	$femail = mysqli_real_escape_string($conn, $_POST['femail']);	
	$password = mysqli_real_escape_string($conn, $_POST['password']);
if(empty($first_name) || empty($last_name) || empty($mother_name) || empty($father_name) || empty($address)  || empty($city) || empty($state)|| empty($dob) || empty($phone_number) || empty($pin) || empty($femail) || empty($password)){
	
if(empty($first_name)) {
	echo ' First Name field is empty.<br>';
}
if(empty($last_name)) {
	echo 'Last Name field is empty.<br>';
}
if(empty($mother_name)) {
	echo 'Mother Name is empty.<br>';
	}		
if(empty($father_name)) {
	echo 'father_name field is empty.<br>';
	}
if(empty($address)) {
	echo 'Address field is empty.<br>';
	}
if(empty($gender)) {
	echo 'Gender field is empty.<br>';
	}	
if(empty($city)) {
	echo 'City field is empty.<br>';
	}		
if(empty($state)) {
	echo 'State field is empty.<br>';
	}	
if(empty($dob)) {
	echo 'Enter DOB <br>';
	}
if(empty($phone_number)) {
	echo 'Phone Number field is empty.<br>';
	}	
if(empty($pin)) {
	echo 'PIN Code field is empty.<br>';
	}	
if(empty($femail)) {
	echo 'Email field is empty.<br>';
	}		
if(empty($password)) {
	echo 'Password field is empty.<br>';
	}		
} else {
	$result = mysqli_query($conn, "UPDATE form SET first_name='$first_name', last_name='$last_name', mother_name='$mother_name', father_name='$father_name', address_detail='$address', city='$city', state='$state', dob='$dob', phone_number='$phone_number', femail='$femail', password='$password' WHERE id='".$_SESSION['id']."'");
	header("Location: login.php");
	echo "Done.";
}
}

?>