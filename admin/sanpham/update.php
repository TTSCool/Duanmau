<form action="index.php?act=updatedsp" method="POST" enctype="multipart/form-data">
    <label for="">
        Mã sản phẩm: <br>
        <input type="hidden" name="id" value="<?=$sp['idsp']?>">
        <input type="text" value="<?=$sp['idsp']?>" disabled>
    </label> <br>
    <label for="">
        Tên sản phẩm: <br>
        <input type="text" name="tensp" value="<?=$sp['tensp']?>">
    </label> <br>
    <label for="">
        Giá: <br>
        <input type="text" name="gia" value="<?=$sp['gia']?>">
    </label> <br>
    <label for="">
        Hình ảnh: <br>
        <input type="hidden" name="tenanhcu" value="<?=$sp['hinhanh']?>">
        <img src="../img/<?=$sp['hinhanh']?>" width="50px" alt=""> <br>
        <input type="file" name="hinhanh">
    </label> <br>
    <label for="">
        Mô tả: <br>
        <textarea name="mota" id="" cols="30" rows="10"><?=$sp['mota']?></textarea>
    </label> <br>
    <select name="maloaisp" id="" >
            <option value="<?=$sp['idloaisp']?>">(Loại hiện tại: <?=$sp['tendanhmuc']?>)</option>
            <?php foreach ($listdm as $dm) : ?>
                <option value="<?=$dm['iddm']?>"><?=$dm['tendanhmuc']?></option>
            <?php endforeach ?>
    </select> <br>
    <button type="submit" name="btn_ssp">Sửa sản phẩm</button>
    <button type="button"><a href="index.php?act=listsp" style="text-decoration:none; color:black">Sản phẩm</a></button>
    <br>
    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>