<?php
include "connection.php";

$email =  mysqli_real_escape_string ($con, $_POST['email']);
$firstname  =  mysqli_real_escape_string ($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string ($con, $_POST['lastname']);
$country = mysqli_real_escape_string ($con, $_POST['country']);
$phonenumber = mysqli_real_escape_string ($con, $_POST['phonenumber']);
$invest = mysqli_real_escape_string ($con, $_POST['invest']);
$experience = mysqli_real_escape_string ($con, $_POST['experience']);



$query = mysqli_query($con,"INSERT INTO signup VALUES (NULL,'$email','$firstname','$lastname','$country','$phonenumber','$invest','$experience')");



	if($query){
	echo "<script>window.alert('Data added successfully') </script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php?'>";
	
}



?>