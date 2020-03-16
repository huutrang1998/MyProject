<?php 
include 'config.php';
$id = $_GET['id'];
$userID= $_SESSION['id'];
$sql=" SELECT * FROM giohang where userID = $userID AND productID =$id ";
$old = mysqli_query($conn,$sql);
if(mysqli_num_rows($old)>0){
  $number = mysqli_fetch_assoc($old)['number'];
  $number=$number+1;
  $sql= "UPDATE giohang SET number ='$number' WHERE userID=$userID AND productID=$id";
}
else{
    $number=1;
$sql = "INSERT INTO giohang (userID, productID, number, state) VALUES ('$userID','$id',$number,null)"; 
}
if (mysqli_query($conn, $sql)) {
    header("location:giohang.php");
     exit;
 } else {
    header("location:dangky.php");
 }
?>
