<?php
    function insert_sanpham($tensp, $gia, $hinhanh, $mota, $maloaisp) {
        $sql="INSERT INTO sanpham(tensp, gia, hinhanh, mota, idloaisp) VALUES('$tensp','$gia','$hinhanh','$mota','$maloaisp')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){  
        $sql="DELETE FROM sanpham WHERE idsp =".$id;
        pdo_execute($sql);
    }
    function loadallsp(){
        $sql="SELECT * FROM sanpham sp JOIN danhmuc dm ON sp.idloaisp = dm.iddm";
        $listsp=pdo_query($sql);
        return $listsp;
    }
    function loadtimallsp($tensp){
        $sql="SELECT * FROM sanpham sp JOIN danhmuc dm ON sp.idloaisp = dm.iddm WHERE sp.tensp LIKE '%$tensp%'";
        $listsp=pdo_query($sql);
        return $listsp;
    }
    function loadallsp2(){
        $sql="SELECT * FROM sanpham sp JOIN danhmuc dm ON sp.idloaisp = dm.iddm order by sp.idsp desc limit 0,2";
        $listsp=pdo_query($sql);
        return $listsp;
    }
    function loadtimsp($idloai){
        $sql="SELECT * FROM sanpham sp JOIN danhmuc dm ON sp.idloaisp = dm.iddm WHERE dm.iddm =".$idloai;
        $listsp=pdo_query($sql);
        return $listsp;
    }
    function loadtimsptheoten($idloai,$tensp){
        $sql="SELECT * FROM sanpham sp JOIN danhmuc dm ON sp.idloaisp = dm.iddm WHERE dm.iddm ='$idloai'AND sp.tensp LIKE '%$tensp%'";
        $listsp=pdo_query($sql);
        return $listsp;
    }
    function update_sanpham($id){
        $sql="SELECT * FROM sanpham sp JOIN danhmuc dm ON sp.idloaisp = dm.iddm WHERE idsp =".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function updated_sanpham(){
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
            }}else{$hinhanh=$_POST['tenanhcu'];}
        $id=$_POST['id'];
        $sql="UPDATE sanpham SET tensp = '$tensp', gia = '$gia', hinhanh = '$hinhanh', mota = '$mota', idloaisp = '$maloaisp' WHERE id =".$id;
        pdo_execute($sql);
    }
?>