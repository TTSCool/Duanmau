<?php
function binh_luan_insert($noidung, $idngd, $idsp){
    $sql = "INSERT INTO binhluan (noidung, idngd, idsp) VALUES ('$noidung','$idngd', '$idsp') ";
    pdo_execute($sql);
}
function binh_luan_update($idbl, $noidung){
    $sql = "UPDATE binhluan SET $noidung WHERE idbl=".$idbl;
    pdo_execute($sql);
}
function binh_luan_delete($idbl){
    $sql = "DELETE FROM binhluan WHERE idbl =".$idbl;
    pdo_execute($sql);
}
// function loadallbinhluan(){
//     $sql = "SELECT sp.ten FROM binhluan bl INNER JOIN sanpham sp ON bl.idsp = sp.idsp ORDER BY bl.ngaybl DESC GROUP BY sp.tensp";
//     return pdo_query($sql);
// }
//sp
function binhluan_theo_sp($idsp,$idngd){
    $sql = "SELECT bl.noidung, tk.tennd FROM binhluan bl INNER JOIN taikhoan tk ON bl.idngd = tk.id WHERE bl.idsp='$idsp' AND tk.id=".$idngd;
    return pdo_query($sql);
}
//user
function binh_luan_select_by_customer($idngd){
    $sql = "SELECT * FROM binhluan WHERE idngd=".$idngd;
    return pdo_query($sql);
}
?>