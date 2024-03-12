<div class="container-fluid ">
    <h3>Sửa banner</h3>
</div>
<?php
$row = $banner->row_Banner($_GET['id']);
?>
<div class="card shadow mb-4">

    <div class="widget-box">
        <div class="card-body">
            <div class="table-reponsive">

                <div class="widget-title">
                    <a href="index.php?quanly=banner&ac=lietke" class="btn btn-success">
                        <i class="icon-table"></i> Liệt kê banner
                    </a>
                </div>
                <hr>

                <div class="widget-content nopadding">
                    <form class="form-horizontal" action="modules/quanlybanner/xuly.php?id=<?php echo $_GET['id']; ?>"
                        method="post" enctype="multipart/form-data">
                        <h5>&nbsp;</h5>
                        <div class="form-group">
                            <label for="">Ảnh:</label>
                            <img style="margin-bottom:20px"
                                src="modules/quanlybanner/uploads/<?php echo $row['image_banner'] ?>" height="200px">
                            <input type="file" class="form-control" id="" placeholder="" name="image"
                                value="<?php echo $row['image_banner']?>" />
                        </div>
                        <div class="form-group">
                            <label>Trang : </label>
                            <div class="controls">
                                <select name="trang" class="form-control">
                                    <option selected="selected" value="<?php echo $row['trang'];?>">
                                        <?php echo $row['trang']; ?>
                                    <option value="trangchu">Trang Chủ</option>
                                    <option value="shop">Shop</option>
                                    <option value="peaceshop">About</option>
                                    <option value="lienhe">Liên hệ</option>
                                    <option value="tintuc">Tin tức</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for>Nội dung: </label>
                            <textarea name="noidung" class="form-control"><?php echo $row['noidung'] ?></textarea>
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
                                <a href="index.php?quanly=banner&ac=lietke"
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
<script type="text/javascript">
CKEDITOR.replace('noidung');
</script>