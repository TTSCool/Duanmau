<h1 style="font-size: 30px;" >Quản lý danh mục sản phẩm</h1> <br>
    <table border="1">  
        <tr>
            <th>Mã</th>
            <th>Tên tài khoản</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Ngày tạo</th>
            <th>Vai trò</th>
            <th><a href="index.php?act=addtk">Thêm</a></th>
        </tr>
    <?php foreach ($listtk as $tk) :  ?>
        <tr>
            <td><?= $tk['id'] ?></td> 
            <td><?= $tk['tennd']?></td>
            <td><?= $tk['email']?></td>
            <td><?= $tk['matkhau']?></td>
            <td><?= $tk['ngaytao']?></td>
            <td><?= $tk['vaitro']?></td>
            <td><a href="index.php?act=updatetk&id=<?=$tk['id']?>">Sửa</a><a onclick="return confirm('Bạn có chắc xóa không?');" href="index.php?act=deletetk&id=<?=$tk['id']?>">Xóa</a></td>
        </tr>
    <?php endforeach ?>
    </table>