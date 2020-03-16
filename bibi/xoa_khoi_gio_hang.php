<?php
include 'config.php';
$id = $_GET['id'];
$userID =$_SESSION['id'];
$sql = "DELETE FROM giohang WHERE productID = $id AND userID=$userID"; 

if (mysqli_query($conn, $sql)) {
   header("location: giohang.php");
    exit;
} else {
    echo '<script>alert("Xoá sản phẩm không thành công");</script>';
}
?>