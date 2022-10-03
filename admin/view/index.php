<?php
    include "../../model/connection.php";
    include "header.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                include "../danhmuc/add.php";
                break;
            case 'addsp':
                include "../sanpham/add.php";
                break;
            case 'addnd':
                include "../nguoidung/add.php";
                break;
            case 'listbl':
                include "../binhluan/list.php";
                break;
            case 'looktk':
                include "../thongke/thongke.php";
                break;
            default:
                include "home.php";
                break;
        }
    }else{include "home.php";}
    
    
    include "footer.php";
?>