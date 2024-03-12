<div class="container-fluid ">
    <h3>Thêm banner</h3>
</div>
<div class="card shadow mb-4">
    <div class="widget-box">
        <div class="card-body">

            <div class="table-reponsive">

                <div class="widget-title">
                    <a href="index.php?quanly=banner&ac=lietke" class="btn btn-success">
                        <i class="icon-table"></i> Liệt kê chủ đề
                    </a>
                </div>
                <div class="widget-content nopadding">
                    <form class="form-horizontal" action="modules/quanlybanner/xuly.php" method="post"
                        enctype="multipart/form-data">
                        <h5>&nbsp;</h5>
                        <div class="form-group">
                            <label class="control-label">Hình ảnh: </label>
                            <input type="file" name="image" class="form-group" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Trang: </label>
                            <div class="controls">
                                <select name="trang" class="form-control">
                                    <option value="trangchu">Trang Chủ</option>
                                    <option value="shop">Shop</option>
                                    <option value="peaceshop">About</option>
                                    <option value="lienhe">Liên hệ</option>
                                    <option value="tintuc">Tin tức</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nội dung: </label>
                            <textarea name="noidung" class="form-control" type="text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for>Trạng thái</label>
                            <select class="custom-select" name="trangthai">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input type="submit" name="them" value="Thêm mới"
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