<form action="index.php?act=updatedtk" method="POST">
    <label for="">
        Tên người dùng: <br>
        <input type="hidden" name="id" value="<?=$tk['id']?>">
        <input type="text" name="tentk" value="<?=$tk['tennd']?>">
    </label> <br>
    <label for=""> Email: <br> <input type="email" name="email" value="<?=$tk['email']?>"></label>
    <br>
    <label for="">Mật khẩu: <br> <input type="password" name="matkhau" value="<?=$tk['matkhau']?>"></label>
    <br>
    <label for="">Vai trò: <br>
    <select name="vaitro" id="">
        <option value="<?=$tk['vaitro']?>">Vai trò hiện tại: <?php if ($tk['vaitro'] == 1) {echo "admin";} else {echo "nguoidung";} ?></option>
        <option value="2">Người dùng</option>
        <option value="1">admin</option>
    </select>
    </label>
    <br>
    <button type="submit" name="btn_stk">Sửa tài khoản</button>
    <button type="button"><a href="index.php?act=listtk" style="text-decoration:none; color:black">Danh sách người dùng</a></button>
    <br>
    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>