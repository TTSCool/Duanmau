<h3 class="tenh1" >Đăng nhập tải khoản</h3>
<form class="box" action="index.php?act=dangnhap" method="POST">
        <label for="">Tên tài khoản: <br> <input type="text" name="username" placeholder="Nhập tên tài khoản..."></label>
        <br>
        <Label>Mật khẩu<br>
        <input name="password" type="password" placeholder="Nhập mật khẩu..."></Label>
        <br>
        <?php if(isset($error)) : ?>
        <div style="color:red;"><?= $error ?></div>
        <br>
        <?php endif ?>
        <br>
        <button type="submit" name="btn_dangnhap">Đăng nhập</button>
        <br>
        <br>
        Chưa có tài khoản? <button><a href="index.php?act=dangky" style="text-decoration:none; color:black">Đăng Ký</a></button>
    </form>