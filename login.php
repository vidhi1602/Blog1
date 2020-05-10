
<?php  
include_once 'connection.php';

if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];


$record = mysqli_query($conn,"SELECT * FROM login WHERE username='".$username."' and password='".$password."'");
$data= mysqli_fetch_array($record);
$usernamedata=$data['username'];
$passworddata=$data['password'];
$userid =$data['id'];

if ($usernamedata==$username){
  if ($passworddata==$password) {
    header("location: index1.php");


  } else{
    echo "invalid password";
    }
}else{
  echo "user doesn't exist";
  }

 } 

?>
