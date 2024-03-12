<div class="card-header border-bottom mb-3 d-flex d-md-none">
    <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
        <li class="nav-item">
            <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg></a>
        </li>
        <li class="nav-item">
            <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path
                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                    </path>
                </svg></a>
        </li>
        <li class="nav-item">
            <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg></a>
        </li>
        <li class="nav-item">
            <a href="#notification" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg></a>
        </li>
        <li class="nav-item">
            <a href="#billing" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                    <line x1="1" y1="10" x2="23" y2="10"></line>
                </svg></a>
        </li>
    </ul>
</div>
<div class="card-body tab-content">
    <div class="tab-pane active" id="profile">
        <h4>Thông tin tài khoản của bạn</h4>
        <hr>
        <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
            <div class="user-info">
                <img class="img-profile img-circle img-responsive center-block"
                    src="img/<?php echo $row['image_account']?>" alt="">
                <label class="btn8 btn-outline-primary" style="margin-left: 27px;">
                    <i class="fa fa-camera" style="font-size: 17px;"></i> Thay đổi ảnh đại diện
                    <input type="file" class="account-settings-fileinput" id="" placeholder="" value="<?php echo $row['image_account']
                                    ?>" name="image" />
                </label>
            </div>
            <div class="form-group">
                <label for="fullName">Họ và tên</label>
                <input type="text" class="form-control" name="name" id="fullName" aria-describedby="fullNameHelp"
                    placeholder="Nhập họ và tên" value="<?php echo $row['fullname'];?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" aria-describedby="EmailHelp"
                    placeholder="Nhập địa chỉ email" value="<?php echo $row['email_account'];?>">
            </div>
            <div class="form-group">
                <label for="Phone">Số điện thoại</label>
                <input type="text" class="form-control" name="phone" id="phone" aria-describedby="PhoneHelp"
                    placeholder="Nhập số điện thoại" value="<?php echo $row['phone_account'];?>">
            </div>
            <div class="form-group">
                <label for="location">Địa chỉ</label>
                <input type="text" class="form-control" name="address" id="location" placeholder="Nhập địa chỉ"
                    value="<?php echo $row['address_account'];?>">
            </div>
            <button type="submit" name="sua" class="btn btn-danger">Cập nhật</button>
        </form>
        <?php
        if (isset($_POST['sua'])) {
            require 'xulytaikhoan.php';
            $xuly = new spXuly();
            echo $xuly->doithongtin();
        }
        ?>
    </div>
    <div class="tab-pane" id="account">
        <h4>Cài đặt tài khoản</h4>
        <hr>
        <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Họ và tên</label>
                <input type="text" class="form-control" id="username" aria-describedby="usernameHelp"
                    placeholder="Enter your username" value="<?php echo $row['fullname'];?>">
            </div>
            <hr>
            <div class="form-group">
                <label class="d-block text-danger">Xóa tài khoản</label>
                <p class="text-muted font-size-sm">Sau khi bạn xóa tài khoản của mình, bạn sẽ không thể
                    quay lại. Hãy chắc chắn.</p>
            </div>
            <button class="btn btn-danger" type="submit" name="xoa">Xóa tài khoản</button>
        </form>
        <?php
        if (isset($_POST['xoa'])) {
            require 'xulytaikhoan.php';
            $xuly = new spXuly();
            echo $xuly->xoathongtin();
        }
        ?>
    </div>
    <div class="tab-pane" id="security">
        <h4>Cài đặt hệ thống bảo mật</h4>
        <hr>
        <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="d-block">Đổi mật khẩu</label>
                <input type="password" name="password" class="form-control" required="true"
                    placeholder="Nhập mật khẩu cũ của bạn">
                <input type="password" name="newpassword" class="form-control mt-1" required="true"
                    placeholder="Nhập mật khẩu mới">
                <input type="password" name="repassword" class="form-control mt-1" required="true"
                    placeholder="Xác nhận mật khẩu mới">
                <hr>
                <button class="btn btn-danger" type="submit" name="doi">Thay đổi mật khẩu</button>
                <?php
                    if (isset($_POST['doi'])) {
                        require 'xulytaikhoan.php';
                        $xuly = new spXuly();
                        echo $xuly->doimatkhau();
                    }
                    ?>
            </div>
        </form>
    </div>
    <div class="tab-pane" id="notification">
        <h4>Thiết lập thông báo</h4>
        <hr>
        <form>
            <!--<div class="form-group">
                                <label class="d-block mb-0">Security Alerts</label>
                                <div class="small text-muted mb-3">Receive security alert notifications via email</div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                    <label class="custom-control-label" for="customCheck1">Email each time a
                                        vulnerability is found</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" checked="">
                                    <label class="custom-control-label" for="customCheck2">Email a digest summary of
                                        vulnerability</label>
                                </div>
                            </div>-->
            <div class="form-group mb-0">
                <label class="d-block">Thông báo email</label>
                <ul class="list-group list-group-sm">
                    <li class="list-group-item has-icon">
                        Khi có khuyễn mãi
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                            <label class="custom-control-label" for="customSwitch1"></label>
                        </div>
                    </li>
                    <!--<li class="list-group-item has-icon">
                                        Updates From People
                                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                            <label class="custom-control-label" for="customSwitch2"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item has-icon">
                                        Reminders
                                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch3"
                                                checked="">
                                            <label class="custom-control-label" for="customSwitch3"></label>
                                        </div>
                                    </li>-->
                    <li class="list-group-item has-icon">
                        Sự kiện
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked="">
                            <label class="custom-control-label" for="customSwitch4"></label>
                        </div>
                    </li>
                    <!--<li class="list-group-item has-icon">
                                        Pages You Follow
                                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                            <label class="custom-control-label" for="customSwitch5"></label>
                                        </div>
                                    </li>-->
                </ul>
            </div>
        </form>
    </div>
    <div class="tab-pane " id="billing">
        <?php
            require 'xulytaikhoan.php';
            $donhang = new taikhoandonhang();
        ?>
        <?php
    if (@$_GET['tt']) {
    echo $_GET['tt'];
    }
