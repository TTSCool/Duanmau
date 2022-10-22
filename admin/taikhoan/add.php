<form action="index.php?act=addtk" method="POST">
    <label for="">
        Tên người dùng: <br>
        <input type="text" name="tentk">
    </label> <br>
    <label for=""> Email: <br> <input type="email" name="email"></label>
    <br>
    <label for="">Mật khẩu: <br> <input type="password" name="matkhau"></label>
    <br>
    <label for="">Vai trò: <br>
    <select name="vaitro" id="">
        <option value="2">Người dùng</option>
        <option value="1">admin</option>
    </select>
    </label>
    <br>
    <button type="submit" name="btn_ttk">Thêm Tài khoản</button>
    <button type="button"><a href="index.php?act=listtk" style="text-decoration:none; color:black">Danh sách người dùng</a></button>
    <br>
    <?php
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
    ?>
</form>