<div class="container-fluid ">

    <h3>Tài khoản cá nhân</h3>
</div>
<div class="card shadow mb-4">

    <div class="widget-box">
        <div class="card-body">
            <h5 class="h5 mb-2 text-danger">Thay đổi mật khẩu </h5>
            <hr>
            <div class="table-reponsive">
                <div class="widget-content nopadding">
                    <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="control-label"> Tên tài khoản : <?php
                    if (isset($_COOKIE['admin'])) {
                        echo $_COOKIE['admin'];
                    }
                    ?> </label>

                        </div>
                        <div class="form-group">
                            <label class="control-label"> Nhập mật khẩu cũ : </label>
                            <input type="password" name="password" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <label for> Đặt mật khẩu mới : </label>
                            <input type="password" name="newpassword" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label"> Nhập lại mật khẩu : </label>
                            <input type="password" name="repassword" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <input type="submit" name="ok" value="Xác nhận" class="btn btn-warning">
                                <a href="index.php?quanly=admin&ac=lietke" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                    </form>
                    <?php
                        if (isset($_POST['ok'])) {
                            $xuly->doimatkhau();
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>