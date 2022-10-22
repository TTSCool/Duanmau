<?php
    session_start();
    require_once "../model/global.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/giohang.php";
    include "../model/binhluan.php";
    include "view/header.php"; 
    if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
        case 'muahang':
            if(isset($_SESSION['idsp'])){
                $_SESSION['idsp']=="";
            }
            $listdm=loadalldm();
            $listsp=loadallsp();
            include "muahang/sanpham.php";
        break;
        case 'timhang':
            if(isset($_POST['btn_tim'])){
                $idloai=$_POST['chonloaisp'];
                $tensp=$_POST['tensp'];
                if($tensp==""){
                if($idloai==""){
                    $listsp=loadallsp();
                }else{
                    $listsp=loadtimsp($idloai);
                }}else{
                    if($idloai==""){
                        $listsp=loadtimallsp($tensp);
                    }else{
                        $listsp=loadtimsptheoten($idloai,$tensp);
                    }
                }
            }
            $listdm=loadalldm();
            include "muahang/sanpham.php";
            
        break;
        case 'muasp':
            if(!isset($_SESSION['username'])){
                header("location: index.php?act=dangnhap");
            }
            if(isset($_POST['btn_mh'])){
                $id=$_SESSION['id'];
                $ghinfo=giohang_taikhoan($id);
                $idgh=$ghinfo['idgh'];
                $idsp=$_POST['idsp'];
                $soluong=$_POST['soluong'];
                insert_ctgh($idsp,$idgh,$soluong);
                header("Location: index.php?act=giohang");
            }
            break;
        case 'taikhoan':
            include "taikhoan/quanlytaikhoan.php";
        break;
        case 'dangnhap':
    if(isset($_POST['btn_dangnhap'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM taikhoan WHERE tennd='$username'";
        $tk = timtaikhoan($username);
        if($tk){
            if($tk['matkhau'] == $password) {
                $_SESSION['username'] = $tk['tennd'];
                $_SESSION['vaitro'] = $tk['vaitro'];
                $_SESSION['id'] = $tk['id'];
                if($_SESSION['vaitro']==1){
                    header("location: ../admin/index.php");
                }else{
                    header("location: index.php");
                }
            }else{
                $error="Username hoặc mật khẩu không chính xác";
            }
        }else{
            $error="Username hoặc mật khẩu không chính xác";
        }
    }
            include "taikhoan/dangnhap.php";
        break;
        case 'dangxuat':
            include "taikhoan/dangxuat.php";
            break;
        case 'sanphamct':
            if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                $id=$_GET['idsp'];
                $_SESSION['idsp']=$_GET['idsp'];
                $sp=update_sanpham($id);
            }
            if(isset($_POST['btn_bl'])){
                $noidung=$_POST['noidung'];
                $idngd=$_SESSION['id'];
                $idsp=$_SESSION['idsp'];
                binh_luan_insert($noidung, $idngd, $idsp);
            }
            include "muahang/sanphamct.php";
            break;
        case 'xoaspgh':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $idctgh=$_GET['id'];
            delete_spgh($idctgh);
            }
        case 'giohang':
            $_SESSION['username'];
            $id=$_SESSION['id'];
            if(!isset($_SESSION['username'])){
            header("location: index.php?act=dangnhap");
        }
            $ghinfo=giohang_taikhoan($id);
            $ghinfoct=ctgh_giohang($ghinfo['idgh']);
            include "giohang/giohang.php";
        break;
        case 'thanhtoan':
            $id=$_SESSION['id'];
            $ghinfo=giohang_taikhoan($id);
            $idgh=$ghinfo['idgh'];
            thanhtoan($idgh,$id);
            header("Location: index.php?act=giohang");
        break;
    }   
    }else{
        $listsp=loadallsp2();
        include "view/home.php";
    }
    include "view/footer.php";
?>