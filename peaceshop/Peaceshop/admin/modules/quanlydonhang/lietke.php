<!-- Page Heading -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h1 class="h3 mb-2 text-gray-800">Danh sách đơn hàng [ <?php echo $dh->count(); ?> đơn ]</h1>
            <div class="w3-bar w3-black">
                <button class="w3-bar-item w3-button btn btn-success" onclick="openDonhang('chuaduyet')">Chưa
                    duyệt [ <?php echo $dh->countcd(); ?> đơn ]</button>
                <button class="w3-bar-item w3-button btn btn-success" onclick="openDonhang('daduyet')">Đã duyệt
                    [ <?php echo $dh->countdd(); ?> đơn ]</button>
                <button class="w3-bar-item w3-button btn btn-danger" onclick="openDonhang('dahuy')">Đã hủy
                    [ <?php echo $dh->countdh(); ?> đơn ]</button>
                <button class="w3-bar-item w3-button btn btn-warning" onclick="openDonhang('dahoanthanh')">Đã hoàn thành
                    [ <?php echo $dh->countdht(); ?> đơn ]</button>
            </div>
            <hr>
            <?php
                if (@$_GET['tt']) {
                echo $_GET['tt'];
                }
            ?>
            <div id="chuaduyet" class="w3-container w3-display-container donhang">
                <h2 class="text-danger">Chưa duyệt</h2>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Thông tin người gửi</th>
                                <th>Tổng tiền</th>
                                <th>Thời gian giao hàng</th>
                                <th>Địa chỉ giao</th>
                                <th>Sđt liên lạc</th>
                                <th>Thông tin người nhận</th>
                                <th>Thanh toán</th>
                                <th>Ngày đặt</th>
                                <th>Thông điệp</th>
                                <th>Ghi chú</th>
                                <th>Sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $tbDonhangcd = $dh-> table_ordercd();
                                    foreach ($tbDonhangcd as $row) :
                            ?>
                            <tr>
                                <form action="modules/quanlydonhang/xuly.php?id=<?php echo $row['id_order']; ?>"
                                    method="post" enctype="multipart/form-data">

                                    <td><?php echo $row['id_order']; ?></td>
                                    <td> Tên:<span name="full_name"><?php echo $row['full_name']; ?></span> <br>
                                        Email:<span name="email"><?php echo $row['email']; ?></span>
                                        <br>
                                        SĐ <?php echo $row['phone']; ?> <br> <?php echo $row['phone2']; ?>
                                    </td>
                                    <td><?php echo number_format($row['total']) ?></td>
                                    <td><?php echo $row['time_gh']; ?> <br> <?php echo $row['giogiao']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['sdt_nn']; ?> <br> <?php  echo $row['sdt_nn']; ?></td>
                                    <td>Tên: <?php echo $row['name_nn']; ?> <br>
                                        Giới tính: <?php if($row['gioitinhnn'] == 1){ echo 'Nữ';}else{ echo 'Nam';} ?>
                                    </td>
                                    <td><?php if($row['thanhtoan'] == 1){
                                          echo 'Chưa thanh toán';
                                        }else 'Đã thanh toán'
                                    ?></td>
                                    <td><?php echo $row['ngaythem']; ?> </td>
                                    <td><?php echo $row['thongdiep']; ?></td>
                                    <td><?php echo $row['ghichu']; ?></td>
                                    <td><a href="index.php?quanly=donhang&ac=xemchitiet&id=<?php echo $row['id_order']; ?>"
                                            type="button" class="btn btn-primary">Xem</a>
                                    </td>

                                    <td><input type="submit" name="sua" value="Chưa duyệt" class="btn btn-warning"></td>
                                    <td>
                                        <!--<a href="?mod=nguoidung&amp;act=detail&amp;id=1" type="button" class="btn btn-success">Xem</a>-->
                                        <a href="modules/quanlydonhang/xuly.php?id=<?php echo $row['id_order']; ?>"
                                            onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                            class="btn btn-danger">Xóa</a>
                                    </td>
                                </form>

                            </tr>
                            <?php
                                endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="daduyet" class="w3-container w3-display-container donhang" style="display:none">
                <h2 class="text-danger">Đã duyệt</h2>
                <div class="table-responsive">
                    <table class="table table-bordered" id="Table2" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Thông tin người gửi</th>
                                <th>Tổng tiền</th>
                                <th>Thời gian giao hàng</th>
                                <th>Địa chỉ giao</th>
                                <th>Sđt liên lạc</th>
                                <th>Thông tin người nhận</th>
                                <th>Thanh toán</th>
                                <th>Ngày đặt</th>
                                <th>Thông điệp</th>
                                <th>Ghi chú</th>
                                <th>Sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $tbDonhangdd = $dh-> table_orderdd();
                                    foreach ($tbDonhangdd as $row) :
                            ?>
                            <tr>
                                <form action="modules/quanlydonhang/xuly.php?id=<?php echo $row['id_order']; ?>"
                                    method="post" enctype="multipart/form-data">

                                    <td><?php echo $row['id_order']; ?></td>
                                    <td> Tên: <?php echo $row['full_name']; ?> <br> Email: <?php echo $row['email']; ?>
                                        <br>
                                        SĐT: <?php echo $row['phone']; ?> <br> <?php echo $row['phone2']; ?>
                                    </td>
                                    <td><?php echo number_format($row['total']) ?></td>
                                    <td><?php echo $row['time_gh']; ?> <br> <?php echo $row['giogiao']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['sdt_nn']; ?> <br> <?php  echo $row['sdt_nn']; ?></td>
                                    <td>Tên: <?php echo $row['name_nn']; ?> <br>
                                        Giới tính: <?php if($row['gioitinhnn'] == 1){ echo 'Nữ';}else{ echo 'Nam';} ?>
                                    </td>
                                    <td><?php if($row['thanhtoan'] == 1){
                                          echo 'Chưa thanh toán';
                                        }else 'Đã thanh toán'
                                    ?></td>
                                    <td><?php echo $row['ngaythem']; ?> </td>
                                    <td><?php echo $row['thongdiep']; ?></td>
                                    <td><?php echo $row['ghichu']; ?></td>
                                    <td><a href="index.php?quanly=donhang&ac=xemchitiet&id=<?php echo $row['id_order']; ?>"
                                            type="button" class="btn btn-primary">Xem</a>
                                    </td>

                                    <td><input type="submit" name="sua2" value="Chưa giao" class="btn btn-warning">
                                    </td>
                                    <td>
                                        <!--<a href="?mod=nguoidung&amp;act=detail&amp;id=1" type="button" class="btn btn-success">Xem</a>-->
                                        <a href="modules/quanlydonhang/xuly.php?id=<?php echo $row['id_order']; ?>"
                                            onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                            class="btn btn-danger">Xóa</a>
                                    </td>
                                </form>

                            </tr>
                            <?php
                                endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="dahuy" class="w3-container w3-display-container donhang" style="display:none">
                <h2 class="text-danger">Đã hủy</h2>
                <div class="table-responsive">
                    <table class="table table-bordered" id="Table3" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Thông tin người gửi</th>
                                <th>Tổng tiền</th>
                                <th>Thời gian giao hàng</th>
                                <th>Địa chỉ giao</th>
                                <th>Sđt liên lạc</th>
                                <th>Thông tin người nhận</th>
                                <th>Thanh toán</th>
                                <th>Ngày đặt</th>
                                <th>Thông điệp</th>
                                <th>Ghi chú</th>
                                <th>Sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $tbDonhangdh = $dh-> table_orderdh();
                                    foreach ($tbDonhangdh as $row) :
                            ?>
                            <tr>
                                <form action="modules/quanlydonhang/xuly.php?id=<?php echo $row['id_order']; ?>"
                                    method="post" enctype="multipart/form-data">

                                    <td><?php echo $row['id_order']; ?></td>
                                    <td> Tên: <?php echo $row['full_name']; ?> <br> Email: <?php echo $row['email']; ?>
                                        <br>
                                        SĐT: <?php echo $row['phone']; ?> <br> <?php echo $row['phone2']; ?>
                                    </td>
                                    <td><?php echo number_format($row['total']) ?></td>
                                    <td><?php echo $row['time_gh']; ?> <br> <?php echo $row['giogiao']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['sdt_nn']; ?> <br> <?php  echo $row['sdt_nn']; ?></td>
                                    <td>Tên: <?php echo $row['name_nn']; ?> <br>
                                        Giới tính: <?php if($row['gioitinhnn'] == 1){ echo 'Nữ';}else{ echo 'Nam';} ?>
                                    </td>
                                    <td><?php if($row['thanhtoan'] == 1){
                                          echo 'Chưa thanh toán';
                                        }else 'Đã thanh toán'
                                    ?></td>
                                    <td><?php echo $row['ngaythem']; ?> </td>
                                    <td><?php echo $row['thongdiep']; ?></td>
                                    <td><?php echo $row['ghichu']; ?></td>
                                    <td><a href="index.php?quanly=donhang&ac=xemchitiet&id=<?php echo $row['id_order']; ?>"
                                            type="button" class="btn btn-primary">Xem</a>
                                    </td>

                                    <td><input type="submit" name="sua2" value="Chưa duyệt" class="btn btn-warning">
                                    </td>
                                    <td>
                                        <!--<a href="?mod=nguoidung&amp;act=detail&amp;id=1" type="button" class="btn btn-success">Xem</a>-->
                                        <a href="modules/quanlydonhang/xuly.php?id=<?php echo $row['id_order']; ?>"
                                            onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                            class="btn btn-danger">Xóa</a>
                                    </td>
                                </form>

                            </tr>
                            <?php
                                endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="dahoanthanh" class="w3-container w3-display-container donhang" style="display:none">
                <h2 class="text-danger">Đã hoàn thành</h2>
                <div class="table-responsive">
                    <table class="table table-bordered" id="Table4" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Thông tin người gửi</th>
                                <th>Tổng tiền</th>
                                <th>Thời gian giao hàng</th>
                                <th>Địa chỉ giao</th>
                                <th>Sđt liên lạc</th>
                                <th>Thông tin người nhận</th>
                                <th>Thanh toán</th>
                                <th>Ngày đặt</th>
                                <th>Thông điệp</th>
                                <th>Ghi chú</th>
                                <th>Sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $tbDonhangdht = $dh-> table_orderdht();
                                    foreach ($tbDonhangdht as $row) :
                            ?>
                            <tr>
                                <form action="modules/quanlydonhang/xuly.php?id=<?php echo $row['id_order']; ?>"
                                    method="post" enctype="multipart/form-data">

                                    <td><?php echo $row['id_order']; ?></td>
                                    <td> Tên: <?php echo $row['full_name']; ?> <br> Email: <?php echo $row['email']; ?>
                                        <br>
                                        SĐT: <?php echo $row['phone']; ?> <br> <?php echo $row['phone2']; ?>
                                    </td>
                                    <td><?php echo number_format($row['total']) ?></td>
                                    <td><?php echo $row['time_gh']; ?> <br> <?php echo $row['giogiao']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['sdt_nn']; ?> <br> <?php  echo $row['sdt_nn']; ?></td>
                                    <td>Tên: <?php echo $row['name_nn']; ?> <br>
                                        Giới tính: <?php if($row['gioitinhnn'] == 1){ echo 'Nữ';}else{ echo 'Nam';} ?>
                                    </td>
                                    <td><?php if($row['thanhtoan'] == 0){
                                          echo 'Đã thanh toán';
                                        }else{ echo 'Chưa thanh toán';}
                                    ?></td>
                                    <td><?php echo $row['ngaythem']; ?> </td>
                                    <td><?php echo $row['thongdiep']; ?></td>
                                    <td><?php echo $row['ghichu']; ?></td>
                                    <td><a href="index.php?quanly=donhang&ac=xemchitiet&id=<?php echo $row['id_order']; ?>"
                                            type="button" class="btn btn-primary">Xem</a>
                                    </td>

                                    <td><input type="submit" name="sua3" value="Đã hoàn thành" class="btn btn-warning">
                                    </td>
                                    <td>
                                        <!--<a href="?mod=nguoidung&amp;act=detail&amp;id=1" type="button" class="btn btn-success">Xem</a>-->
                                        <a href="modules/quanlydonhang/xuly.php?id=<?php echo $row['id_order']; ?>"
                                            onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                            class="btn btn-danger">Xóa</a>
                                    </td>
                                </form>

                            </tr>
                            <?php
                                endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
function openDonhang(Donhang) {
    var i;
    var x = document.getElementsByClassName("donhang");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(Donhang).style.display = "block";
}
</script>


<!-- /.container-fluid -->