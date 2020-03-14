<?php
include 'config.php';
	if(!$conn){
		header("location: dashboard.php");
	}
	
	if(isset($_POST['insert'])){
		$name=$_POST['name'];
		$price=$_POST['price'];
		$description =$_POST['description'];
		if($_FILES['image']['tmp_name']!=null){
			$file=addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$sql= "INSERT INTO test (id,name,price, description, Data) values (null,'$name','$price','$description','$file')";
			if(mysqli_query($conn,$sql)){
				header("location: dashboard.php");
			}else{
				echo  '<img src="data:image/jpeg;base64,' . base64_encode($file) . '" style="width: 150px;border-radius:10px;">';
			}	
		}else{
			echo '<script>alert("Hãy tải một ảnh minh hoạ cho sản phẩm");</script>';
		}
	}

?>
