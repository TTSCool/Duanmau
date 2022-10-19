<?php
session_start();
require_once "../connection.php";
if(!isset($_SESSION['username'])){
$loidangnhap = "Bạn cần phải đăng nhập để sử  dụng chức năng này";
header("location: ../Dangnhap.php?loi=$loidangnhap");
}
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE user_name='$username'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
                
?>
<div class="grid-container">
  <div class="item1"><h1 style="font-size: 30px;" >Tài khoản của bạn</h1></div>
  <div class="item2"></div>
  <div class="item3">
    <ul class="container1">
          <li class="item"><a href="Xemsp.php">Quản lý sản phẩm</a></li>
          <li class="item"><a href="Xemdmsp.php">Quản lý danh mục sản phẩm</a></li>
          <li class="item"><a href="Lichsumua.php">Lịch sử mua</a></li>
          <li class="item"><a href="4">Avatar</a></li>
          <li class="item"><a href="../Dangxuat.php">Đăng xuất</a></li>
    </ul>
  </div>  
  <div class="item4">
    <img src="upload/<?=$user['user_avatar']?>" width="123px" alt=""> <br> <br>
    <?=$user['user_name']?>
  </div>
</div>
