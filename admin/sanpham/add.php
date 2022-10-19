<form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
    <label for="">
        Tên sản phẩm: <br>
        <input type="text" name="tensp">
    </label> <br>
    <label for="">
        Giá: <br>
        <input type="text" name="gia">
    </label> <br>
    <label for="">
        Hình ảnh: <br>
        <input type="file" name="hinhanh">
    </label> <br>
    <label for="">
        Mô tả: <br>
        <textarea name="mota" id="" cols="30" rows="10" ></textarea>
    </label> <br>
    <select name="maloaisp" id="">
            <option value="">Chọn loại sản phẩm</option>
            <?php foreach ($listdm as $dm) : ?>
                <option value="<?=$dm['iddm']?>"><?=$dm['tendanhmuc']?></option>
            <?php endforeach ?>
    </select> <br>
    <button type="submit" name="btn_tsp">Thêm sản phẩm</button>
    <button type="button"><a href="index.php?act=listsp" style="text-decoration:none; color:black">Danh sách sản phẩm</a></button>
    <br>
    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>