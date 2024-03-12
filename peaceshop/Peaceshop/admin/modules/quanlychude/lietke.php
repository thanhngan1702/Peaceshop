<!-- Page Heading -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h1 class="h3 mb-2 text-gray-800">Danh sách chủ đề [ <?php echo $chude->count(); ?> chủ đề ]</h1>

            <div class="card-header py-3">
                <a href="index.php?quanly=chude&ac=them" class="btn btn-success">
                    <i class="icon-plus"></i> Thêm chủ đề mới
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
                            <th>Tên chủ đề</th>
                            <th>Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tbChude = $chude->table_chude();
                        foreach ($tbChude as $row) :
                        ?>
                        <tr>
                            <td><?php echo $row['id_theme']; ?></td>
                            <td><?php echo $row['name_theme'] ?></td>
                            <td>
                                <a href="index.php?quanly=chude&ac=sua&id=<?php echo $row['id_theme']; ?>" type="button"
                                    class="btn btn-warning">Sửa</a>
                                <a href="modules/quanlychude/xuly.php?id=<?php echo $row['id_theme']; ?>"
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