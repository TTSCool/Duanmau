<h1 style="font-size: 30px;" >Quản lý danh mục sản phẩm</h1> <br>
    <table border="1">  
        <tr>
            <th>Mã</th>
            <th>Tên danh mục</th>
            <th><a href="index.php?act=adddm"><button>Thêm danh mục</button></a></th>
        </tr>
    <?php foreach ($listdm as $dm) :  ?>
        <tr>
            <td><?= $dm['iddm'] ?></td> 
            <td><?= $dm['tendanhmuc']?></td>
            <td><a href="index.php?act=updatedm&id=<?=$dm['iddm']?>"><button>Sửa</button></a><a onclick="return confirm('Bạn có chắc xóa không?');" href="index.php?act=deletedm&id=<?=$dm['iddm']?>"><button>Xóa</button></a></td>
        </tr>
    <?php endforeach ?>
    </table>