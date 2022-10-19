<?php
    require_once "../model/global.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "view/header.php";
    if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "gioithieu/gioithieu.php";
        break;
        case 'taikhoan':
            include "taikhoan/quanlytaikhoan.php";
        break;
        case 'giohang':
            include "giohang/giohang.php";
        break;
    }
    }else{include "view/home.php";}
    include "view/footer.php";
?>