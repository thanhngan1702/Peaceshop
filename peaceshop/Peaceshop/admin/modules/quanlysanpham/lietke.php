<div class="card shadow mb-4">
    <div class="card-body">
        <h1 class="h3 mb-2 text-gray-800">Danh sách sản phẩm [ <?php echo $sp->count(); ?> Sản phẩm ]</h1>

        <div class="card-header py-3">
            <a href="index.php?quanly=sanpham&ac=them" class="btn btn-success">
                <i class="icon-plus"></i> Thêm sản phẩm mới
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
                        <th style="width:50px">ID</th>
                        <th style="width:100px">Tên sản phẩm</th>
                        <th style="width:50px">Ảnh mô tả</th>
                        <th style="width:50px">Giá</th>
                        <th style="width:80px">Khuyến mãi</th>
                        <th style="width:50px">Số lượng</th>
                        <th style="width:80px">Nhóm sản phẩm</th>
                        <th style="width:50px">Nổi bật</th>
                        <th style="width:50px">Trạng thái</th>
                        <th style="width:130px">Quản lý</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                        $tbSP = $sp->table_SanPham();
                        foreach ($tbSP as $row):

                        ?>
                    <tr>
                        <td><?php echo $row['id_product']; ?></td>
                        <td><?php echo $row['name_product'] ?></td>
                        <td> <img style="height:50px" src="modules/quanlysanpham/uploads/<?php echo $row['image'] ?>"
                                alt=""> </td>

                        <td><?php echo $row['price_product'] ?></td>
                        <td><?php echo $sp->row_khuyenmai($row['id_khuyenmai'])['ten_khuyenmai']; ?></td>
                        <td>
                            <?php if($row['sl_product'] == 0)
                                    {
                                        echo '<div class=" font-weight-bold text-danger text-uppercase mb-1  text-xs">Hết hàng</div>';
                                    }else{
                                        echo $row['sl_product'];
                                    } 
                                   ?>
                        </td>
                        <td><?php echo $sp->row_loai($row['id_type'])['name_type']; ?></td>
                        <td>
                            <?php if($row['noibat'] == 1 )
                                      {
                                        echo 'Có';
                                    } else {
                                        echo 'Không';
                                    }
                                    ?>
                        </td>
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
                            <a href="?mod=nguoidung&amp;act=detail&amp;id=1" type="button"
                                class="btn btn-success  text-xs">Xem</a>
                            <a href="index.php?quanly=sanpham&ac=sua&id=<?php echo $row['id_product']; ?>" type="button"
                                class="btn btn-warning  text-xs">Sửa</a>
                            <a href="modules/quanlysanpham/xuly.php?id=<?php echo $row['id_product']; ?>"
                                onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button"
                                class="btn btn-danger text-xs">Xóa</a>
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