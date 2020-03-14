<!doctype html>
<?php
session_start();
if (isset($_SESSION['name']) == false) {
    header("location:dangnhap.php");
}
else if($_SESSION['name']=="admin"){
    header("location:dashboard.php");
}
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
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,300,700" rel="stylesheet" type="text/css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet">
    <style type="text/css">

    </style>
</head>

<body>
<div id="navbar-zone"></div>
   <script>$("#navbar-zone").load('navbar.php')</script>
        <br><br><br>
        <div class="profile-content section">
            <div class="container">
                <div class="row">
                    <div class="profile-picture text-center">
                        <div class="fileinput fileinput-new" data-provides="fileinput">


                            <div class="name">
                                <h4 class="title text-center" style="font-weight:bold; text-transform:uppercase;" ><?php echo $_SESSION['name']; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center">
                        <btn class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i><a style="color: black;" href="test.php"> Settings</a></btn>
                    </div>
                </div>
                 
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#follows" role="tab" aria-expanded="true">Chờ xác nhận</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#follows" role="tab" aria-expanded="true">Đã thanh toán</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#following" role="tab" aria-expanded="false">Đang vận chuyển</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#following" role="tab" aria-expanded="false">Đã nhận</a>
                            </li>
                        </ul>
                    </div>
                </div>

                
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="follows" role="tabpanel" aria-expanded="true">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <ul class="list-unstyled follows">

                                    <hr>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane text-center" id="following" role="tabpanel" aria-expanded="false">
                        <h3 class="text-muted">Not following anyone yet :(</h3>
                        <button class="btn btn-warning btn-round">Find artists</button>
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