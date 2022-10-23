<h1 style="font-size: 30px;" ><div class="chosanpham">
    <div class="menusanpham">
        <form class="formchon" action="index.php?act=listbl" method="POST">
            <label for="">Chọn loại sản phẩm
            <select name="chonloaisp" id="" onchange="" >
                <option value="">Không phân loại</option>
                <?php foreach ($listdm as $dm) : ?>
                <option value="<?=$dm['iddm']?>"><?=$dm['tendanhmuc']?></option>
            <?php endforeach ?>
            </select>
            </label>
            <label for="">Tên sản phẩm <input type="text" name="tensp" value="" > <button type="submit" name="btn_tim">Tìm</button></label>
            </form>
            <br>
            <div class="sapxephop">
            <?php foreach ($listsp as $sp) : ?>
                <form class="hop" action="index.php?act=sanphamct&idsp=<?=$sp['idsp']?>" method="POST">
                <div class="img"><img src="../img/<?= $sp['hinhanh']?>" alt=""></div>
                <div class="word">
                <?= $sp['tensp']?> <br>
                <input type="hidden" name="idsp" value="">
                <button type="submit" name="btn_ctsp">Xem bình luận</button>
                </div>
            </form>
            <?php endforeach ?>
            </div>
        </label>
    </div>
</div></h1> <br>
