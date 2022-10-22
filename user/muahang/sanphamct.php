<h1 class="tenh1">Chi tiết sản phẩm</h1>
<div class="giohang">
    <form class="phaigh" action="index.php?act=muasp" method="POST" >
        <div class="phaighimg"><img src="../img/<?= $sp['hinhanh']?>" alt=""> <br>
            <Label>Số lượng mua: <input type="number" name="soluong" id="" value="1"></Label>
        </div>
        <div class="tgm">
            <input type="hidden" name="idsp" value="<?=$sp['idsp']?>" >
        <h1><?=$sp['tensp']?> </h1>
            <p>Giá: <?= $sp['gia']?> VNĐ</p>
            <h3><?= $sp['mota']?></h3>
            <button type="submit" name="btn_mh" >Mua ngay</button>
        </div>
    </form>
    <div class="traigh">
    </form>
    <div class="binhluan">
    <h1 style="font-size: 150%; text-align: center; margin-bottom: 10px;" >Bình luận</h1>
    <iframe src="muahang/binhluanuser.php" frameborder="0" style="border: 1px black solid; border-radius: 10%;" ></iframe>
    <form action="index.php?act=sanphamct&idsp=<?=$_SESSION['idsp']?>" method="POST">
    <input type="text" name="noidung"><button type="submit" name="btn_bl" >Gửi</button>
    </form>
    </div>
</div>
</div>