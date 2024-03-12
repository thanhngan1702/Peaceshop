<?php
if (isset($_POST['name'])){
    $error = array();
    if(isset($_POST['name'])){
        if(empty($_POST['name'])){
            $error['name'] = "Vui lòng nhập tên tài khoản!";
        }else{
            $user_account = $_POST['name'];
        }
    }
    if(isset($_POST['fullname'])){
        if(empty($_POST['fullname'])){
            $error['fullname'] = "Vui lòng nhập tên tài khoản!";
        }else{
            $fullname = $_POST['fullname'];
        }
    }
    if(isset($_POST['email'])){
        if(empty($_POST['email'])){
            $error['email'] = "Vui lòng nhập địa chỉ Email!";
        }else{
            $email_account=$_POST['email'];
            $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"; 
            if (!preg_match ($pattern, $email_account) ){  
            $error['email'] = "Không đúng định dạng!";
            }
        }
    }
    if(isset($_POST['password']) && isset($_POST['repassword'])){
        if(empty($_POST['password'])){
            $error['password'] = "Vui lòng nhập mật khẩu!";
        }else{
            $pass_account=$_POST['password'];
        }
        if(empty($_POST['repassword'])){
            $error['repassword'] = "Vui lòng nhập lại mật khẩu!";
        }else{
            $repassword = $_POST['repassword'];
        }
    }
    if($pass_account == $repassword){
        if(empty($error)){
            $query = mysqli_query($conn,"insert into accounts (user_account,fullname,email_account,pass_account) values ('$user_account','$fullname','$email_account','$pass_account')");
            if($query){
                echo '<script type="text/javascript">
                window.location = "login.php"
                 </script>';
            }else{
                return '<div class="alert alert-danger"><strong>Lỗi!</strong> Không thể thay đăng ký tài khoản.</div>';
            }
        }else{
            return '<div class="alert alert-danger"><strong>Lỗi!</strong> Không thể thay đăng ký tài khoản.</div>';
        }
    }else{
        return '<div class="alert alert-danger"><strong>Lỗi!</strong>Nhập lại mật khẩu không chính xác!.</div>';
    }
}
?>