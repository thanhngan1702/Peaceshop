<!-- Page Heading -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h1 class="h3 mb-2 text-gray-800">Chi tiết sản phẩm đơn hàng
                <?php echo $_GET['id']; ?> [ <?php echo $dh->count(); ?> sản phẩm] </h1>

            <div class="card-header py-3">
                <a href="index.php?quanly=donhang&ac=lietke" class="btn btn-success">
                    <i class="icon-plus"></i> Xem đơn hàng
                </a>
            </div>
            <hr>
            <?php
                if (@$_GET['tt']) {
                echo $_GET['tt'];
                }
            ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh mô tả</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng cộng</th>
                            <th>Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tbhd =  $dh->row_SanPham($_GET['id']);
                        foreach ($tbhd as $row) :
                        ?>
                        <tr>
                            <td><?php echo $row['id_product'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><img style="height:100px;" src="modules/quanlysanpham/uploads/<?php echo $row['anh'] ?>"
                                    alt=""></td>
                            <td><?php echo number_format($row['gia']) ?>.vnđ</td>
                            <td><?php echo $row['soluong'] ?></td>
                            <td><?php echo number_format($row['soluong'] *  $row['gia']) ?></td>

                            <td>
                                <a href="index.php?quanly=sanpham&ac=sua&id=<?php echo $row['id_product']; ?>"
                                    type="button" class="btn btn-warning">Xem chi tiết sản phẩm</a>
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
<!-- /.container-fluid -->