<!doctype html>
<?php
include "config.php";
if ((isset($_SESSION['name']) == false) || ($_SESSION['name'] != "admin")) {
    header("location:dangnhap.php");
}
?>

<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Bibi</title>
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
</head>

<body>
    <nav class="navbar navbar-toggleable-md fixed-top">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">
                <img src="logo.png" height="30px">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php" data-scroll="true">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gioithieu.php" data-scroll="true">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Hướng dẫn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tintuc.php" data-scroll="true">Thảo luận</a>
                    </li>
                    <?php
                    if (isset($_SESSION["name"]) && !empty($_SESSION["name"])) {
                        echo ' <li class="nav-item">
                        <a class="btn btn-round btn-danger" style="background-color:#c50000; border : none" href="huongdan.php" data-scroll="true">';
                        echo $_SESSION["name"];
                        echo '</a> </li>
                        <form action="logout.php" method="POST">
                        <li class="nav-item">
                        <a class="nav-link" href="dangnhap.php" data-scroll="true" name="logout">Đăng xuất</a>
                        </li> </form>';
                    } else {
                        echo   ' <li class="nav-item">
                                 <a class="nav-link" href="dangnhap.php" data-scroll="true">Đăng nhập</a>
                                 </li>
                                 <li class="nav-item">
                                 <a class="nav-link" href="dangky.php" data-scroll="true">Đăng ký</a>
                                 </li> ';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br><br>
    <div class="main">
        <br><br>
        <br><br>
        <div class="container" style="text-align:center;">
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM test WHERE id= '$id' ";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo  '
        <form action="delete_product.php" method="POST">
        <div class="row" style="background-color:#fafafa;border-radius:10px;">
                <div class="col-md-4" style="padding:15px;">
                <img src="data:image/jpeg;base64,' . base64_encode($row['Data']) . '" style="width: 200px;border-radius:10px;">
                </div>
                <div class="col-md-4" style="margin-top:auto; margin-bottom:auto">

              <h6 id="id-product">ID: ' . ($row["id"]) . '<h6>
                    <h6>Váy Dương Siêu Việt</h6>
                    <p class="price"><strong>€ 975.00</strong></p>
                    <p>Đây là bộ váy có một không hai</p> 
            </div>'. 
            '</div>
            </form>
            <br><br>
            ';
        }
        ?>
        </div>
       <div class="container">
        <form method="POST" action="update_product_submit.php?id=<?php echo $id?>">
            <div class="card-block">
                <div class="form-group label-floating">
                    <label class="control-label">Tên mới:</label>
                    <input id="name" type="text" name="name" class="form-control" placeholder="Ví dụ: Váy Dương Siêu Việt">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Giá mới:</label>
                    <input id="price" type="text" name="price" class="form-control" placeholder="Ví dụ: 100.000 VND">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Mô tả mới: </label>
                    <textarea id="description" type="text" name="description" class="form-control"></textarea>
                </div>


                <div class="row" style="text-align:center;">
                    <div class="col-md-6">
                        <a href="dashboard.php" type="button" class="btn btn-round btn-danger" style="margin-right:10px;margin-bottom:10px;">Quay lại trang quản lý</a>
                    </div>
                    <div class="col-md-6">
                        <button name="acp" id="acp" type="acp" class="btn btn-round btn-danger" style="color:white ;">Xác nhận</button>
                    </div>
                </div>
            </div>
        </form>
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
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
</script>

</html>
