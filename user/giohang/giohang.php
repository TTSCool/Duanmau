        <h1 class="tenh1" >Giỏ hàng của bạn</h1> <br>
        <?php if($ghinfoct=="") : ?>
            <h1 class="tenh1" >Bạn chưa đặt sản phẩm nào</h1>
        <?php else : ?>
        <?php $tongtien=0?>
    <table border="1">  
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th><a href="index.php?act=muahang"><button>Mua thêm sản phẩm</button></a></th>
        </tr>
    <?php foreach ($ghinfoct as $info) :  ?>
        <?php $tongtien+=$info['gia']*$info['soluong'] ?>
        <tr>
            <td><?= $info['tensp'] ?></td> 
            <td><?= $info['gia'] ?> VNĐ </td>
            <td><?= $info['soluong']?></td>
            <td><?= $info['gia']*$info['soluong']?> VNĐ</td>
            <td><a onclick="return confirm('Bạn có chắc xóa không?');" href="index.php?act=xoaspgh&id=<?= $info['idctgh']?>"><button>Xóa</button></a></td>
        </tr>
    <?php endforeach ?>
        <tr>
            <td></td>
            <td></td>
            <td>Tổng tiền:</td>
            <td>
                <?=$tongtien?> VNĐ
            </td>
            <td><a href="index.php?act=thanhtoan"><button>Thanh toán</button></a></td>
        </tr>
    </table>
    <?php endif ?>