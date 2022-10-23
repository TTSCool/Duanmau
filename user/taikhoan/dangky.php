<?php
     
?>
    <h1 class="tenh1">Đăng ký tài khoản</h1>
    <form action="index.php?act=dangky" method="POST">
        <label for="">Tên tài khoản: <br> <input type="text" name="username"></label>
        <br>
        <?php if(isset($username_err)) : ?>
        <div style="color:red;"><?= $username_err ?></div>
        <br>
        <?php endif ?>
        <label for=""> Email: <br> <input type="email" name="email"></label>
        <br>
        <?php if(isset($email_err)) : ?>
        <div style="color:red;"><?= $email_err ?></div>
        <br>
        <?php endif ?>
        <label for="">Mật khẩu: <br> <input type="password" name="password"></label>
        <br>
        <?php if(isset($password_err)) : ?>
        <div style="color:red;"><?= $password_err ?></div>
        <br>
        <?php endif ?>
        <label for="">Nhập lại mật khẩu: <br> <input type="password" name="repassword"></label>
        <br>
        <?php if(isset($repassword_err)) : ?>
        <div style="color:red;"><?= $repassword_err ?></div>
        <br>
        <?php endif ?>
        <button type="submit" name="btn_dangky">Đăng ký</button>
        <br>
        <br>
        Đã có tài khoản tài khoản? <button><a href="index.php?act=dangnhap" style="text-decoration:none; color:black">Đăng nhập</a></button>
    </form>