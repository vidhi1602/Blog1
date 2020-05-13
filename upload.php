<?php
session_start();
include_once 'connection.php';

if (isset($_POST['submit'])) {
 
  $title = $_POST['title'];
  $content = $_POST['content'];
  $file = $_FILES['file'];
 $category = $_POST['category'];
  $userid = $_SESSION['id'];



  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 1000000) {
          $fileDestination = 'upload/'.$fileName;
          copy($fileTmpName, $fileDestination);

          $query = "INSERT INTO post (title,content,file,category,user_id) VALUES ('$title','$content','$fileDestination','$category','$userid')";

          if (mysqli_query($conn, $query)) {
            header("location:index1.php");
          }else {
            echo ("error" .mysqli_error($conn));
          }
        } else {
          echo '<script>alert("Your file is too big.!"); window.location.href="form.php";</script>';
        } 
    } else {
      echo '<script>alert("There was an error uploading your file.!"); window.location.href="form.php";</script>';
    }
  } else {
    echo '<script>alert("You can not upload this type of file.!"); window.location.href="form.php";</script>';
  }
}

?>