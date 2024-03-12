<!-- Page Heading -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h1 class="h3 mb-2 text-gray-800">Danh sách cẩm nang, xu hướng [ <?php echo $cnxh->count(); ?> Cẩm nang, xu
                hướng ]</h1>

            <div class="card-header py-3">
                <a href="index.php?quanly=cnxh&ac=them" class="btn btn-success">
                    <i class="icon-plus"></i> Thêm cẩm nang xu hướng mới
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
                            <td>ID</td>
                            <td>Tên cẩm nang xu hướng</td>
                            <td>Hình ảnh</td>
                            <td>Mã cẩm nang xu hướng</td>
                            <td>Mô tả</td>
                            <td>Ngày đăng</td>
                            <td style="width:100px;">Quản lý</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $tbCnxh = $cnxh->table_Cnxh();
                            foreach ($tbCnxh as $row):
                        ?>
                        <tr>
                            <td><?php echo $row['id_trend']; ?></td>
                            <td><?php echo $row['name_trend'] ?></td>
                            <td> <img style="width:100%; height:50px"
                                    src="modules/quanlycnxh/uploads/<?php echo $row['image_trend'] ?>" alt="">
                            </td>
                            <td><?php echo $row['hagtag_trend'] ?></td>
                            <td><?php echo $row['mota']?></td>
                            <td><?php echo $row['ngaythem']?></td>
                            <td>
                                <a href="index.php?quanly=cnxh&ac=sua&id=<?php echo $row['id_trend']; ?>" type="button"
                                    class="btn btn-warning">Sửa</a>
                                <a href="modules/quanlycnxh/xuly.php?id=<?php echo $row['id_trend']; ?>"
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
<!-- /.container-fluid -->