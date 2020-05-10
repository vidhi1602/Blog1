<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM user");
$record = mysqli_query($conn,"SELECT * FROM login");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
td {
	padding: 10px;
}
.headding {
	background-color: #333333;
	color: #fff;
}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<table border="1" style="width: 100%; border: none;" class="table table-light table-hover col-sm-6 col-md-6 text-center">
	<tr class="headding">
		<td>Id</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Gender</td>
		<td>Phone Number</td>
	</tr>

	<?php
		while($row= mysqli_fetch_array($result)){
	    
	?>

	<tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['firstname'];?></td>
		<td><?php echo $row['lastname'];?></td>
		<td><?php echo $row['gender'];?></td>
		<td><?php echo $row['mobile'];?></td>
	</tr>

	<?php
	}
	?>



</table>
<table border="1" style="width: 100%; border: none;" class="table table-light table-hover col-md-6 col-sm-6 text-center">
	<tr class="headding">
		<td>Username</td>
		<td>Password</td>
	</tr>

	<?php
		while($data= mysqli_fetch_array($record)){
	    
	?>

	<tr>
		<td><?php echo $data['username'];?></td>
		<td><?php echo $data['password'];?></td>
	</tr>

	<?php
	}
	?>

</table>
		</div>
		<a href="form.php" class="btn btn-block border">Add Users</a>
	</div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>