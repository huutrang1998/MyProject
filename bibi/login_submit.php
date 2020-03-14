
<?php session_start(); ?>
<?php
  include 'config.php';
   if( isset($_POST['acp']) &&  $_POST["username"] != '' && $_POST["password"] != '')
   {
     $username= $_POST["username"];
     $password= $_POST["password"];
     $password= md5($password);
    
     $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
     $user= mysqli_query($conn,$sql);
     if(mysqli_num_rows($user)>0){
      $_SESSION['name']=$username;
     header("location:trangcanhan.php");
    
     }
     else
     {
      echo "<script>alert('Sai tên tài khoản hoặc mật khẩu!'); window.location = 'dangnhap.php'</script>";
     }
   }
   else{
   header("location:dangnhap.php");
   }
?>  