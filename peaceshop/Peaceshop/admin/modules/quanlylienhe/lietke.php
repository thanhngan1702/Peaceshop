<!-- Page Heading -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <h1 class="h3 mb-2 text-gray-800">Danh sách liên hệ [ <?php echo $lienhe->count(); ?> ]</h1>
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
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Nội dung</th>
                                <th>Ngay gửi</th>
                                <th>Trạng thái</th>
                                <th style="width:200px">Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $tblh =  $lienhe->table_lienhe();
                        foreach ($tblh as $row) :
                        ?>
                            <tr>
                                <td><?php echo $row['id_lienhe'] ?></td>
                                <td><?php echo $row['name_lienhe'] ?></td>
                                <td><?php echo $row['gmail_lienhe'] ?></td>
                                <td><?php echo $row['noidung'] ?></td>
                                <td><?php echo $row['ngaygui'] ?></td>
                                <td>
                                    <?php if($row['trangthai'] == 1 )
                                      {
                                        echo 'Đã trả lời';
                                    } else {
                                        echo 'Chưa trả lời';
                                    }
                                    ?>
                                </td>

                                <td>
                                    <a href="index.php?quanly=lienhe&ac=xem&id=<?php echo $row['id_lienhe']; ?>"
                                        type="button" class="btn btn-info">Xem</a>
                                    <a href="modules/quanlylienhe/xuly.php?id=<?php echo $row['id_lienhe']; ?>"
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