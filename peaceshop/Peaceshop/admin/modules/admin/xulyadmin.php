<div class="container-fluid ">
    <div class="card shadow mb-4">

        <div class="widget-box">
            <div class="card-body">
                <h5 class="h5 mb-2 text-danger">Thay đổi thông tin </h5>
                <hr>
                <?php
                    if (isset($_COOKIE['admin'])) {
                        $user = $_COOKIE['admin'];
                        $connection = mysqli_connect("localhost","root","");
                        mysqli_set_charset($connection, 'UTF8');
                        mysqli_select_db($connection, "peaceshop");
                        $sql="SELECT * FROM admins WHERE user_admin ='$user'";
                        $result = mysqli_query( $connection, $sql);
                        $row= mysqli_fetch_array($result);
                    }
                ?>
                <div class="table-reponsive">
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label"> Tên tài khoản : <?php
                                    if (isset($_COOKIE['admin'])) {
                                    echo $_COOKIE['admin'];
                                    }
                                ?></label>
                            </div>
                            <div class="form-group">
                                <label for="">Ảnh đại diện:</label>
                                <img style="margin-bottom:20px" src="../admin/uploads/<?php echo $row['img_admin']?>"
                                    height="200px" width="200px">
                                <input type="file" name="image" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="control-label"> Họ và tên : </label>
                                <input type="text" name="name" class="form-control"
                                    value="<?php echo $row['name_admin']?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label"> Email : </label>
                                <input type="email" name="email" class="form-control"
                                    value="<?php echo $row['email_admin']?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label"> SĐT : </label>
                                <input type="text" name="phone" class="form-control" value="<?php echo $row['phone']?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label"> Địa chỉ : </label>
                                <input type="text" name="diachi" class="form-control"
                                    value="<?php echo $row['diachi_admin']?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label"> Xác nhận mật khẩu : </label>
                                <input type="password" name="password" class="form-control" required="true">
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
                            $xuly->doithongtin();
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>