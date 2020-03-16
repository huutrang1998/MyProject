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
        #content {
            display: none;
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

        <div class="container" style="justify-content: center;">
            <div class="container">
                <div style="text-align:center;">
                    <hr>
                    <h4>Danh sách khách hàng sử dụng dịch vụ</h4>
                    <hr><br><br>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Họ và tên</th>
                                <th class="text-center">Tên đăng nhập</th>
                                <th class="text-center">Số điện thoại</th>
                                <th class="text-center">Địa chỉ</th>
                                <th class="text-center">Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
        
                            <?php
                            $sql = "SELECT * FROM `user`";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo  '<tr>
                                <td class="text-center">'.$row["id"].'</td>
                                <td>'. $row["fullname"] .'</td>
                                <td>'. $row["username"] .'</td>
                                <td>'. $row["phonenumber"] .'</td>
                                <td>'. $row["address"] .'</td>
                                <td><a class= "btn btn-round btn-danger" style="color:white">Sửa</a></td>
                            </tr>'
 ;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
    var toggle = document.getElementById("toggle");
    var content = document.getElementById("content");

    toggle.addEventListener("click", function() {
        content.style.display = (content.dataset.toggled ^= 1) ? "block" : "none";
    });
</script>