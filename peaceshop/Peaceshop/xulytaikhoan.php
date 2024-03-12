<?php
class taikhoandonhang extends DB{
    public function table_Donhang($id) {
        $sql= "SELECT * FROM `orders` WHERE `user_account`= '$id' and `trangthai` = '1' ";
        return $this->select($sql);
    }
    public function count_cxn($id) {
        $sql= "SELECT * FROM `orders` WHERE `user_account`= '$id' and `trangthai` = '1' ";
        $table = $this->select($sql);
        return count($table);
    }
    public function table_Donhangxn($id) {
        $sql= "SELECT * FROM `orders` WHERE `user_account`= '$id' and `trangthai` = '0' ";
        return $this->select($sql);
    }
    public function count_xn($id) {
        $sql= "SELECT * FROM `orders` WHERE `user_account`= '$id' and `trangthai` = '0' ";
        $table = $this->select($sql);
        return count($table);
    }
    public function table_Donhangdm($id) {
        $sql= "SELECT * FROM `orders` WHERE `user_account`= '$id' and `trangthai` = '3' ";
        return $this->select($sql);
    }
    public function count_dm($id) {
        $sql= "SELECT * FROM `orders` WHERE `user_account`= '$id' and `trangthai` = '3' ";
        $table = $this->select($sql);
        return count($table);
    }
    public function table_Donhangdh($id) {
        $sql= "SELECT * FROM `orders` WHERE `user_account`= '$id' and `trangthai` = '2' ";
        return $this->select($sql);
    }
    public function count_dh($id) {
        $sql= "SELECT * FROM `orders` WHERE `user_account`= '$id' and `trangthai` = '2' ";
        $table = $this->select($sql);
        return count($table);
    }
    public function table_spDonhang($id) {
        $sql= "SELECT * FROM `orders_sanpham` WHERE `user_account`= '$id'";
        return $this->select($sql);
    }
}
class spXuly extends DB {
    public function doimatkhau() {
        if (isset($_COOKIE['account'])) {
            $account =  "'" . $_COOKIE['account'] . "'";
            $password = "'" . $_POST['password'] . "'";
            $newpassword = "'" . $_POST['newpassword'] . "'";
            $sql = 'update accounts set pass_account = ' . $newpassword . ' where user_account = ' . $account . ' and pass_account = ' . $password;
            if ($this->querry($sql)) {
                return '<div class="alert alert-success"><strong>Đổi MK!</strong> Đã thay đổi mật khẩu thành công.</div>';
                $_COOKIE['account'] = $newpassword;
            } else {
                return '<div class="alert alert-danger"><strong>Lỗi!</strong> Không thể thay đổi mật khẩu thành công.</div>';
            }
        }
    }
    public function doithongtin() {
        if (isset($_COOKIE['account'])) {
            $account = $_COOKIE['account'];
            $fullname =$_POST['name'];
            $email_account =$_POST['email'];
            $phone_account =$_POST['phone'];
            $address_account =$_POST['address'];
            if(isset($_FILES['image'])){
                $hinhanh =$_FILES['image']['name'];
                $hinhanh_tmp = $_FILES['image']['tmp_name'];
                @move_uploaded_file($hinhanh_tmp, 'img/' . $_FILES['image']['name']);
            }
            if($hinhanh != ''){
            $sql = "update accounts set fullname ='$fullname',email_account ='$email_account',address_account ='$address_account',image_account='$hinhanh', phone_account ='$phone_account' where user_account = '$account'";
            }else{
                $sql = "update accounts set fullname ='$fullname',email_account ='$email_account',address_account ='$address_account', phone_account ='$phone_account' where user_account = '$account'";

            }
            if ($this->querry($sql)) {
                echo '<script type="text/javascript">
                window.location = "taikhoancanhan.php"
                 </script>';
            } else {
                return '<div class="alert alert-danger"><strong>Lỗi!</strong> Không thể thay đổi thông tin.</div>';
            }
        } else {
            return '<div class="alert alert-danger"><strong>Lỗi!</strong> Không thể thay đổi thông tin.</div>';
        }
    }
    public function xoathongtin(){
        if (isset($_COOKIE['account'])) {
            $account = $_COOKIE['account'];
            $sql = "delete from account where user_account like '$account'";
            if ($this->querry($sql)) {
                echo '<script type="text/javascript">
                window.location = "login.php"
                 </script>';
            } else {
                return '<div class="alert alert-danger"><strong>Lỗi!</strong> Không xóa thể xóa tài khoản.</div>';
            }
        } else {
            return '<div class="alert alert-danger"><strong>Lỗi!</strong> Không thể thay đổi thông tin.</div>';
        }
    }
}

?>