<!-- Page Heading -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h1 class="h3 mb-2 text-gray-800">Danh sách khuyến mãi [ <?php echo $khuyenmai->count(); ?> ]</h1>

            <div class="card-header py-3">
                <a href="index.php?quanly=khuyenmai&ac=them" class="btn btn-success">
                    <i class="icon-plus"></i> Thêm khuyến mãi mới
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
                    <form action="lietke.php" method="POST">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên khuyến mãi</th>
                                <th>Mã khuyến mãi</th>
                                <th>Loại khuyến mãi</th>
                                <th>Giá trị khuyến mãi</th>
                                <th>Ngày bắt đầu</th>
                                <th>Trạng thái</th>
                                <th style="width:200px">Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $tbkm =  $khuyenmai->table_khuyenmai();
                        foreach ($tbkm as $row) :
                        ?>
                            <tr>
                                <td><?php echo $row['id_khuyenmai'] ?></td>
                                <td><?php echo $row['ten_khuyenmai'] ?></td>
                                <td name="ma_khuyenmai"><?php echo $row['ma_khuyenmai'] ?></td>
                                <td><?php echo $row['loai_khuyenmai'] ?></td>
                                <td><?php echo $row['giatri_khuyenmai'] .'%' ?></td>
                                <td><?php echo $row['ngaybatdau'] ?></td>
                                <td>
                                    <?php if($row['trangthai'] == 1 )
                                      {
                                        echo 'Hiện';
                                    } else {
                                        echo 'Ẩn';
                                    }
                                    ?>
                                </td>

                                <td>
                                    <a href="index.php?quanly=khuyenmai&ac=xem&id=<?php echo $row['id_khuyenmai']; ?>"
                                        type="button" class="btn btn-info">Xem</a>
                                    <a href="index.php?quanly=khuyenmai&ac=sua&id=<?php echo $row['id_khuyenmai']; ?>"
                                        type="button" class="btn btn-warning">Sửa</a>
                                    <a href="modules/quanlykhuyenmai/xuly.php?id=<?php echo $row['id_khuyenmai']; ?>"
                                        onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                        class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                            <?php
                        endforeach;
                        ?>
                        </tbody>
                    </form>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->