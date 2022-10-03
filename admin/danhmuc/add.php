<form action="index.php?act=adddm" method="POST">
    <label for="">
        Mã danh mục: <br>
        <input type="text">
    </label> <br>
    <label for="">
        Tên danh mục: <br>
        <input type="text" name="tendm">
    </label> <br>
    <button type="submit" name="btn_tdm">Thêm danh mục</button>
    <br>
    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>
