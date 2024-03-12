<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng ký tài khoản</title>

    <!-- Custom fonts for this template-->
    <link href="admin/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
.form-validate-error {
    color: red;
}
</style>
<?php
$conn = mysqli_connect('localhost','root','','peaceshop');
mysqli_set_charset($conn,'utf8');
require 'spRegister.php';
error_reporting(0);
?>

<body class="bg-gradient-info">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Thêm tài khoản mới!</h1>
                            </div>
                            <form class="user" method="POST" action="register.php" novalidate="novalidate">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user"
                                            id="exampleUserName" value="<?php echo $_POST['name'] ?>"
                                            placeholder="Tên tài khoản">
                                        <div id="User_validate" class="form-validate-error">
                                            <?php echo $error['name'] ?></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="fullname" class="form-control form-control-user"
                                            id="exampleLastName" value="<?php echo $_POST['fullname'] ?>"
                                            placeholder="Họ và tên">
                                        <div id="Name_validate" class="form-validate-error">
                                            <?php echo $error['fullname'] ?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user"
                                        id="exampleInputEmail" value="<?php echo $_POST['email'] ?>"
                                        placeholder=" Địa chỉ email">
                                    <div id="Email_validate" class="form-validate-error">
                                        <?php echo $error['email'] ?></div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" value="<?php echo $_POST['password'] ?>"
                                            placeholder=" Mật khẩu" require>
                                        <div id="Name_validate" class="form-validate-error">
                                            <?php echo $error['password'] ?></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="repassword" class="form-control form-control-user"
                                            id="exampleRepeatPassword" value="<?php echo $_POST['repassword'] ?>"
                                            placeholder=" Nhập lại mật khẩu" require>
                                        <div id="Name_validate" class="form-validate-error">
                                            <?php echo $error['repassword'] ?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="dangki" class="btn btn-primary btn-user btn-block">Đăng
                                        ký
                                    </button>
                                </div>
                                <hr>
                                <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Đăng ký với Google
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Đăng ký với Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Quên mật khẩu?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Đã có tài khoản! Đăng nhập</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

</body>

</html>