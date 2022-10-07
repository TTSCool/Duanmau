<?php
    require_once "../../model/global.php";
    include "header.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                if(isset($_POST['btn_tdm'])){
                $tendm=$_POST['tendm'];
                $sql="INSERT INTO danhmuc(tendanhmuc) VALUES('$tendm')";
                pdo_execute($sql);
                $thongbao="Thêm thành công"; 
            }   
                include "../danhmuc/add.php";
                break;
            case 'listdm':
                $sql="SELECT * FROM danhmuc";
                $listdm=pdo_query($sql);
                include "../danhmuc/list.php";
                break;
            case 'deletedm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sql="DELETE FROM danhmuc WHERE id =".$_GET['id'];
                    pdo_execute($sql);
                }
                $sql="SELECT * FROM danhmuc";
                $listdm=pdo_query($sql);
                include "../danhmuc/list.php";
                break;
            case 'addsp':
                case 'addsp':
                    if(isset($_POST['btn_tsp'])){
                    $tendm=$_POST['tensp'];
                    $sql="INSERT INTO danhmuc(tensp) VALUES('$tensp')";
                    pdo_execute($sql);
                    $thongbao="Thêm thành công"; 
                } 
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