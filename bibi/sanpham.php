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
    <title>Bivabi</title>
    <link rel="shortcut icon" type="image/png" href="./assets/img/favicon.ico" cph-ssorder="0">
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
<div id="navbar-zone"></div>
   <script>$("#navbar-zone").load('navbar.php')</script>
    <div class="wrapper">
        <br><br><br><br><br>
        <div style="text-align:center; margin-top:20px;"><hr> <h4>Một số mẫu giao diện Website</h4><hr></div>
        <div style="padding: 40px">
                <div class="masonry">
                    <?php
                    $sql = "SELECT * FROM `test` ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="grid">
                        <div class="card card-product card-plain">
                            <div class="card-image">
                                <a href="product_detail.php?id='.$row['id'].'">
                                <img src="data:image/jpeg;base64,' . base64_encode($row['Data']) . '" style="width:100% border-radius:10px;">
                                </a>
                                <div class="card-block">
                                    <div class="card-description">
                                        <h5 class="card-title">'. ($row['name']).'</h5>
                                        <p class="card-description">Dresses &amp; Skirts</p>
                                    </div>
                                    <div class="actions">
                                        <h5> '. ($row['price']). ' VNĐ</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>';
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


</html>