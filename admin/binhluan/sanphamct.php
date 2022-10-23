<h1 class="tenh1">Chi tiết sản phẩm</h1>
<div class="giohang">
    <form class="phaigh" action="index.php?act=muasp" method="POST" >
        <div class="phaighimg"><img src="../img/<?= $sp['hinhanh']?>" alt=""> <br>
            <Label> <h1><?=$sp['tensp']?></h1></Label>
        </div>
    </form>
    <div class="traigh">
    </form>
    <div class="binhluan">
    <h1 style="font-size: 150%; text-align: center; margin-bottom: 10px;" >Bình luận</h1>
    <iframe src="binhluan/binhluanuser.php" frameborder="0" style="border: 1px black solid; border-radius: 10%;" ></iframe>
    <form action="index.php?act=sanphamct&idsp=<?=$_SESSION['idsp']?>" method="POST">
    <input type="text" name="noidung"><button type="submit" name="btn_bl" >Gửi</button>
    </form>
    </div>
</div>
</div>