<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="color:red; font-size:20px; font-weight:700">
            <i class="icon-plus"></i> Quản lý
        </div>
        <div class="card-body">


            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Admin ( Xin chào <?php
                                                if (isset($_COOKIE['admin'])) {
                                                    echo $_COOKIE['admin'];
                                                } ?> )
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="index.php?quanly=admin&ac=lietke"
                                            class="btn btn-sm btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Khách hàng
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="index.php?quanly=taikhoan&ac=lietke"
                                            class="btn btn-sm btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Liên hệ(<?php echo $sp->countLienhe(); ?>)
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="index.php?quanly=lienhe&ac=lietke"
                                            class="btn btn-sm btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Đơn hàng
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="index.php?quanly=donhang&ac=lietke"
                                            class="btn btn-sm btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Doanh thu tháng này</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Doanh thu năm nay</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Loại sản phẩm
                                        (<?php echo $sp->countLoaiSP(); ?>)
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="index.php?quanly=loaisp&ac=lietke"
                                            class="btn btn-sm btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Loại hoa(
                                        <?php echo $sp->countLoaihoa(); ?> )
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="index.php?quanly=loaihoa&ac=lietke"
                                            class="btn btn-sm btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Chủ đề (
                                        <?php echo $sp->countChude(); ?> )
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="index.php?quanly=chude&ac=lietke"
                                            class="btn btn-sm btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Khuyến mãi (
                                        <?php echo $sp->countKhuyenmai(); ?> )
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="index.php?quanly=khuyenmai&ac=lietke"
                                            class="btn btn-sm btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Sản phẩm (
                                        <?php echo $sp->countSanPham(); ?> )
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="index.php?quanly=sanpham&ac=lietke"
                                            class="btn btn-sm btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Tin tức - Cẩm
                                        nang ( <?php echo $sp->countCnxh(); ?> )
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <a href="index.php?quanly=cnxh&ac=lietke"
                                            class="btn btn-sm btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xem</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Pending Requests Card Example -->

            </div>
        </div>
    </div>
    <!-- Content Row -->
</div>