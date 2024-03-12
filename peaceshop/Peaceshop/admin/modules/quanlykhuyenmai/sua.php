<div class="container-fluid ">
    <h3>Sửa loại hoa</h3>
</div>
<?php
$row = $khuyenmai->row_Khuyenmai($_GET['id']);
?>
<div class="card shadow mb-4">
    <div class="widget-box">

        <div class="card-body">
            <div class="table-reponsive">
                <div class="widget-box">
                    <div class="widget-title">
                        <a href="index.php?quanly=khuyenmai&ac=lietke" class="btn btn-success">
                            <i class="icon-plus"></i> Liệt kê khuyến mãi
                        </a>
                    </div>
                    <hr>

                    <div class="widget-content nopadding">
                        <form class="form-horizontal"
                            action="modules/quanlykhuyenmai/xuly.php?id=<?php echo $_GET['id']; ?>" method="post"
                            enctype="multipart/form-data">
                            <h5>&nbsp;</h5>
                            <div class="form-group">
                                <label for>Tên khuyến mãi: </label>
                                <input type="text" class="form-control" name="ten_khuyenmai"
                                    value="<?php echo $row['ten_khuyenmai'] ?>" />
                            </div>
                            <div class="form-group">
                                <label for>Mã khuyến mãi: </label>
                                <input type="text" class="form-control" name="ma_khuyenmai"
                                    value="<?php echo $row['ma_khuyenmai'] ?>" />
                            </div>
                            <div class="form-group">
                                <label for>Loại khuyến mãi: </label>
                                <input type="text" class="form-control" name="loai_khuyenmai"
                                    value="<?php echo $row['loai_khuyenmai'] ?>" />
                            </div>
                            <div class="form-group">
                                <label for>Giá trị khuyến mãi: </label>
                                <input type="text" class="form-control" name="giatri_khuyenmai"
                                    value="<?php echo $row['giatri_khuyenmai'].'%' ?>" />
                            </div>

                            <div class="form-group">
                                <label class="control-label">Trạng thái: </label>
                                <div class="controls">
                                    <select name="trangthai" class="form-control">
                                        <option value="1" <?php if ($row['trangthai'] == 1) echo "selected"; ?>>Hiện
                                        </option>
                                        <option value="0" <?php if ($row['trangthai'] == 0) echo "selected"; ?>>Ẩn
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <h5>&nbsp;</h5>
                            <div class="form-group">
                                <div class="controls">
                                    <input type="submit" name="sua" value="Lưu lại"
                                        class="btn btn-primary  btn-sm border-left-info">
                                    <a href="index.php?quanly=khuyenmai&ac=lietke"
                                        class="btn btn-danger  btn-sm border-left-info">Hủy bỏ</a>
                                </div>
                            </div>
                            <h5>&nbsp;</h5>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>