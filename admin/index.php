<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: index.php?act=dangnhap");
    }
    require_once "../model/global.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/thongke.php";
    include "../model/binhluan.php";
    include "view/header.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                if(isset($_POST['btn_tdm'])){
                $tendm=$_POST['tendm'];
                insert_danhmuc($tendm);
                $thongbao="Thêm thành công"; 
            }   
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdm=loadalldm();
                include "danhmuc/list.php";
                break;
            case 'deletedm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                delete_danhmuc($id);
                }
                $listdm=loadalldm();
                include "danhmuc/list.php";
                break;
            case 'updatedm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $dm=update_danhmuc($id); 
                }
                include "danhmuc/update.php";
                break;
            case 'updateddm':
                if(isset($_POST['btn_sdm'])){
                    updated_danhmuc();
                }
                $listdm=loadalldm();
                include "danhmuc/list.php";
                break;
            case 'addsp':
                $listdm=loadalldm();
                if(isset($_POST['btn_tsp'])){
                $tensp=$_POST['tensp'];
                $gia=$_POST['gia'];
                $mota=$_POST['mota'];
                $maloaisp=$_POST['maloaisp'];
                $file=$_FILES['hinhanh'];
                if ($file['size'] > 0) {
                    $hinhanh=$file['name'];
                    $thu_muc_anh = '../img/';
                    $ext = pathinfo($hinhanh, PATHINFO_EXTENSION);
                    if($file['size'] > 1024*1024*2){
                        $file_err = "File lớn hơn 2MB";
                    }else if($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg'){
                        $file_err =  "Chỉ được upload file ảnh";
                    }else{
                        move_uploaded_file($file['tmp_name'], $thu_muc_anh . $hinhanh);
                        insert_sanpham($tensp,$gia,$hinhanh,$mota,$maloaisp);
                    }
                }else{
                    $file_err =  "Bạn chưa nhập file";
                }    
                $thongbao="Thêm thành công"; 
                } 
                include "sanpham/add.php";
                break;
            case 'listsp':
                $listsp=loadallsp();
                $listdm=loadalldm();
                include "sanpham/list.php";
                break;
            case 'deletesp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                delete_sanpham($id);
                }
                $listsp=loadallsp();
                include "sanpham/list.php";
                break;
            case 'updatesp':
                $listdm=loadalldm();
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $sp=update_sanpham($id);
                }
                include "sanpham/update.php";
                break;
            case 'updatedsp':
                if(isset($_POST['btn_ssp'])){
                        updated_sanpham();
                }
                $listsp=loadallsp();
                include "sanpham/list.php";
                break;
            case 'addtk':
                if(isset($_POST['btn_ttk'])){
                    $tentk=$_POST['tentk'];
                    $email=$_POST['email'];
                    $matkhau=$_POST['matkhau'];
                    $vaitro=$_POST['vaitro'];
                    insert_taikhoan($tentk,$email,$matkhau,$vaitro);
                    $thongbao="Thêm thành công"; 
                }   
                include "taikhoan/add.php";
                break;
            case 'listtk':
                $listtk=loadalltaikhoan();
                include "taikhoan/list.php";
                break;
            case 'deletetk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                delete_taikhoan($id);
                }
                $listtk=loadalltaikhoan();
                include "taikhoan/list.php";
                break;
            case 'updatetk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $tk=update_taikhoan($id);
                }
                include "taikhoan/update.php";
                break;
            case 'updatedtk':
                if(isset($_POST['btn_stk'])){
                        updated_taikhoan();
                }
                $listtk=loadalltaikhoan();
                include "taikhoan/list.php";
                break;
            case 'listbl':
                $listsp=loadallsp();
                include "binhluan/list.php";
                break;
            case 'looktke':
                $thongkesp=thongkesp();
                include "thongke/thongke.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    }else{include "view/home.php";}
    
    
    include "view/footer.php";
?>