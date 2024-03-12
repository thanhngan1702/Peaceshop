<div class="container-fluid ">
    <h3>Thêm cẩm nang xu hướng mới</h3>
</div>
<div class="card shadow mb-4">
    <div class="widget-box">
        <div class="card-body">
            <div class="table-reponsive">
                <div class="widget-title">
                    <a href="index.php?quanly=cnxh&ac=lietke" class="btn btn-success">
                        <i class="icon-table"></i> Liệt kê các cẩm nang xu hướng đã đăng
                    </a>
                </div>
                <hr>
                <div class="widget-content nopadding">
                    <form class="form-horizontal" action="modules/quanlycnxh/xuly.php" method="post"
                        enctype="multipart/form-data">
                        <h5>&nbsp;</h5>
                        <div class="form-group">
                            <label class="control-label">Tên cẩm nang xu hướng : </label>
                            <input name="tencnxh" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ảnh sản phẩm: </label>
                            <input type="file" name="image" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mã cẩm nang xu hướng : </label>
                            <input name="macnxh" type="text" class="form-control"></input>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mô tả : </label>
                            <textarea name="mota" class="form-control" type="text"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nội dung : </label>
                            <textarea name="noidung" class="form-control" type="text"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                                <input type="submit" name="them" value="Thêm mới"
                                    class="btn btn-primary  btn-sm border-left-info">
                                <a href="index.php?quanly=cnxh&ac=lietke"
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
CKEDITOR.replace('mota');
</script>