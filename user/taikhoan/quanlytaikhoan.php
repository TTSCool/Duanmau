<?php
if(!isset($_SESSION['username'])){
$loidangnhap = "Bạn cần phải đăng nhập để sử  dụng chức năng này";
header("location: ../Dangnhap.php?loi=$loidangnhap");
}
$username = $_SESSION['username'];             
?>
<h1 class="tenh1">Tài khoản của bạn</h1>
<div class="grid-container">
  <div class="item1"></div>
  <div class="item2"></div>
  <div class="item3">
    <ul class="container1">
          <li class="item"><a href="Xemsp.php">Lịch sử mua</a></li>
          <li class="item"><a href="Xemdmsp.php">Lịch sử comment</a></li>
          <li class="item"><a href="4">Avatar</a></li>
    </ul>
  </div>  
  <div class="item4">
    <img src="../img/InShot_20220930_121606407.png" width="100px" alt=""> <br>
    <?=$username?>
</div>
</div>
