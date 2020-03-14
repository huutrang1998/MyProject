<!doctype html>
<?php session_start();?>
<html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>My Project</title>
        <link rel="shortcut icon" type="image/png" href="http://d1j8r0kxyu9tj8.cloudfront.net/files/1514906724GCgS6PPIrjqe0Vp.png" cph-ssorder="0">
        <link rel="icon" type="image/png" href="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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
        <div class="main">
            <div class="section section-white" style="background-color: #fafafa">
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                    <div class="card card-contact no-transition">
                        <h3 class="card-title text-center">Liên hệ</h3>
                        <div class="row">
                            <div class="col-md-5 offset-md-1">
                                <div class="card-block">
                                    <div class="info info-horizontal">
                                        <div class="icon icon-info" style="color:#c50000">
                                            <i class="nc-icon nc-pin-3" aria-hidden="true"></i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Địa chỉ của chúng tôi</h4>
                                            <p> Ngõ Trại Cá , Trương Định
                                                <br> Hoàng Mai
                                                <br> Hà Nội
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info info-horizontal">
                                        <div class="icon icon-danger" style="color:#c50000">
                                            <i class="nc-icon nc-badge" aria-hidden="true"></i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Liên hệ</h4>
                                            <p> Hữu Tráng
                                                <br> +84 969971998
                                                <br> huutrang1998@gmail.com
                                                <br>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div role="form" id="contact-form" method="post" action="#">
                                    <input type="hidden" name="_token" value="Ldu33HkJRRi7XLqGE3P05F9H6Hvvu3GV6aRj54Lt">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Họ</label>
                                                    <input id="e-name1" type="text" name="name" class="form-control" placeholder="Ví dụ: Nguyễn">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tên</label>
                                                    <input id="e-name2" type="text" name="name" class="form-control" placeholder="Ví dụ: Lan Anh">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input id="e-email" type="email" name="email" class="form-control" placeholder="Ví dụ: abcxyz@gmail.com">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Lời nhắn</label>
                                            <textarea id="e-message" name="question" class="form-control" rows="6" placeholder="Nhập lời nhắn của bạn vào đây"></textarea>
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
                                                <button type="submit" class="btn btn-primary pull-right" style="background-color: #c50000; border:none" id="submit-1">Gửi tin nhắn
                                                </button>
                                            </div>
                                        </div>
                                    </div>
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