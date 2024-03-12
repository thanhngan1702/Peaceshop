<?php
if(isset($_POST['Name'])){
    if (isset($_COOKIE['account'])) {
        $user_account = $_COOKIE['account'];
    }else{
    $user_account ="";
    }
    $tong = 0;
    $tongtien=0;
    foreach ($_SESSION['giohang'] as $key => $value) {
        $SoLuong = $value['num'];
        $tong = $SoLuong * $value['price'];
        $tongtien += $tong;
    }
    $error = array();

    if(isset($_POST['Name'])){
        if(empty($_POST['Name'])){
            $error['Name'] = "Vui lòng nhập họ tên!";
        }else{
            $full_name=$_POST['Name'];
        }
    }

    if(isset($_POST['email'])){
        if(empty($_POST['email'])){
            $error['email'] = "Vui lòng nhập địa chỉ Email!";
        }else{
            $email=$_POST['email'];
            $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"; 
            if (!preg_match ($pattern, $email) ){  
            $error['email'] = "Không đúng định dạng!";
            }
        }
    } 

    if(isset($_POST['Phone'])){
        if(empty($_POST['Phone'])){
            $error['Phone'] = "Vui lòng nhập số điện thoại!";
        }else{
            $phone=$_POST['Phone'];
            if (!preg_match ("/^[0-9]*$/",$phone)) {  
                $error['Phone'] = "Không đúng định dạng!";
            }
        }
    }  

    $phone2=$_POST['phone2'];
    if (!preg_match ("/^[0-9]*$/",$phone2)) {  
        $error['phone2'] = "Không đúng định dạng!";
    }

    $receive_type =$_POST['receive_type'];
    if ($receive_type == "store"){
        $address= "Tại cửa hàng";
        $ship = "0";
    }else{
        if(isset($_POST['diachinhan'])){
            if(empty($_POST['diachinhan'])){
                $error['diachinhan'] = "Vui lòng nhập địa chỉ!";
            }else{
                $address=$_POST['diachinhan'];
            }
        }  
        if($tongtien > 1000000){
            $ship = "0";
        }else{
            $ship= "25000";
        }
    }
    $total= $tongtien+$ship;
    if(isset($_POST['fullname'])){
        if(empty($_POST['fullname'])){
            $error['fullname'] = "Vui lòng nhập họ tên người nhận!";
        }else{
            $name_nn=$_POST['fullname'];
        }
    } 
    $gioitinhnn=$_POST['gender'];
    if(isset($_POST['customer_phone'])){
        if(empty($_POST['customer_phone'])){
            $error['customer_phone'] = "Vui lòng nhập số điện thoại người nhận!";
        }else{
            $sdt_nn=$_POST['customer_phone'];
        }
    }   
    if(isset($_POST['customer_phone'])){
        if(empty($_POST['customer_phone'])){
            $error['customer_phone'] = "Vui lòng nhập số điện thoại!";
        }else{
            $sdt_nn=$_POST['customer_phone'];
            if (!preg_match ("/^[0-9]*$/",$sdt_nn)) {  
                $error['customer_phone'] = "Không đúng định dạng!";
            }
        }
    }  
    $sdt_nn2 = $_POST['customer_phone_2'];
    if (!preg_match ("/^[0-9]*$/",$sdt_nn2)) {  
        $error['phone2'] = "Không đúng định dạng!";
    }
    if(isset($_POST['order_delivery_date'])){
        if(empty($_POST['order_delivery_date'])){
            $error['order_delivery_date'] = "Bạn chưa chọn thời gian!";
        }else{
            $time_gh=$_POST['order_delivery_date'];
        }
    }   
    $ghichu=$_POST['note'];
    $doituong=$_POST['object'];
    $tangdip=$_POST['occasion'];
    $thongdiep=$_POST['message'];
    $ngaythem= date('Y/m/d h:i:s');
    $giogiao=$_POST['order_delivery_time'];
    if(empty($_POST['anonymous'])){
    $andanh = "0";
    }else{ $andanh=$_POST['anonymous'];}
    if(empty($error)){
    $query = mysqli_query($conn,"INSERT INTO orders(user_account,total,full_name,email,phone,phone2,address,name_nn,sdt_nn,sdt_nn2,time_gh,ghichu,doituong,tangdip,thongdiep,thanhtoan,trangthai,ngaythem,giogiao,andanh,gioitinhnn)VALUES('$user_account','$total','$full_name','$email','$phone','$phone2','$address','$name_nn','$sdt_nn','$sdt_nn2','$time_gh','$ghichu','$doituong','$tangdip','$thongdiep','1','1','$ngaythem','$giogiao','$andanh','$gioitinhnn')");
        if($query){
            $id_order = mysqli_insert_id($conn);
            $tong = 0;
            $tongtien=0;
            foreach ($_SESSION['giohang'] as $key => $value) {
                $SoLuong = $value['num'];
                $tong = $SoLuong * $value['price'];
                $gia = $value['price'];
                $anh = $value['image'];
                $name =$value['name'];
                $tongtien += $tong;
                $sql ="insert into  `orders_sanpham`(`id_order`,`user_account`, `id_product`, `soluong`, `anh` , `gia` , `name`) values ('$id_order','$user_account','$key','$SoLuong','$anh','$gia','$name')";
                mysqli_query($conn,$sql);
            }
            echo '
            <div id="myModal1" class="modal fade ">
                <div class="modal-dialog modal-confirm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="icon-box">
                                <i class="material-icons">&#xE876;</i>
                            </div>
                            <h4 class="modal-title w-100">Success!</h4>
                        </div>
                        <div class="modal-body">
                            <p class="text-center">Cảm ơn bạn đã đặt hàng thành
                                công!.</p>
                            <p class="text-center"> PeaceShop xin cảm ơn quý khách đã sử dụng dịch vụ mua hàng online. Trong vòng 2 tiếng sẽ có nhân viên liên hệ với quý khách theo số điện thoại 0364693924 để xác nhận thông tin này
                            </p>
                        </div>
                        <div class="modal-footer">
                            <!--<button class="btn btn-success btn-block"> <a
                                    style="color:#fff"
                                    href="chitietdonhang.php"> Xem chi tiết đơn
                                    hàng</a></button>-->
                            <button class="btn btn-success btn-block"
                                data-dismiss="modal"><a
                                style="color:#fff"
                                href="index.php">Quay lại Trang chủ</a></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <style>
            .modal-confirm {
                color: #636363;
                width: 420px;
                font-size: 14px;
            }

            .modal-confirm .modal-content {
                padding: 20px;
                border-radius: 5px;
                border: none;
            }

            .modal-confirm .modal-header {
                border-bottom: none;
                position: relative;
            }

            .modal-confirm h4 {
                text-align: center;
                font-size: 26px;
                margin: 30px 0 -15px;
            }

            .modal-confirm .form-control,
            .modal-confirm .btn {
                min-height: 40px;
                border-radius: 3px;
            }

            .modal-confirm .close {
                position: absolute;
                top: -5px;
                right: -5px;
            }

            .modal-confirm .modal-footer {
                border: none;
                text-align: center;
                border-radius: 5px;
                font-size: 13px;
            }

            .modal-confirm .icon-box {
                color: #fff;
                position: absolute;
                margin: 0 auto;
                left: 0;
                right: 0;
                top: -70px;
                width: 95px;
                height: 95px;
                border-radius: 50%;
                z-index: 9;
                background: #82ce34;
                padding: 15px;
                text-align: center;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
            }

            .modal-confirm .icon-box i {
                font-size: 58px;
                position: relative;
                top: 3px;
            }

            .modal-confirm.modal-dialog {
                margin-top: 80px;
            }

            .modal-confirm .btn {
                color: #fff;
                border-radius: 4px;
                background: #f58831;
                text-decoration: none;
                transition: all 0.4s;
                line-height: normal;
                border: none;
            }



            .modal-confirm .btn:hover,
            .modal-confirm .btn:focus {
                background: #6fb32b;
                outline: none;
            }

            .trigger-btn {
                display: inline-block;
                margin: 100px auto;
            }
            </style>';
            unset($_SESSION['giohang']);

        }
    }
}
?>