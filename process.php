<?php	

include 'db_connection.php';

$fname = $_REQUEST['fname'];


$Lname = $_REQUEST['Lname'];


$Mname=$_REQUEST['Mname'];

$fathername= $_REQUEST['fathername'];

$address= $_REQUEST['address'];

$gender= $_REQUEST['gender'];

$city =$_REQUEST['city'];

$state =$_REQUEST['state'];

$dob =$_REQUEST['dob'];

$phone = $_REQUEST['fphone'];

$pin = $_REQUEST['pin'];

$email = $_REQUEST['femail'];



$password =$_REQUEST['password'];

$sql ="INSERT INTO  form ( first_name, last_name, mother_name, father_name, address_detail, gender, city, state , dob, phone_number, pin, femail, password) VALUES ('".$fname."', '".$Lname."', '".$Mname."', '".$fathername."', '".$address."', '".$gender."', '".$city."', '".$state."', '".$dob."', '".$phone."', '".$pin."', '".$email."', '".$password."' )";


if ($conn->query ($sql) == TRUE) {
echo "New record created successfully <br>";
echo "<a href='login.php'>Login here </a> <br>";
echo "<a href='signup.php'>Signup here </a>";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
	
?>

