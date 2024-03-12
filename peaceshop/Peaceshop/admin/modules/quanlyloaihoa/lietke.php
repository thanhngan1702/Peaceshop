<!-- Page Heading -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">

            <h1 class="h3 mb-2 text-gray-800">Danh sách loại hoa [ <?php echo $loaihoa->count(); ?> Loại ]</h1>

            <div class="card-header py-3">
                <a href="index.php?quanly=loaihoa&ac=them" class="btn btn-success">
                    <i class="icon-plus"></i> Thêm loại hoa mới
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
                            <th>Tên loại hoa</th>
                            <th>Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tbLoaihoa = $loaihoa->table_loaihoa();
                        foreach ($tbLoaihoa as $row) :
                        ?>
                        <tr>
                            <td><?php echo $row['id_typeflower']; ?></td>
                            <td><?php echo $row['name_typeflower'] ?></td>
                            <td>
                                <!--<a href="?mod=nguoidung&amp;act=detail&amp;id=1" type="button" class="btn btn-success">Xem</a>-->
                                <a href="index.php?quanly=loaihoa&ac=sua&id=<?php echo $row['id_typeflower']; ?>"
                                    type="button" class="btn btn-warning">Sửa</a>
                                <a href="modules/quanlyloaihoa/xuly.php?id=<?php echo $row['id_typeflower']; ?>"
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