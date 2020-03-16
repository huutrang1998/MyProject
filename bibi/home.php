<!doctype html>
<?php
include 'config.php';
?>
<html>

<head>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Bibi</title>
    <link rel="shortcut icon" type="image/png" href="http://d1j8r0kxyu9tj8.cloudfront.net/files/1514906724GCgS6PPIrjqe0Vp.png" cph-ssorder="0">
    <link rel="icon" type="image/png" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <!--     Fonts and icons     -->
    <!-- <link href="./assets/css/xhh.css" rel="stylesheet"> -->
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/paper-kit.css" rel="stylesheet">
    <link href="./assets/css/demo.css" rel="stylesheet">
    <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,300,700" rel="stylesheet" type="text/css">
    <style type="text/css">
        .masonry {
            columns: 4;
        }
        @media (max-width: 1600) {
            .masonry {
                columns: 3;
            }
        }
        @media (max-width: 1200px) {
            .masonry {
                columns: 2;
            }
        }

        @media (max-width: 992px) {
            .masonry {
                columns: 1;
            }
        }

        .masonry .grid {
            display: inline-block;
            margin-bottom: 24px;
            margin-left: 7px;
            margin-right: 7px;
           padding:6px;

        }

        .masonry .grid:before {
            border-radius: 10px;
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 4px;
            background-color: rgba(0, 0, 0, 0.05);
        }

        .masonry .grid:hover::before{
            
            background-color: rgba(0, 0, 0, 0.15);
        }
        
        .masonry .grid img {
            width: 100%;
            border-radius: 10px;
        }

        .mt-auto {
            margin-top: auto;
        }
        .card-block{
            padding: 20px;
        }
        .navbar .navbar-nav .nav-item .nav-link:hover{
        color:white;
        background-color: #c50000;
        border:none;
        border-radius: 20px;
        }
        .card .card-product .card-plain .card-image a img :hover{
            background-color: rgba(0, 0, 0, 0.15);
            }
            
    </style>
</head>

