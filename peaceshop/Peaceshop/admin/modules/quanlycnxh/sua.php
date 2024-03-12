<div class="container-fluid ">
    <h3>Sửa các cẩm nang xu hướng</h3>
</div>
<div class="card shadow mb-4">

    <div class="widget-box">
        <div class="card-body">
            <div class="table-reponsive">

                <div class="widget-title">
                    <div class="widget-title">
                        <a href="index.php?quanly=cnxh&ac=lietke" class="btn btn-success">
                            <i class="icon-table"></i> Liệt kê các cẩm nang xu hướng đã đăng
                        </a>
                    </div>
                </div>
                <hr>
                <div class="widget-content nopadding">
                    <form class="form-horizontal" action="modules/quanlycnxh/xuly.php?id=<?php echo $_GET['id']; ?>"
                        method="post" enctype="multipart/form-data">
                        <h5>&nbsp;</h5>
                        <?php
                            $rowCnxh = $cnxh->row_Cnxh($_GET['id']);
                        ?>
                        <div class="form-group">
                            <label class="control-label">Tên cẩm nang xu hướng : </label>
                            <input name="tencnxh" class="form-control" type="text"
                                value="<?php echo $rowCnxh['name_trend'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="">Ảnh sản phẩm:</label>
                            <img style="margin-bottom:20px"
                                src="modules/quanlycnxh/uploads/<?php echo $rowCnxh['image_trend'] ?>" height="200px"
                                width="200px">
                            <input type="file" class="form-control" id="" placeholder="" name="image"
                                value="<?php echo $row['image']?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mã cầm nang xu hướng : </label>
                            <input name="macnxh" type="text" class="form-control"
                                value="<?php echo $rowCnxh['hagtag_trend'] ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mô tả: </label>
                            <textarea name="mota" type="text"
                                class="form-control"><?php echo $rowCnxh['mota'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nội dung : </label>
                            <textarea name="noidung" type="text"
                                class="form-control"><?php echo $rowCnxh['info_trend'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <input type="submit" name="sua" value="Lưu cẩm nang xu hướng"
                                    class="btn btn-primary  btn-sm border-left-info">
                                <a href="index.php?quanly=cnxh&ac=lietke"
                                    class="btn btn-danger  btn-sm border-left-info">Hủy
                                    bỏ</a>
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
<script type="text/javascript">
CKEDITOR.replace('noidung');
CKEDITOR.replace('mota');
</script>