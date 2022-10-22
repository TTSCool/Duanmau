<?php
    function giohang_taikhoan($id){
        $sql="SELECT b.idgh, b.tinhtrang, a.id FROM taikhoan a INNER JOIN giohang b ON a.id = b.idngd WHERE b.tinhtrang=0 AND a.id=".$id;
        $ghinfo=pdo_query_one($sql);
        return $ghinfo;
    }
    function ctgh_giohang($idgh){
        $sql="SELECT a.idctgh, b.idsp, b.tensp, b.gia, a.soluong, b.hinhanh FROM chitietgiohang a INNER JOIN sanpham b ON a.idsp = b.idsp WHERE a.idgh=".$idgh;
        $ghinfoct=pdo_query($sql);
        return $ghinfoct;
    }
    function delete_spgh($idctgh){  
        $sql="DELETE FROM chitietgiohang WHERE idctgh =".$idctgh;
        pdo_execute($sql);
    }
    function insert_ctgh($idsp,$idgh,$soluong){
        $sql="INSERT INTO chitietgiohang( idsp, idgh, soluong) VALUES ('.$idsp.','$idgh','$soluong')";
        pdo_execute($sql);
    }
    function thanhtoan($idgh,$id){
            $sql="UPDATE giohang SET tinhtrang = 1 WHERE idgh=".$idgh;
            pdo_execute($sql);
            $sql="INSERT INTO giohang (idngd, tinhtrang) VALUES ('$id','0')";
            pdo_execute($sql); 
    }
?>