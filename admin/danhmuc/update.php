<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<form action="index.php?act=updateddm" method="POST">
    <label for="">
        Mã danh mục: <br>
        <input type="hidden" name="iddm" value="<?php if(isset($id)&&$id>0) echo $id;?>">
        <input type="text" value="<?=$dm['iddm']?>" disabled>
    </label> <br>
    <label for="">
        Tên danh mục: <br>
        <input type="text" name="tendm" value="<?php if(isset($tendanhmuc)&&$tendanhmuc!="") echo $tendanhmuc?>">
    </label> <br>
    <button type="submit" name="btn_sdm">Sửa danh mục</button> 
    <button type="button"><a href="index.php?act=listdm" style="text-decoration:none; color:black">Danh mục</a></button>
    <br>
    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>