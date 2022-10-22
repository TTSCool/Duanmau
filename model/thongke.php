<?php
    function thongkesp(){
        $sql="SELECT idsp, SUM(soluong) as soluong  FROM chitietgiohang group by idsp";
        $thongkesp=pdo_query($sql);
        return $thongkesp;
    }
?>