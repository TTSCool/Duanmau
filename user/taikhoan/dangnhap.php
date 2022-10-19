<?php
    session_start();
    require_once "connection.php";
    if(isset($_POST['btn_dangnhap'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE user_name='$username'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if($user){
            if($user['user_password'] == $password) {
                $_SESSION['username'] = $user['user_name'];
                //chuyển hướng
                header("location: admin/Trangchu.php");
            }else{
                $error="Username hoặc mật khẩu không chính xác";
            }
        }else{
            $error="Username hoặc mật khẩu không chính xác";
        }
    }
?>
    <form class="box" method="POST">
    <?php if(isset($_GET['loi'])) : ?>
        <?=$loi = $_GET['loi'];?>
    <?php endif ?>
        <h3>Đăng nhập tải khoản</h3>
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
        Chưa có tài khoản? <a href="Dangky.php">Đăng Ký</a>
    </form>