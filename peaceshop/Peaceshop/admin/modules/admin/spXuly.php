<?php

class spXuly extends DB {
    public function doimatkhau() {
        $username = "'" . $_POST['username'] . "'";
        $password = "'" . $_POST['password'] . "'";
        $newpassword = "'" . $_POST['newpassword'] . "'";
        $sql = 'update admins set pass_admin = ' . $newpassword . ' where user_admin = ' . $username . ' and pass_admin = ' . $password;
        if ($this->querry($sql)) {
            return '<div class="alert alert-success"><strong>Đổi MK!</strong> Đã thay đổi mật khẩu thành công.</div>';
            $_COOKIE['admin'] = $newpassword;
        } else {
            return '<div class="alert alert-danger"><strong>Lỗi!</strong> Không thể thay đổi mật khẩu thành công.</div>';
        }
    }
    public function doithongtin() {
        $username =$_POST['username'];
        $password =$_POST['password'];
        $name =$_POST['name'];
        $email =$_POST['email'];
        $phone =$_POST['phone'];
        $diachi =$_POST['diachi'];
        if(isset($_FILES['image'])){
            $hinhanh =$_FILES['image']['name'];
            $hinhanh_tmp = $_FILES['image']['tmp_name'];
            @move_uploaded_file($hinhanh_tmp, 'uploads/' . $_FILES['image']['name']);
        }
        
        if($hinhanh != ''){
            $sql = "update admins set name_admin ='$name',email_admin ='$email',diachi_admin ='$diachi', phone ='$phone', img_admin ='$hinhanh' where user_admin = '$username' and pass_admin ='$password'";
        }else{
            $sql = "update admins set name_admin ='$name',email_admin ='$email',diachi_admin ='$diachi', phone ='$phone' where user_admin = '$username' and pass_admin = '$password'";
        }
        if ($this->querry($sql)) {
            echo '<script type="text/javascript">
            window.location = "index.php?quanly=admin&ac=lietke&tt=<strong>Sửa thông tin!</strong>Đã sửa thông tin thành công."
                 </script>';
        } else {
            return '<div class="alert alert-danger"><strong>Lỗi!</strong> Không thể thay đổi thông tin.</div>';
        }
    }
}
?>