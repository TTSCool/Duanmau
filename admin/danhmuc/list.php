<h1 style="font-size: 30px;" >Quản lý danh mục sản phẩm</h1> <br>
    <table border="1">  
        <tr>
            <th>Mã</th>
            <th>Tên danh mục</th>
            <th><a href="index.php?act=adddm">Thêm</a></th>
        </tr>
    <?php foreach ($listdm as $dm) :  ?>
        <tr>
            <td><?= $dm['id'] ?></td> 
            <td><?= $dm['tendanhmuc']?></td>
            <td><a onclick="return confirm('Bạn có chắc xóa không?');" href="index.php?act=deletedm&id=<?=$dm['id']?>">Xóa</a></td>
        </tr>
    <?php endforeach ?>
    </table>