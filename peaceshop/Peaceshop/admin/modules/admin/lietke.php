<div class="container-fluid ">
    <div class="row">
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Admin</h6>
                </div>
                <!-- Card Body -->
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
                <div class="card-body">
                    <div class="" style="width:220px;height: 220px; margin-left:60px">
                        <img class="img-profile rounded-circle"
                            style="width:100%; height:100%; border: 10px solid #1cc88a"
                            src="../admin/uploads/<?php echo $row['img_admin']?>" alt="">
                    </div>
                    <hr>
                    <h6 class="m-0 font-weight-bold text-center"><?php echo $row['name_admin']?></h6>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">

                <div class="widget-box">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Thông tin</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-reponsive">
                            <?php
                                if (@$_GET['tt'] ) {
                                    $tt = $_GET['tt'];
                                    if($tt !=''){
                                    echo'<div class="alert alert-success">';
                                    echo $tt;
                                    echo '</div>';
                                    }else{
                                    echo '<div></div>';
                                    }
                                }
                            ?>
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
                                        <label class="control-label"> Họ và tên : <?php echo $row['name_admin']?>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for> Email : <?php echo $row['email_admin']?> </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"> SĐT : <?php echo $row['phone']?> </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"> Địa chỉ :
                                            <?php echo $row['diachi_admin']?></label>
                                    </div>
                                    <a href="index.php?quanly=admin&ac=xulyadmin" type="button"
                                        class="btn btn-warning">Thay
                                        đổi thông tin</a>
                                    <a href="index.php?quanly=admin&ac=xuly" type="button" class="btn btn-danger">Thay
                                        đổi mật khẩu</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>