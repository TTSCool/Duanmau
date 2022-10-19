<h1 style="font-size: 30px;" >Quản lý sản phẩm</h1> <br>
    <table border="1">  
        <tr>
            <th>Mã</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Mô tả</th>
            <th>Loại</th>
            <th><a href="index.php?act=addsp">Thêm</a></th>
        </tr>
    <?php foreach ($listsp as $sp) :  ?>
        <tr>
            <td><?= $sp['idsp'] ?></td> 
            <td><?= $sp['tensp']?></td>
            <td><?= $sp['gia']?></td>
            <td><img src="../img/<?= $sp['hinhanh']?>" width="50px" alt=""></td>
            <td><?= $sp['mota']?></td>
            <td><?=$sp['tendanhmuc']?></td>
            <td><a href="index.php?act=updatesp&id=<?=$sp['idsp']?>">Sửa</a><a onclick="return confirm('Bạn có chắc xóa không?');" href="index.php?act=deletesp&id=<?=$sp['idsp']?>">Xóa</a></td>
        </tr>
    <?php endforeach ?>
    </table>