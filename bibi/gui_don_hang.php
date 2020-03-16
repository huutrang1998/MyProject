<?php
include 'config.php';
$id = $_GET['id'];
$sql= "INSERT INTO donhang 
SELECT * FROM giohang WHERE userID = $id";
mysqli_query($conn, $sql);
 $sql = "DELETE FROM giohang WHERE userID = '$id'"; 
   if(mysqli_query($conn, $sql)){
       header("location:trangcanhan.php");
   }
   else{
       echo '<script>alert("Có lỗi đã xảy ra vui lòng thực hiện lại");</script>';
   }
?>