<body>
    <nav class="navbar navbar-toggleable-md fixed-top navbar-transparent nav-down" color-on-scroll="300">
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
                        <a class="nav-link" href="gioithieu.php" data-scroll="true">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="baiviet.php" data-scroll="true">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tintuc.php" data-scroll="true">Thảo luận</a>
                    </li>
                    <?php
                    if (isset($_SESSION["name"]) && !empty($_SESSION["name"])) {
                        echo ' <li class="nav-item">
                        <a class="nav-link" href="trangcanhan.php" data-scroll="true">';
                        echo $_SESSION["name"];
                        echo '</a> </li>';
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
    <div class="wrapper">
        <div class="page-header" style="background-image: url('assets/img/bg2.jpg')">
            <div class="filter"></div>
            <div class="content-center">
                <div class="motto">
                    <h1 class="text-center"><b>Thiết kế và xây dựng Website</b></h1>
                    <h3 class="text-center">Xây dựng website - Quảng bá thương hiệu</h3>
                </div>
            </div>
        </div>
        <div class="main">
        </div>
        <div class="container" style="padding: 40px">
            <div style="text-align:center;"><hr> <h4>Lợi ích từ Website</h4><hr> </div>
            
            <div class="row">
                   <!-- one card -->
                   <div class="col-md-4">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="green" data-radius="5px">
                                <div class="card-block">
                                    <h4 class="card-title"><a href="#paper-kit">Giúp bạn kinh doanh 24/24</a></h4>
                                    <p class="card-description"> Khi trang Web hoạt động thì dẫu bạn có đang nghỉ thì vẫn có thể tiếp nhận yêu cầu từ khách hàng </p>
                                </div>
                            </div> 
                        </div>
                    </div>
                <!-- end card -->
                  <!-- one card -->
                  <div class="col-md-4">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="5px">
                                <div class="card-block">
                                    <h4 class="card-title"><a href="#paper-kit">Giới thiệu sản phẩm</a></h4>
                                    <p class="card-description"> Web giúp bạn đăng tải hình ảnh và giới thiệu sản phẩm của của hàng ,doanh nghiệp mình. </p>
                                </div>
                            </div> 
                        </div>
                    </div>
                <!-- end card -->
             
                <!-- one card -->
                <div class="col-md-4">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="blue" data-radius="5px">
                                <div class="card-block">
                                    <h4 class="card-title"><a href="#paper-kit">Quảng bá thương hiệu </a></h4>
                                    <p class="card-description"> Website giống như bộ mặt của cửa hàng, doanh nghiệp, nó đại diện cho thương hiệu của bạn   </p>
                                </div>
                            </div> 
                        </div>
                    </div>
                <!-- end card -->
               
            </div>

            <div style="text-align:center;"><hr> <h4>Bạn cần làm gì để có một Website riêng ?</h4><hr> </div>
            <div class="row">
               <!-- one card -->
               <div style="margin-left:auto;margin-right:auto;">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" style="background-color:#c50000;" data-color="color" data-radius="5px">
                                <div class="card-block">
                                    <h4 class="card-title"><a href="#paper-kit">Việc bạn cần làm chỉ là liên hệ với chúng tôi!</a></h4>
                                    <p class="card-description"> Chúng tôi sẽ tư vấn và hỗ trợ các bạn mọi thứ để bạn có thể sở hữu một Website mang phong cách riêng của doanh nghiệp mình. </p>
                                </div>
                            </div> 
                        </div>
                    </div>
                <!-- end card -->
            </div>

            <div style="text-align:center;"><hr> <h4>Dịch vụ của chúng tôi</h4><hr> </div>
            <div class="row">
                 <!-- one card -->
                 <div class="col-md-4">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="orange" data-radius="5px">
                                <div class="card-block">
                                    <h4 class="card-title"><a href="#paper-kit">Thiết kế Website cho doanh nghiệp</a></h4>
                                    <p class="card-description"> Chúng tôi sẽ cùng bạn trao đổi và cho ra một thiết kế phù hợp với doanh nghiệp, cửa hàng của bạn.  </p>
                                </div>
                            </div> 
                        </div>
                    </div>
                <!-- end card -->
                 <!-- one card -->
                 <div class="col-md-4">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="brown" data-radius="5px">
                                <div class="card-block">
                                    <h4 class="card-title"><a href="#paper-kit">Đăng ký tên miền và Hosting</a></h4>
                                    <p class="card-description"> Tên miền và Hosting là thành phần không thể thiếu để đăng tải Website của bạn lên mạng Internet.  </p>
                                </div>
                            </div> 
                        </div>
                    </div>
                <!-- end card -->
                 <!-- one card -->
                 <div class="col-md-4">
                        <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="purple" data-radius="5px">
                                <div class="card-block">
                                    <h4 class="card-title"><a href="#paper-kit">SEO trang web của bạn</a></h4>
                                    <p class="card-description"> Giúp trang web của bạn dễ dàng được tìm thấy trên các công cụ tìm kiếm như google  </p>
                                </div>
                            </div> 
                        </div>
                    </div>
                <!-- end card -->
            <div class="container">
                <div style="text-align:center;"><hr> <h4>Các chức năng cơ bản của Website</h4><hr><br><br> </div>
                
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Chức năng</th>
                                <th>Mô tả</th>
                                <th>Tình trạng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Trang bán hàng</td>
                                <td>Giúp hiển thị sản phẩm</td>
                                <td>2013</td>
                               
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Quản lý sản phẩm</td>
                                <td>Chức năng thêm sửa xoá sản phẩm, quản lý sản phẩm</td>
                                <td>2013</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Quản lý đơn hàng</td>
                                <td>Nhận đơn đặt hàng từ khách hàng và quản lý</td>
                                <td>2013</td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Trang người dùng</td>
                                <td>Khách hàng đăng ký thành viên và trao đổi mua bán</td>
                                <td>2013</td>
                               
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td> Trang Chat</td>
                                <td>Giúp bạn giao tiếp với khách hàng</td>
                                <td>2013</td>
                               
                            </tr>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td>Giỏ hàng</td>
                                <td>Hỗ trợ khách hàng đặt hàng</td>
                                <td>2013</td>
                               
                            </tr>
                        </tbody>
                    </table>
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