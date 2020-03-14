<!doctype html>
<html lang="en">
<?php session_start();
session_unset();
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
      <div style="background-image: url(anh6.jpg); margin-top: -15px;">
        <div class="container" style="padding-top: 20px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-contact no-transition">
                        <br><br><br>
                        <h3 class="card-title text-center">Nhập thông tin để đăng nhập</h3>
                        <br><br>
                        <div class="row">
                            <div class="col-md-12 offset-md-3">
                                <form method="POST" action="login_submit.php">
                                    <input type="hidden" name="_token" value="">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                       
                                        <div class="form-group label-floating">
                                            <label class="control-label">Tên đăng nhập</label>
                                            <input id="username" type="username" name="username" class="form-control" placeholder="Ví dụ: android1998">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Mật khẩu</label>
                                            <input id="password" type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                                        </div>
        
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="alert"> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-6">
                                                <button type="acp" name ="acp" class="btn btn-primary pull-right" style="background-color:#c50000; border:none " id="submit-1">Đăng Nhập
                                                </button>
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

</html>