<?php
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM test WHERE id = $id"; 

if (mysqli_query($conn, $sql)) {
   header("location: dashboard.php");
    exit;
} else {
    echo '<script>alert("Xoá sản phẩm không thành công");</script>';
}
?>