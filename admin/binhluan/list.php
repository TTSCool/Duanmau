<h1 style="font-size: 30px;" >Quản lý sản phẩm</h1> <br>
    <form action="">
    <table border="1">  
        <tr>
            <th>Mã</th>
            <th>Tên sản phẩm</th>
            <th><button>Xem bình luận</button></th>
        </tr>
    <?php foreach ($listsp as $sp) :  ?>
        <tr>
            <td><?= $sp['idsp'] ?></td> 
            <td><?= $sp['tensp']?></td>
            <td> <button>Thêm bình luận</button></td>
        </tr>
    <?php endforeach ?>
    </table>
    </form>