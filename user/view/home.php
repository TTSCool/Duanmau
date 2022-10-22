<div class="slideshow-container">

<div class="mySlides fade">
  <img src="../img/banner.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="../img/1068.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="../img/1100.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<br>
<<?php foreach ($listsp as $sp) : ?>
      <div class="hophome">
      <div class="imghome"><img src="../img/<?= $sp['hinhanh']?>" alt=""></div>
      <div class="wordhome">
      <h2> <?= $sp['tensp']?></h2> <br> <br>
      Giá: <?= $sp['gia']?> VNĐ <br> <br>
      <h3> <?= $sp['mota']?></h3>
      </div>
        <button>Mua ngay</button>
      </div>
<?php endforeach ?>>