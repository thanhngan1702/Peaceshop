<!-- Page Heading -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h1 class="h3 mb-2 text-gray-800">Danh sách banner <?php echo $banner->count(); ?> [ banner ]</h1>

            <div class="card-header py-3">
                <a href="index.php?quanly=banner&ac=them" class="btn btn-success">
                    <i class="icon-plus"></i> Thêm banner mới
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
                            <th>Hình ảnh</th>
                            <th>Thuộc trang</th>
                            <th>Nội dung</th>
                            <th>Trạng thái</th>
                            <th>Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tbBanner = $banner->table_banner();
                        foreach ($tbBanner as $row) :
                        ?>
                        <tr>
                            <td><?php echo $row['id_banner']; ?></td>
                            <td>
                                <img style="height:100px"
                                    src="modules/quanlybanner/uploads/<?php echo $row['image_banner']?>" alt="">
                            </td>
                            <td><?php echo $row['trang'] ?></td>
                            <td><?php echo $row['noidung'] ?></td>
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
                                <a href="index.php?quanly=banner&ac=sua&id=<?php echo $row['id_banner']; ?>"
                                    type="button" class="btn btn-warning">Sửa</a>
                                <a href="modules/quanlybanner/xuly.php?id=<?php echo $row['id_banner']; ?>"
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