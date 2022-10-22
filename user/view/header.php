<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/smth.css">
</head>
<body>
    <div class="container">
        <header>
        <nav>
        <div class="logo">
                    <a href="index.php"><img src="../img/Logo.png" alt=""></a>
                </div>
                <a href="index.php">Trang chủ</a>
                <a href="index.php?act=muahang">Mua hàng</a>
                <a href="index.php?act=giohang">Giỏ hàng</a>
                <a href="index.php?act=<?php if(!isset($_SESSION['username'])) {echo "dangnhap";} else {echo "taikhoan";} ?>"><?php if(!isset($_SESSION['username'])) {echo "Đăng nhập";} else {echo "Tài khoản:";} ?></a>
                <a href="index.php?act=<?php if(!isset($_SESSION['username'])) {echo "dangnhap";} else {echo "taikhoan";} ?>"><?php if(!isset($_SESSION['username'])) {echo "Khách";} else {echo $_SESSION['username'];} ?></a>
                <a href="index.php?act=lienhe">Liên hệ</a>
                <?php if(!isset($_SESSION['username'])) {echo "";} else {echo "<a href='index.php?act=dangxuat'>Đăng xuất</a>";} ?>
        </nav>
            <div class="search"> <i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-instagram"></i> <i class="fa-brands fa-pinterest"></i><i class="fa-brands fa-discord"></i> </div>           
        </header>