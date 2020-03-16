
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
      while ($row = mysqli_fetch_assoc($user)) {
      $_SESSION['name']=$row['username'];
      $_SESSION['id']=$row['id'];
      $_SESSION['fullname']=$row['fullname'];
      $_SESSION['email']=$row['email'];
      $_SESSION['phonenumber']=$row['phonenumber'];

      }
  
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