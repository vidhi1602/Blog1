
<?php  
include_once 'connection.php';
  session_start();
if(isset($_POST['save'])){
$username=$_POST['username'];
$password=$_POST['password'];


$record = mysqli_query($conn,"SELECT * FROM user WHERE username='".$username."' and password='".$password."'");
$data= mysqli_fetch_array($record);
if(!is_null($data)){
$usernamedata=$data['username'];
$passworddata=$data['password'];

$userid =$data['id'];
$db_uname = $data['username'];
if ($usernamedata==$username){
  if ($passworddata==$password) {
 
   $_SESSION['id'] = $userid;
   $_SESSION['username'] = $db_uname;
   
   header("location:index1.php");
  } else{
    echo "invalid password";
    }
}else{
  echo "user doesn't exist";
  }

}




 } 
if (isset($_GET['logout'])) {

              unset($_SESSION['id']);
              unset($_SESSION['username']);
            
              
                  session_destroy();
              
              header("location: index1.php");
          }
?>
