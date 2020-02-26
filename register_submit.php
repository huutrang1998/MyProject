
<?php
  include 'config.php';
   if( isset($_POST['acp']) && $_POST['name']!= '' && $_POST['username']!= '' && $_POST['password']!= '' && $_POST['repassword']!= '' && $_POST['phonenumber']!= '' && $_POST['address']!= '' )
   {
     $name= $_POST["name"];
     $email=$_POST["email"];
     $username= $_POST["username"];
     $password= $_POST["password"];
     $repassword=$_POST["repassword"];
     $phone_number= $_POST["phonenumber"];
     $address = $_POST["address"];

     if($password!=$repassword)
     {
      header("location:dangky.php");
     }
     else
     {
     $password=md5($password);

     $sql=" SELECT * FROM user where username = '$username' ";
     $old = mysqli_query($conn,$sql);
     if(mysqli_num_rows($old)>0){
       header("location:dangky.php");
     }
     else{
     $sql = "INSERT INTO user  (fullname,email,username,password, phonenumber,address) VALUES ('$name','$email','$username','$password','$phone_number','$address')"; 
     mysqli_query($conn,$sql);
     header("location:huongdan.php");
     }
    }
   }
   else{
     header("location:dangky.php");
   }
?>  