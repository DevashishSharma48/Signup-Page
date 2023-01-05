<?php
include('db_connection.php');

$sql = mysqli_query($conn,"DELETE FROM form WHERE id='".$_SESSION['id']."'");

echo"Data Deleted";

mysqli_close($conn);


?>