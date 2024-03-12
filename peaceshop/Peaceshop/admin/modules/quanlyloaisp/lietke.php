<!-- Page Heading -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">

            <h1 class="h3 mb-2 text-gray-800">Danh sách loại sản phẩm [ <?php echo $loai->count(); ?> loại ]</h1>

            <div class="card-header py-3">
                <a href="index.php?quanly=loaisp&ac=them" class="btn btn-success">
                    <i class="icon-plus"></i> Thêm loại sản phẩm mới
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
                            <th>Tên loại sản phẩm</th>
                            <th>Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tbLoai = $loai->table_loai();
                        foreach ($tbLoai as $row) :
                        ?>
                        <tr>
                            <td><?php echo $row['id_type']; ?></td>
                            <td><?php echo $row['name_type'] ?></td>
                            <td>
                                <!--<a href="?mod=nguoidung&amp;act=detail&amp;id=1" type="button" class="btn btn-success">Xem</a>-->
                                <a href="index.php?quanly=loaisp&ac=sua&id=<?php echo $row['id_type']; ?>" type="button"
                                    class="btn btn-warning">Sửa</a>
                                <a href="modules/quanlyloaisp/xuly.php?id=<?php echo $row['id_type']; ?>"
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