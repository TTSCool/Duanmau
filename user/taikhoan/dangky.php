<?php
    require_once "connection.php";
    if (isset($_POST['btn_dangky'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $check = true;
        if($username == ""){
            $username_err = "Bạn chưa nhập tên tài khoản";
            $check = false;
        }
        if($email == ""){
            $email_err = "Bạn chưa nhập email";
            $check = false;
        }
        if($password == ""){
            $password_err = "Bạn chưa nhập mật khẩu";
            $result = false;
        }else if($matkhau < 8 ){
            $password_err = "Bạn cần nhập đủ hoặc hơn 8 ký tự cho mật khẩu";
            $result = false;
        }
        if(!$matkhau == $rematkhau){
            $repassword_err = "Mật khẩu nhập lại chưa chính xác";
            $result = false;
        }
        if($check == true){
        $sql = "INSERT INTO users(user_name, user_email, user_password) VALUES ('$username', '$email', '$password')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $msg = 'Đăng ký thành công';
        header("location: Dangnhap.php");
        exit();
    }else{
        $check_err = "Đăng ký thất bại";
    }
    }
?>
    <h1 class="tenh1">Đăng ký tài khoản</h1>
    <form action="Dangky.php" method="POST">
        <label for="">Tên tài khoản: <br> <input type="text" name="username"></label>
        <br>
        <label for=""> Email: <br> <input type="email" name="email"></label>
        <br>
        <label for="">Mật khẩu: <br> <input type="password" name="password"></label>
        <br>
        <label for="">Nhập lại mật khẩu: <br> <input type="password" name="repassword"></label>
        <br>
        <?php if(isset($error)) : ?>
        <div style="color:red;"><?= $error ?></div>
        <br>
        <?php endif ?>
        <button type="submit" name="btn_dangky">Đăng ký</button>
        <br>
        <br>
        Đã có tài khoản tài khoản? <a href="Dangnhap.php">Đăng nhập</a>
    </form>