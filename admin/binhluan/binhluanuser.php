<?php
    session_start();
    require_once "../../model/global.php";
    include "../../model/binhluan.php";
    if(isset($_SESSION['idsp'])){
        $idsp=$_SESSION['idsp'];
        $idngd=$_SESSION['id'];
    }
    $binhluan=binhluan_theo_sp($idsp);
?>
<?php foreach ($binhluan as $bl) :?>
<p><b><?=$bl['tennd']?></b>: <?= $bl['noidung'] ?> </p>
<?php endforeach ?>