<?php
include "header.php";
?>
<!--<script>
function validateForm() {
    let password = $(".personal-info").find("#password").val();
    let password1 = $(".personal-info").find("#password1").val();

    if (password != password1) {
        Swal.fire(
            'Thông báo',
            'Mật khẩu không trùng khớp!',
            'error'
        )
        return false;
    }
}
</script>-->

<!-- chỗ này get ra thông tin người dùng đã login bẳng session id (getbyid) -->
<?php     
          
        if (isset($_COOKIE['account'])) {
            $account = $_COOKIE['account'];
            $connection = mysqli_connect("localhost","root","");
            mysqli_set_charset($connection, 'UTF8');
            mysqli_select_db($connection, "peaceshop");
            $sql="SELECT * FROM accounts WHERE user_account ='$account'";
            $result = mysqli_query( $connection, $sql);
            $row= mysqli_fetch_array($result);

            //$sql_cxn="SELECT * FROM `orders` WHERE `user_account`= '$account' and `trangthai` = '1'";
            //$result_cxn = mysqli_query( $connection, $sql_cxn);
            //$row_cxn= mysqli_fetch_array($result);
          }
        else
        {
            header("Location:index.php");
        }
?>

<link rel="stylesheet" href="css/khachhang.css">
<link rel="stylesheet" href="css/khachhang/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container" style="margin-bottom:50px">


    <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tài khoản cá nhân</li>
        </ol>
    </nav>

    <div class="row gutters-sm">
        <div class="col-md-4 d-none d-md-block">
            <div class="card">
                <div class="card-body">
                    <nav class="nav flex-column nav-pills nav-gap-y-1">
                        <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user mr-2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>Thông tin tài khoản
                        </a>
                        <a href="#account" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-settings mr-2">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path
                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                </path>
                            </svg>Cài đặt tài khoản
                        </a>
                        <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-shield mr-2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>Bảo mật
                        </a>
                        <a href="#notification" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-bell mr-2">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>Thông Báo
                        </a>
                        <a href="#billing" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-credit-card mr-2">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                <line x1="1" y1="10" x2="23" y2="10"></line>
                            </svg>Đơn hàng
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <?php
        if (isset($_GET['ac'])) {
            $get2 = $_GET['ac'];
        } else {
            $get2 = '';
        }
        if (($get2 == 'thongtin')) {
            require ('thongtin.php');
        } else if (($get2 == 'danhgia')) {
            require 'danhgia.php';
        }
        ?>
            </div>
        </div>
    </div>


</div>
<?php
include "footer.php";
?>