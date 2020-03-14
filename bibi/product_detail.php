<?php
include 'config.php';
$id=$_GET['id'];
?>

<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>My Project</title>
        <link rel="shortcut icon" type="image/png" href="http://d1j8r0kxyu9tj8.cloudfront.net/files/1514906724GCgS6PPIrjqe0Vp.png" cph-ssorder="0">
        <link rel="icon" type="image/png" href="">
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
    </head>

<body>

   <div id="navbar-zone"></div>
   <script>$("#navbar-zone").load('navbar.php')</script>
      <br><br><br>
        <div class="main">
            <div class="container" style="text-align:center; margin-top:100px;">
            <?php
                $sql = "SELECT * FROM `test` WHERE  id=$id";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo  '
                <form action="delete_product.php" method="POST">
                <div class="row" style="background-color:#fafafa;border-radius:10px;">
                        <div class="col-md-7" style="padding:15px;">
                        <img src="data:image/jpeg;base64,' . base64_encode($row['Data']) . '" style="width: 100%;border-radius:10px;">
                        </div>
                        <div class="col-md-5" style="margin-top:auto; margin-bottom:auto">

                      <h6 id="id-product">ID: ' . ($row["id"]) . '<h6>
                            <h6>Tên sản phẩm :' . ($row['name']) . '</h6>
                            <p class="price"><strong> Giá :' . ($row['price']) . '</strong></p>
                            <p> Mô tả chi tiết :' . ($row['description']) . '</p>
                            <br><br> 
                            <a class="btn btn-danger btn-round" style=" color: white;margin-right:10px;"> Đặt hàng</a>
                    </div>
                    </div>
                    </form>
                    <br><br>
                    ';
                }
                ?>
                </div>
     </div>
     <div id="footer"></div>
  
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

<script>   $("#footer").load('footer.html'); </script>
</html>