?>
        <div class="tabset">
            <!-- Tab 1 -->
            <input type="radio" name="tabset" id="tab1" aria-controls="choxacnhan" checked>
            <label for="tab1">Chờ xác nhận <span class="badge badge-danger badge-counter"
                    style=""><?php echo $donhang-> count_cxn($account) ?>
                </span></label>

            <!-- Tab 2 -->
            <input type="radio" name="tabset" id="tab2" aria-controls="daxacnhan">
            <label for="tab2">Đã xác nhận <span class="badge badge-danger badge-counter"
                    style=""><?php echo $donhang-> count_xn($account) ?>
                </span></label>

            <input type="radio" name="tabset" id="tab3" aria-controls="damua">
            <label for="tab3">Đã mua <span class="badge badge-danger badge-counter"
                    style=""><?php echo $donhang-> count_dm($account)?>
                </span></label>
            <!-- Tab 3 -->
            <input type="radio" name="tabset" id="tab4" aria-controls="dahuy">
            <label for="tab4">Đã hủy<span class="badge badge-danger badge-counter"
                    style=""><?php echo $donhang-> count_dh($account)?>
                </span></label>
            <div class="tab-panels">
                <section id="choxacnhan" class="tab-panel">

                    <?php
                         $tb_cxn = $donhang-> table_Donhang($account);
                         foreach ($tb_cxn as $row):
                     ?>
                    <form action="taikhoancanhan.php" method="post">

                        <div class="order-cart-content"
                            style="boder:1px solid #555; margin-bottom:10px;box-shadow: 0 3px 10px rgb(0 0 0 / 5%);">
                            <?php
                                $tb_sp = $donhang->table_spDonhang($account);
                                foreach ($tb_sp as $r):
                                    if ($row['id_order'] == $r['id_order']):
                            ?>
                            <div class="order-cart-content-item" style="margin-right:40px; padding-right:40px">
                                <p style="width: 25%; flex: 0 0 25%">
                                    <img src="admin/modules/quanlysanpham/uploads/<?php echo $r['anh']?>"
                                        class="img-responsive" style="width:100px" alt="<?php echo $r['name']?>">
                                </p>
                                <p style="">
                                    <a class="p-name" style="color: #333; font-weight:600" href=""
                                        title="<?php echo $r['name']?>"><?php echo $r['name']?>
                                    </a><br>
                                    <a class="p-name" style="color: #333;">Số
                                        lượng:</a><span>x<?php echo $r['soluong']?></span>
                                </p>
                                <p style=""><?php echo number_format($r['gia'])?>vnđ </p>
                            </div>
                            <?php
                                    endif;
                                endforeach;
                            ?>
                        </div>
                        <div class="_1Qn42s">
                            <div class="_1lM63-"><span class="_2xFj47">Đang chờ Người bán xác
                                    nhận đơn hàng <?php echo $row['id_order'];?></span></div>
                            <div class="_23TzMz">
                                <div class="_2BTXui">
                                    <button class="w3-bar-item w3-button btn btn-danger" type="submit"
                                        name="huydon<?php echo $row['id_order']; $huydon = 'huydon' . $row['id_order']?>"
                                        onclick="return confirm('Bạn có thật sự muốn hủy đơn ?');">Hủy
                                        đơn </button>
                                </div>
                                <div class="_3YxeCv"><button class="w3-bar-item w3-button btn btn-info">Xem chi
                                        tiết đơn
                                        hàng</button></div>
                            </div>
                        </div>
                    </form>
                    <?php
                        if (isset($_POST[$huydon])) {
                            $id = "'" . $row['id_order'] . "'";
                            $sql = 'UPDATE orders SET trangthai = 2 where orders.id_order = ' . $id;
                            $result = mysqli_query( $connection, $sql);
                            header('location:taikhoancanhan.php');
                        }
                    ?>
                    <?php
                        endforeach;
                        ?>
                </section>
                <section id="daxacnhan" class="tab-panel">
                    <?php
                        $tb_xn = $donhang-> table_Donhangxn($account);
                        foreach ($tb_xn as $row):
                     ?>
                    <div class="order-cart-content "
                        style="boder:1px solid #555; margin-bottom:10px;box-shadow: 0 3px 10px rgb(0 0 0 / 5%);">
                        <?php
                            $tb_sp = $donhang->table_spDonhang($account);
                            foreach ($tb_sp as $r):
                                if ($row['id_order'] == $r['id_order']):
                        ?>
                        <div class="order-cart-content-item" style="margin-right:40px; padding-right:40px">
                            <p style="width: 25%; flex: 0 0 25%">
                                <img src="admin/modules/quanlysanpham/uploads/<?php echo $r['anh']?>"
                                    class="img-responsive" style="width:100px" alt="<?php echo $r['name']?>">
                            </p>
                            <p style="">
                                <a class="p-name" style="color: #333; font-weight:600" href=""
                                    title="<?php echo $r['name']?>"><?php echo $r['name']?> </a><br>
                                <a class="p-name" style="color: #333;">Số
                                    lượng:</a><span>x<?php echo $r['soluong']?></span>
                            </p>
                            <p style=""><?php echo number_format($r['gia'])?>vnđ </p>
                        </div>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                    <div class="_1Qn42s">
                        <div class="_1lM63-"><span class="_2xFj47">Đơn hàng đang được giao</span>
                        </div>
                        <div class="_23TzMz">

                            <div class="_3YxeCv"><button class="w3-bar-item w3-button btn btn-info">Xem
                                    chi tiết đơn
                                    hàng</button></div>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    ?>
                </section>

                <section id="damua" class="tab-panel">
                    <?php
                        $tb_dm = $donhang-> table_Donhangdm($account);
                        foreach ($tb_dm as $row):
                    ?>

                    <div class="order-cart-content "
                        style="boder:1px solid #555; margin-bottom:10px;box-shadow: 0 3px 10px rgb(0 0 0 / 5%);">
                        <?php
                            $tb_spdm = $donhang->table_spDonhang($account);
                            foreach ($tb_spdm as $r):
                                if ($row['id_order'] == $r['id_order']):
                        ?>
                        <div class="order-cart-content-item" style="margin-right:40px; padding-right:40px">
                            <p style="width: 25%; flex: 0 0 25%">
                                <img src="admin/modules/quanlysanpham/uploads/<?php echo $r['anh']?>"
                                    class="img-responsive" style="width:100px" alt="<?php echo $r['name']?>">
                            </p>
                            <p style="">
                                <a class="p-name" style="color: #333; font-weight:600" href=""
                                    title="<?php echo $r['name']?>"><?php echo $r['name']?> </a><br>
                                <a class="p-name" style="color: #333;">Số
                                    lượng:</a><span>x<?php echo $r['soluong']?></span>
                            </p>
                            <p style=""><?php echo number_format($r['gia'])?>vnđ </p>
                        </div>
                        <div class="_1Qn42s">
                            <div class="_1lM63-"><span class="_2xFj47">Đã hoàn thành đơn hàng</span>
                            </div>
                            <div class="_23TzMz">
                                <div class="_3YxeCv">
                                    <?php if($row['trangthai']=3){
                                        echo'<a href="taikhoancanhan.php?ac=danhgia&id=';echo $r['id_product'];echo '"type="button" class="btn btn-danger" style="color:#fff"> Đánh giá sản phẩm </a>';
                                    }else {
                                        echo'<a type="button" class="btn btn-danger" style="color:#fff"> Xem đánh giá </a>';

                                    }
                                    ?>
                                </div>
                                <div class="_3YxeCv"><button class="w3-bar-item w3-button btn btn-info">Mua
                                        lại</button>
                                </div>
                            </div>
                        </div>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                    <?php
                        endforeach;
                    ?>
                </section>
                <section id="dahuy" class="tab-panel">
                    <?php
                    $tb_dh = $donhang-> table_Donhangdh($account);
                    foreach ($tb_dh as $row):
                    ?>
                    <div class="order-cart-content "
                        style="boder:1px solid #555; margin-bottom:10px;box-shadow: 0 3px 10px rgb(0 0 0 / 5%);">
                        <?php
                        $tb_spdm = $donhang->table_spDonhang($account);
                        foreach ($tb_spdm as $r):
                            if ($row['id_order'] == $r['id_order']):
                        ?>
                        <div class="order-cart-content-item" style="margin-right:40px; padding-right:40px">
                            <p style="width: 25%; flex: 0 0 25%">
                                <img src="admin/modules/quanlysanpham/uploads/<?php echo $r['anh']?>"
                                    class="img-responsive" style="width:100px" alt="<?php echo $r['name']?>">
                            </p>
                            <p style="">
                                <a class="p-name" style="color: #333; font-weight:600" href=""
                                    title="<?php echo $r['name']?>"><?php echo $r['name']?> </a><br>
                                <a class="p-name" style="color: #333;">Số
                                    lượng:</a><span>x<?php echo $r['soluong']?></span>
                            </p>
                            <p style=""><?php echo number_format($r['gia'])?>vnđ </p>
                        </div>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                    <div class="_1Qn42s">
                        <div class="_1lM63-"><span class="_2xFj47">Đã hủy đơn hàng</span>
                        </div>
                        <div class="_23TzMz">
                            <div class="_3YxeCv"><button class="w3-bar-item w3-button btn btn-info">Mua
                                    lại</button>
                            </div>
                            <div class="_3YxeCv"><button class="w3-bar-item w3-button btn btn-danger">Xóa đơn
                                    hàng</button>
                            </div>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    ?>
                </section>
            </div>

        </div>
    </div>
</div>