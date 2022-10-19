<?php
    function insert_taikhoan($tentk,$email,$matkhau,$vaitro) {
        $sql="INSERT INTO taikhoan(tennd,email,matkhau,vaitro) VALUES('$tentk','$email','$matkhau','$vaitro')";
        pdo_execute($sql);
    }
    function delete_taikhoan($id){  
        $sql="DELETE FROM taikhoan WHERE id =".$id;
        pdo_execute($sql);
    }
    function loadalltaikhoan(){
        $sql="SELECT * FROM taikhoan";
        $listtk=pdo_query($sql);
        return $listtk;
    }
    function update_taikhoan($id){
        $sql="SELECT * FROM taikhoan WHERE id =".$id;
        $tk=pdo_query_one($sql);
        return $tk;
    }
    function updated_taikhoan(){
        $tentk=$_POST['tentk'];
        $id=$_POST['id'];
        $sql="UPDATE taikhoan SET tennd = '$tentk' WHERE id =".$id;
        pdo_execute($sql);
    }
?>