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
    <!--     Fonts and icons     -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        .overlay2 {
            height: 100%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.3);
            overflow-y: hidden;
            transition: 0.5s;
        }

        .overlay {
            height: 0%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.3);
            overflow-y: hidden;
            transition: 0.5s;
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            margin-top: 30px;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media screen and (max-height: 450px) {
            .overlay {
                overflow-y: auto;
            }

            .overlay a {
                font-size: 20px
            }

            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }
        #content{
  display:none;
}
    </style>
</head>

<body>
<nav class="navbar navbar-toggleable-md fixed-top nav-down">
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
                        <a class="nav-link" href="home.php"  data-scroll="true">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sanpham.php" data-scroll="true">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="baiviet.php" data-scroll="true">Bài viết</a>
                    </li>
                    <?php
                    if (isset($_SESSION["name"]) && !empty($_SESSION["name"])) {
                        echo ' <li class="nav-item">
                        <a class="nav-link" href="trangcanhan.php" data-scroll="true">';
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
    <br><br>
    <div class="main">

        <br><br>
        <div id="myNav" class="overlay">

            <div class="overlay-content">
                <div class="container" style="border-radius:10px;">
                    <div class="card card-contact no-transition">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div>
                                    <form method="POST" enctype="multipart/form-data" action="add_product_submit.php">

                                        <div class="card-block">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Tên sản phẩm:(*)</label>
                                                <input id="name" type="name" name="name" class="form-control" placeholder="Ví dụ: Váy Dương Siêu Việt" required>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Giá sản phẩm:(*)</label>
                                                <input id="price" type="price" name="price" class="form-control" placeholder="Ví dụ: 100.000 VND" required>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Mô tả: </label>
                                                <textarea id="description" type="text" name="description" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Hình ảnh sản phẩm: </label>
                                                <input type="file" name="image" accept="image/*" required id="image" class="form-control">
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="button" class="btn btn-round btn-danger" onclick="closeNav()" value="Đóng" style="margin-right:10px;">
                                                    <input type="submit" name="insert" id="insert" class="btn btn-round btn-danger" value="Xác nhận" onclick="selected_image();">
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="text-align:center;border-radius:5px; width:100%;height:100%;">
            <br>
             <button id="toggle" class="btn btn-round btn-danger">Chọn chức năng quản lý</button>
            <div id="content">
                 <a id="toggle" class="btn btn-round btn-danger" style="margin-top: 10px;" href="dashboard.php">Quản lý sản phẩm</a>
                 <a id="toggle" class="btn btn-round btn-danger" style="margin-top: 10px;" href="quan_ly_khach_hang.php">Quản lý khách hàng</a>
                 <a id="toggle" class="btn btn-round btn-danger" style="margin-top: 10px;" href="quan_ly_don_hang.php">Quản lý đơn hàng</a>
            </div>                      
        </div>
        <div class="container" style="text-align:center;border-radius:10px; width:100%;height:100%; overflow: scroll;">
            <br>
            <br>
            <h5 class="btn btn-round btn-primary" id="add-product" onclick="openNav()">Thêm sản phẩm</h5>

            <div class="container" style="text-align: center;justify-content: center;">
                <h3>Danh sách sản phẩm</h3><br><br>
                <?php
                $sql = "SELECT * FROM `test` ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo  '
                <form action="delete_product.php" method="POST">
                <div class="row" style="background-color:#fafafa;border-radius:10px;">
                        <div class="col-md-4" style="padding:15px;">
                        <img src="data:image/jpeg;base64,' . base64_encode($row['Data']) . '" style="width: 150px;border-radius:10px;">
                        </div>
                        <div class="col-md-4" style="margin-top:auto; margin-bottom:auto">

                      <h6 id="id-product">ID: ' . ($row["id"]) . '<h6>
                            <h6>Tên sản phẩm :' . ($row['name']) . '</h6>
                            <p class="price"><strong> Giá :' . ($row['price']) . '</strong></p>
                            <p> Mô tả chi tiết :' . ($row['description']) . '</p> 
                    </div>
                    <div class="col-md-4" style="margin-top:auto; margin-bottom:auto; margin-left:0px;">
                            <a href=' . 'product_update_form.php?id=' . $row['id'] . ' class="btn btn-danger btn-round" style=" color: white;margin-right:10px;"> Sửa</a>
                            <a href=' . 'delete_product.php?id=' . $row['id'] . ' class="btn btn-danger btn-round" name="delete" type="delete" style=" color: white;"> Xoá</a>
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
<script type="text/javascript">
    function selected_image() {
        var image_name = $('#image').val();
        if (image_name == '') {
            alert("Hãy chọn một ảnh để đăng tải");
            return false;
        } else {
            var extension = $('#image').val();
            var p = extension.lastIndexOf(".");
            extension = extension.slice(p + 1, extension.length).toLowerCase();
            var ext = ["gif", "png", "jpeg", "jpg"];
            if (!ext.includes(extension)) {
                alert('Không nhận được định dạng trên !');
                $('#image').val('');
                return false;
            }
        }
    }
</script>

<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
</script>
<script type="text/javascript">
    var toggle  = document.getElementById("toggle");
var content = document.getElementById("content");

toggle.addEventListener("click", function() {
  content.style.display = (content.dataset.toggled ^= 1) ? "block" : "none";
});
</script>

</html>