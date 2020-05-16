<?php
include_once 'connection.php';
session_start();
$cat = mysqli_query($conn,"SELECT * FROM category");
$drop=mysqli_query($conn,"SELECT * FROM category");
$drop1=mysqli_query($conn,"SELECT * FROM category");
$type=$_GET['id'];

if (isset($type)) {
$inner = mysqli_query($conn,"SELECT post.id,post.title,post.content,post.file,post.category,post.createdat, user.name FROM post
INNER JOIN user ON post.user_id = user.id  WHERE category = $type");

}else{
  $inner = mysqli_query($conn,"SELECT post.id,post.title,post.content,post.file,post.category,post.createdat, user.name FROM post
INNER JOIN user ON post.user_id = user.id");
}




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
<style type="text/css">
.nav{
	padding: 10px;
   	padding-left: 112px;
	}
.btn{
	padding-left: 20px;
   	padding-right: 20px;
   	border-radius: 20px;
	}
.sidebar {
  margin: 0;
  padding: 0;
  width: 280px;
  background-color:white;
  height: 100%;
  overflow: auto;
  float: right;
}
.dot {
    height: 10px;
    width: 10px;
    background-color: red;
    border-radius: 50%;
    display: inline-block;
  }
  .sec{
    position: relative;
    right: 0;
    top:-22px;
}

.counter.counter-lg {
    top: -7px !important;
}

.sidebar a {
  display: block;
  color: gray;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: ;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color:#C1C2CC;
  color: gray;
}
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
.pad{
	padding: 20px;
}
.icon{
	padding-right: 10px;
}

	</style>

</head>
<body>
<div>
	<!-- NAVIGATIONBAR -->

<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top text-center nav">
	<div class="col-sm-2 col-md-2 col-lg-2">
  		<h2><b style="color:rgb(185, 43, 39);;">Quora</b></h2>
	</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-5 mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="far fa-list-alt icon"></i>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="far fa-edit icon"></i>Answer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"><i class="fas fa-users icon"></i>Spaces</a>
      </li>
       <li class="nav-item">
        <a class="nav-link disabled" href="#"><i class="far fa-bell icon"></i>Notifications<span class="dot sec counter counter-lg"></span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 ml-5" style="width: 300px;" type="search" placeholder="Search Quora">
    	
    	<!-- Button to Open the Modal -->
      <?php if (!isset($_SESSION['id'])){
        ?>
        <button type="button" class="btn-danger" data-toggle="modal" data-target="#myModal" style="border-radius: 13px; border: none;"><i class= "fa fa-user-circle fa-2x" aria-hidden="true" style="padding-right:5px;"></i></button>

      <?php
      }

      ?>
  		
    </form>
  </div>
<form class="form-inline">
 <div style="padding-left: 5px;">
	   <!-- Button trigger modal -->
     <button class="btn btn-danger" type="button" data-toggle="modal" data-target=<?php if (!isset($_SESSION['id'])) { echo "#exampleModalCenter1"; } else { echo "#exampleModal"; } ?> >Create Blog</button>
  </div>

  <div style="padding-left: 5px;">
    <?php 
              if(isset($_SESSION['id'])) { 
                ?>
               <a href="login.php?logout" class="btn btn-danger my-2 my-sm-0">Logout</a>

              <?php 
              } else { 
              ?>
              
              <button class="btn btn-danger my-2 my-sm-0" type="button" data-toggle="modal" data-target="#exampleModalCenter1">Login</button>
              
              <?php 
              } 
              ?>
   <!-- Button trigger modal -->
     
</div>
</form>
 
</nav>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload an Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="upload.php" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control fadeIn second" name="title" placeholder="Enter your Title" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control fadeIn second" name="content" placeholder="Enter Your Content">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">select categary</label>
                <select name="category">
                  <?php
                       while($row1= mysqli_fetch_array($drop)){
                       ?>
                  <option value="<?php echo $row1['id'];?>"><?php echo $row1['cat_name'];?></option>
                  <?php
                      }
                  ?>
                </select>
            </div>
            <div class="input-group">
              <div class="custom-file">
                   <input type="file" class="custom-file-input" id="inputGroupFile01"
                    aria-describedby="inputGroupFileAddon01" name="file" required>
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">Create Post</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
  <div class="modal-dialog fadeInDown" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle1">User Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="login.php">
          <div class="wrap-input100 validate-input">
            <span class="label-input100">UserName</span>
            <input type="text" name="username" placeholder="Enter userName" required>
            
          </div><br>
          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Type your password" required>  
          </div><br>
  <div class="form-group mt-2 text-center">
    <button type="submit" name="save" class="btn btn-primary btn6">Submit</button>
  </div>
</form>      
</div>
    </div>
  </div>
</div>

<!-- /NAVIGATIONBAR --> 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog fadeInDown" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModal">User Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="process.php">
          <div class="wrap-input100 validate-input">
            <span class="label-input100">First Name</span>
            <input class="input100" type="text" name="firstname" pattern="[A-z]{1,15}" title="please enter character in uppercase" style="text-transform: capitalize;"  placeholder="Enter your First Name" required>
            
          </div><br>
          <div class="wrap-input100 validate-input">
            <span class="label-input100">Last Name</span>
            <input class="input100" type="text" name="lastname" pattern="[A-z]{1,15}" title="please enter character in uppercase" style="text-transform: capitalize;"  placeholder="Enter your Last Name" required>
            
          </div><br>
          <div class="wrap-input100 validate-input">
            <span class="label-input100">Gender</span><br><br>
              <input type="radio" name="gender" value="Male" required>Male
              <input type="radio" name="gender" value="Female" required>Female
            
          </div><br>
          <div class="wrap-input100 validate-input">
            <span class="label-input100">Username</span>
            <input type="text" name="username" placeholder="Enter userName" required>
            
          </div><br>
          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Type your password" required>
            
          </div><br>
          <div class="wrap-input100 validate-input">
            <span class="label-input100">Phone Number</span>
            <input class="input100" type="number" name="mobile" placeholder="Enter your Number" required>
            
          </div><br>
  <div class="form-group mt-2 text-center" style="">
    <button type="submit" name="save" class="btn btn-primary btn6">Submit</button>
  </div>
</form>      
</div>
    </div>
  </div>
</div>
<!-- SIDEBAR -->

<div class="section">
	<div class="container" style=" padding-top: 80px;">
		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class="sidebar">
					<?php

  					 while($row2= mysqli_fetch_array($cat)){
 					 ?>
				  <a href="?id=<?php echo $row2['id']; ?>&cat_name=<?php echo $row2['cat_name'];?>"><i class="fas <?php echo $row2['class'];?>"></i><?php echo $row2['cat_name'];?></a>
				  <?php
  						}
  					?>

				</div>	
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<div class="container">
					<div class="row border pad">
						<p style="color: gray; ">Answer . Popular</p>

                    <?php if (isset($_SESSION['id'])){
          ?>
                 <div class="row ml-2">
              <form class="text-center" method="post" action="upload.php" enctype="multipart/form-data">
               <div class="form-inline"> 
                    <input type="text" class="form-control fadeIn second" name="title" placeholder="Enter your Title" required>
                    <div class="pl-2">
                    <input type="text" class="form-control fadeIn second" name="content" placeholder="Enter Your Content">
                    </div>
                </div><br>
            <div class="form-group">
                <label for="exampleFormControlSelect1">select categary</label>
                <select name="category">
                  <?php
                       while($row2= mysqli_fetch_array($drop1)){
                       ?>
                  <option value="<?php echo $row2['id'];?>"><?php echo $row2['cat_name'];?></option>
                  <?php
                      }
                  ?>
                </select>
            </div>
            <div class="input-group">
              <div class="custom-file">
                  <div class="fallback">
                      <input type="file" class="custom-file-input dropzone" id="inputGroupFile01"
                     src="./path/to/dropzone.js" name="file" required>
                    <label class="custom-file-label dropzone" for="inputGroupFile01">Choose file</label>
                  </div>
              </div>
            </div><br>
            <div class="text-center">
                <button type="submit" class="btn-d btn-danger" name="submit">Create Post</button>
            </div>
              </form>
            </div>
 
      <?php
    }
      ?>    
            <?php
                       while($info = mysqli_fetch_array($inner)){
                       ?>
						<h5 class="pt-3"><a href="" style="color: black;"><?php echo $info['title'];?></a></h5><br><br>
            <div class="row">
                    <div class="col-sm-2 col-md-2 col-lg-2">
                     <img src="assets/img/user2.jpeg" width="100%" style="border-radius: 30px;">
                    </div>
                    <div class="col-sm-10 col-md-10 col-lg-10">

                      <h6><?php echo $info['name'];?></h6>
                      <p><?php echo $info['createdat']; ?></p>
                    </div>
                  </div>
						
						<h7 class="pb-3"><?php echo $info['content'];?></h7>
						<img src="<?php echo $info['file'];?>" width="100%">

            <?php
              }
            ?>
						<h7 class="pt-3">Satya Nadella also has two daughters. One of them suffers from a learning disability. Due to the absence of schools pertaining to the special needs of the girl, his wife had to shift to Vancouver for about 5 years for their daughter's education.<br>Nadella says that his kids with special needs and the unexpected challenges and joy of raising them has changed how he relates to people and also instilled a sense of empathy in him.<br>Salute to him🙏<br>Note: The answer is intended to shed light into Satya Nadella's life. Everything mentioned are absolutely true facts unknown to many.</h7>
						<p><a href="">685.5k . viewsView . UpvotersView Sharers</a></p>
					</div>
				</div>	
			</div>
			<div class="col-sm-3 col-md-3 col-lg-3">
				<div class=" row border pad">
					<h5>Set Up Your<br> Account</h5>
					<hr>
					<hr>
					<div class="form-check">
     					<label class="form-check-label">
					        <input type="checkbox" class="form-check-input" disabled>Follow 10 more topics<br><hr>
					        <input type="checkbox" class="form-check-input" disabled>Upvote 5 more good answers<br>
					        <hr>
					        <input type="checkbox" class="form-check-input" disabled>Follow 10 more topics<br><hr>
					        <input type="checkbox" class="form-check-input" disabled>Ask a question<br><hr>
					        <input type="checkbox" class="form-check-input" disabled>Add 3 credentials<br><hr>
					        <input type="checkbox" class="form-check-input" disabled>Answer a Question<br><hr>
     					</label>
   					</div>
				</div>	
			</div>
		</div>
	</div>
</div>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>