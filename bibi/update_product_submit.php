<?php
include "config.php";
$id = $_GET['id'];
if ((isset($_SESSION['name']) == false) || ($_SESSION['name'] != "admin")) {
    header("location:dangnhap.php");
}
else
{
    if(isset($_POST['acp'])==true)
    {
       $newName=$_POST['name'];
       $newPrice =$_POST['price'];
       $newDescription =$_POST['description'];
       if($newName==null & $newPrice==null & $newDescription==null)
       {
           header("location: product_update_form.php");
       }
       else
       {
       if($newName!=null)
       {
           $sql= "UPDATE test SET name ='$newName' WHERE id=$id";
           mysqli_query($conn,$sql);
       }
       if($newPrice!=null){
        $sql= "UPDATE test SET price ='$newPrice' WHERE id=$id";
        mysqli_query($conn,$sql);
       }
        if($newDescription!=null){
            $sql= "UPDATE test SET description ='$newDescription' WHERE id=$id";
            mysqli_query($conn,$sql);
        }
        header("location: dashboard.php");
    }
     
  }
}
?>