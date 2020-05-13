<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
	 $gender= $_POST['gender'];
	 $mobile = $_POST['mobile'];
	 $username = $_POST['username'];
	 $password = $_POST['password'];

		
 
	 	

	 
	if (mysqli_query($conn,"INSERT INTO user (firstname,lastname,gender,mobile,username,password) VALUES ('$firstname','$lastname','$gender','$mobile','$username','$password')")) {
		echo "inserted";
	}else {
		echo "not inserted.";
	}
	


	}
	

	

?>