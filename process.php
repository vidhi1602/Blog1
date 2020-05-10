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

		
 
	 	

	 	$sql = "INSERT INTO user (id,firstname,lastname,gender,mobile)
	 		VALUES (NULL, '$firstname','$lastname','$gender','$mobile')";
	 	$sql1 = "INSERT INTO login (id,username,password)
	 		VALUES (NULL, '$username','$password')";
	 
	 if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
	 	
	 
		header("location:read.php");
	 }else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	
	


	}
	

	

?>