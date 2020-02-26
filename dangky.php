<!doctype html>
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
        .docs {
            margin: 150px 20px 150px 20px;
            color: black;
            background: white;
        }
    
        .docs-footer {
            height: 100px;
            background-color: black;
            color: white;
        }
    
        .docs-p {
            padding-top: 12px;
            line-height: 36px;
        }
    
        .footera {
            background-color: #39393b;
            width: 100%;
            height: 400px;
            text-align: center;
            color: white;
            line-height: 20px;
        }
    
        .footer1 {
            font-weight: 800;
            font-size: 45px;
            padding-top: 100px;
        }
    
        .footer2 {
            font-weight: 700;
            font-size: 30;
            padding-top: 20px;
        }
    
        .footer3 {
            padding-top: 20px;
            padding-bottom: 50px;
        }
    
        .footer4 {
            background-color: #000000;
            margin-left: -100px;
            /*width: 1366px;*/
            height: 50px;
            color: white;
        }
    
        .footer41 {
            line-height: 40px;
            float: left;
            margin-left: 150px;
            font-size: 9px;
        }
    
        .footer42 {
            line-height: 40px;
            margin-right: 50px;
            float: right;
            font-size: 10px;
        }
    
        .re {
            color: #EE7C6B;
        }
    
        .bl {
            color: #94AAD6;
        }
    
        .gr {
            color: #83C75D;
        }
        </style>
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
               <img src="logo.png" height="40px">
        </a >
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php" data-scroll="true">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll="true">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="huongdan.php" data-scroll="true">Hướng dẫn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tintuc.php" data-scroll="true">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dangnhap.php" data-scroll="true">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-round btn-danger" style="background-color:#c50000; border : none" href="dangky.html" data-scroll="true">Đăng ký</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
      <br><br><br>
        <div class="container" style="padding-top: 20px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-contact no-transition">
                        <br><br><br>
                        <h3 class="card-title text-center">Nhập thông tin để đăng ký</h3>
                        <br><br>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="register_submit.php" method ="POST">
                                    <div class="card-block">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Họ và tên (*)</label>
                                            <input id="name" type="name" name="name" class="form-control" placeholder="Ví dụ: Nguyễn Hữu Tráng">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input id="email" type="email" name="email" class="form-control" placeholder="Ví dụ: android@colorme.vn">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Tên đăng nhập (*) </label>
                                            <input id="username" type="username" name="username" class="form-control" placeholder="Ví dụ: android1998">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Mật khẩu (*) </label>
                                            <input id="password" type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nhắc lại mật khẩu (*) </label>
                                            <input id="repassword" type="password" name="repassword" class="form-control" placeholder="Nhắc lại mật khẩu">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Số điện thoại (*) </label>
                                            <input id="phonenumber" name="phonenumber" class="form-control" rows="6" placeholder="Nhập số điện thoại"></input>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Địa chỉ (*) </label>
                                            <textarea id="address" name="address" class="form-control" rows="6" placeholder="Nhập địa chỉ"></textarea>
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
                                                <button name="acp" type="acp" id="acp" class="btn btn-primary pull-right" style="background-color:#c50000; border:none">Đăng ký
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
    <footer style="background-color:#171719; width: 100%; height: 400px;text-align: center; margin-bottom: -400px;">
        <div class="footera">
           
            <div class="footer2">Liên hệ với chúng tôi</div>
            <div class="footer3">Hotline: 0123456788
                <br> Dia chi: Le Xa - Le Thanh - My Duc - Ha Noi</div>
            <div>
                <button class="btn btn-just-icon btn-facebook">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </button>
                <button class="btn btn-just-icon btn-twitter">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </button>
                <button class="btn btn-just-icon btn-google">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                </button>
            </div>
        </div>
       
    </footer>
</body>
<!-- Core JS Files -->
<script src="./assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="./assets/js/tether.min.js" type="text/javascript"></script>
<script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/paper-kit.js?v=2.0.0"></script>
<!--  for fileupload -->
<script src="./assets/js/jasny-bootstrap.min.js"></script>

</html>