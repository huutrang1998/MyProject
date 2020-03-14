<!doctype html>
<?php
include 'config.php';
?>
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

        .chatline1 {
            text-align-last: right;
            margin-left: 2%;
            margin-right: 2%;
            text-align: right;
            align-content: right;
            padding: 10px;
            border-radius: 10px;
            background-color: #f1f0f0;
            color: #c50000;

        }

        .chatline2 {
            margin-left: 2%;
            margin-right: 2%;
            text-align: left;
            padding: 10px;
            border-radius: 10px;
            background-color: #f1f0f0;
        }
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
                    <div class="text-center">

                        <div class="col-md-8 offset-md-2">
                            <form action="comment_submit.php" method="POST">
                                <div class="container">
                                    <div class="form-group label-floating">
                                        <h3>Góc thảo luận , trao đổi</h3>
                                        <br>
                                        <input id="comment" type="comment" name="comment" class="form-control" placeholder="Ví dụ: Nguyễn Hữu Tráng">
                                    </div>
                                    <button class="btn btn-danger " style="background-color: #c50000; border:none;" name="acp" type="acp"> Bình luận </button>
                                </div>
                            </form>
                            <br><br>
                            <div id="#">
                            <?php
                                $sql = "SELECT * FROM comment ORDER BY time DESC";
                                $ans = mysqli_query($conn, $sql);
                                if ($ans->num_rows > 0) {
                                    while ($row = $ans->fetch_array()) {
                                        if ((isset($_SESSION['name'])) && $row['username'] == $_SESSION['name']) {
                                            echo '<div class="chatline1"  >';
                                        } else {
                                            echo '<div class="chatline2">';
                                        }
                                        echo "<b>" . $row["username"] . " : </b>  " . $row["noidung"] . " - " . $row["time"] . "";
                                        echo "</div><br>";
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
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