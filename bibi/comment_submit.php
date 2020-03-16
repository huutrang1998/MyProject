
<?php
  include 'config.php';
  if((isset($_POST['acp'])==true) && isset($_SESSION['name'])==true)
  {
    $username = $_SESSION['name'];
     $comment = $_POST["comment"];;
    $sql = "INSERT INTO comment (username,noidung) VALUES ('$username','$comment') "; 
     mysqli_query($conn,$sql);
      header("location:trangcanhan.php");
  }
  else
  {
    header("location:dangnhap.php");
  }
?>  