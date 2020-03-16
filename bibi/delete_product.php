<?php
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM giohang WHERE productID = $id"; 
mysqli_query($conn,$sql);
$sql = "DELETE FROM donhang WHERE productID = $id"; 
mysqli_query($conn,$sql);
$sql = "DELETE FROM test WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
   header("location: dashboard.php");
    exit;
} else {
    echo '<script>alert("Xoá sản phẩm không thành công");</script>';
}
?>