<form action="index.php?act=adddm" method="POST">
    <label for="">
        Tên danh mục: <br>
        <input type="text" name="tendm">
    </label> <br>
    <button type="submit" name="btn_tdm">Thêm danh mục</button>
    <button type="button"><a href="index.php?act=listdm" style="text-decoration:none; color:black">Danh sách danh mục</a></button>
    <br>
    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>
