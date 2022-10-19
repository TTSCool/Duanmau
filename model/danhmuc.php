<?php
    function insert_danhmuc($tendm) {
        $sql="INSERT INTO danhmuc(tendanhmuc) VALUES('$tendm')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){  
        $sql="DELETE FROM danhmuc WHERE iddm =".$id;
        pdo_execute($sql);
    }
    function loadalldm(){
        $sql="SELECT * FROM danhmuc";
        $listdm=pdo_query($sql);
        return $listdm;
    }
    function update_danhmuc($id){
        $sql="SELECT * FROM danhmuc WHERE iddm =".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function updated_danhmuc(){
        $tendm=$_POST['tendm'];
        $id=$_POST['id'];
        $sql="UPDATE danhmuc SET tendanhmuc = '$tendm' WHERE iddm =".$id;
        pdo_execute($sql);
    }
?>