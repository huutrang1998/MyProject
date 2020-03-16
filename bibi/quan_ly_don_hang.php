<!doctype html>
<?php
include "config.php";
if ((isset($_SESSION['name']) == false) || ($_SESSION['name'] != "admin")) {
    header("location:dangnhap.php");
}
?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Bivabi</title>
    <link rel="shortcut icon" type="image/png" href="./assets/img/favicon.ico" cph-ssorder="0">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <link href="https://d255zuevr6tr8p.cloudfront.net/landingpage/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://d255zuevr6tr8p.cloudfront.net/landingpage/assets/css/paper-kit.css" rel="stylesheet">
    <link href="https://d255zuevr6tr8p.cloudfront.net/landingpage/assets/css/demo.css" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,300,700" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://d255zuevr6tr8p.cloudfront.net/landingpage/assets/css/nucleo-icons.css" rel="stylesheet">
    <!-- <link href="./assets/css/xhh.css" rel="stylesheet"> -->
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/paper-kit.css" rel="stylesheet">
    <link href="./assets/css/demo.css" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,300,700" rel="stylesheet" type="text/css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet">
    <style type="text/css">
    #content{
    display:none;
     }
    </style>
   

</head>

<body>
    <div id="navbar-zone"></div>
    <script>
        $("#navbar-zone").load('navbar.php')
    </script>
    <br><br><br>
        <div class="container">
            <br>
            <div class="container" style="text-align:center;border-radius:5px; width:100%;height:100%;">
            <br>
             <button id="toggle" class="btn btn-round btn-danger">Chọn chức năng quản lý</button>
            <div id="content">
                 <a id="toggle" class="btn btn-round btn-danger" style="margin-top: 10px;" href="dashboard.php">Quản lý sản phẩm</a>
                 <a id="toggle" class="btn btn-round btn-danger" style="margin-top: 10px;" href="quan_ly_khach_hang.php">Quản lý khách hàng</a>
                 <a id="toggle" class="btn btn-round btn-danger" style="margin-top: 10px;" href="quan_ly_don_hang.php">Quản lý đơn hàng</a>
            </div>                      
        </div>
            </div>
            <div class="container" style="text-align:center;border-radius:10px;">
            <br><br>

            <div class="container" style="text-align: center;justify-content: center;">
                <h3>Tổng đơn hàng của khách</h3><br><br>
                <?php
                $sql = "SELECT * FROM `donhang`";
                $result = mysqli_query($conn, $sql);

                while ($row_temp = mysqli_fetch_assoc($result)) {
                    $productid =$row_temp['productID'];
                     $sql ="SELECT * FROM `test` WHERE id= $productid";
                     $temp=mysqli_query($conn,$sql);
                     $row=mysqli_fetch_assoc($temp);
                     $userID=$row_temp['userID'];
                     $sql="SELECT * FROM user WHERE id=$userID ";
                     $user=mysqli_fetch_assoc(mysqli_query($conn,$sql));
                     echo  '
                 <form action="delete_product.php" method="POST">
                 <div class="row" style="background-color:#fafafa;border-radius:10px;">
                 <div class="col-md-4" style="margin-top:auto; margin-bottom:auto; margin-left:0px;">
                          '. $user['fullname'].'  <br> '. $user["phonenumber"].' <br>
                          <span>Ngày đặt hàng: </span> '. $row_temp["time"] .'
                 </div>
                         <div class="col-md-4" style="padding:15px;">
                         <img src="data:image/jpeg;base64,' . base64_encode($row['Data']) . '" style="width: 100px;border-radius:10px;">
                         </div>
                         <div class="col-md-4" style="margin-top:auto; margin-bottom:auto">
                             <h6>Sản phẩm :' . ($row['name']) . '</h6>
                             <p class="price"><strong> Đơn giá :' . ($row['price']) . '</strong></p>
                             <p class="price"><strong> Số lượng :' . ($row_temp['number']) . '</strong></p>
                     </div>
                    
                     </div>
                     </form>
                     <br><br>
                     ';
                 }
                ?>

            </div>
        </div>
    </div>
    <div id="footer"></div>
    <script>
        $("#footer").load('footer.html');
    </script>
</body>
<!-- Core JS Files -->
<script src="delete.js"></script>
<script src="./assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="./assets/js/tether.min.js" type="text/javascript"></script>
<script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/paper-kit.js?v=2.0.0"></script>
<!--  for fileupload -->
<script src="./assets/js/jasny-bootstrap.min.js"></script>
 <script type="text/javascript">
    var toggle  = document.getElementById("toggle");
var content = document.getElementById("content");

toggle.addEventListener("click", function() {
  content.style.display = (content.dataset.toggled ^= 1) ? "block" : "none";
});
</script>