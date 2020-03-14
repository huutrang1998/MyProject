
<?php 
include 'config.php';
?>
<style>
    .navbar .navbar-nav .nav-item .nav-link:hover{
        color:white;
        background-color: #c50000;
        border:none;
        border-radius: 20px;
    }
</style>
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
                        <a class="nav-link" href="gioithieu.php" data-scroll="true">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="huongdan.php" data-scroll="true">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tintuc.php" data-scroll="true">Thảo luận</a>
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

</body>
<script>
 $(document).ready(function() {
$(".nav-link").click(function() {
     $(this).toggleClass("active");
     var updated = '';
     if (window.localStorage.getItem(this) === 'active') {
         updated = 'not_active';
     } else {
         updated = 'active';
     }
     window.localStorage.setItem(this, updated);
}); 
});
</script>

