<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách khách hàng[ <?php echo $lk->count(); ?> Tài khoản ]</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="index.php?quanly=khachhang&ac=them" class="btn btn-success">
                <i class="icon-plus"></i> Thêm khách hàng mới
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tài khoản</th>
                            <th>Ảnh đại diện</th>
                            <th>Email</th>
                            <th>Điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Giỏ hàng</th>
                            <th>Quản lý</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $tbtk = $lk->table_Taikhoan();
                        foreach ($tbtk as $row):
                        ?>
                        <tr>
                            <td><?php echo $row['user_account']; ?></td>
                            <td><img style="width:100%; height:50px" src="../img/<?php echo $row['image_account'];?>"
                                    alt="">
                            </td>
                            <td><?php echo $row['email_account']; ?></td>
                            <td><?php echo $row['phone_account']; ?></td>
                            <td><?php echo $row['address_account']; ?></td>
                            <td><a href="index.php?quanly=taikhoan&ac=xemchitiet&id=<?php echo $row['user_account']; ?>"
                                    type="button" class="btn btn-primary">Xem</a>
                            </td>
                            <td>
                                <a href="modules/quanlytaikhoan/xuly.php?id=<?php echo $row['user_account']; ?>"
                                    onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                    class="btn btn-danger">Xóa</a>
                            </td>
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