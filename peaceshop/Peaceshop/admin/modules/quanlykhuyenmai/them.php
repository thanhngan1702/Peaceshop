<div class="container-fluid ">
    <h3>Thêm khuyến mãi</h3>
</div>
<div class="card shadow mb-4">

    <div class="widget-box">
        <div class="card-body">
            <div class="table-reponsive">
                <div class="widget-title">
                    <a href="index.php?quanly=khuyenmai&ac=lietke" class="btn btn-success">
                        <i class="icon-table"></i> Liệt kê khuyến mãi
                    </a>
                </div>
                <hr>

                <div class="widget-content nopadding">
                    <form class="form-horizontal" action="modules/quanlykhuyenmai/xuly.php" method="post"
                        enctype="multipart/form-data">
                        <h5>&nbsp;</h5>
                        <div class="form-group">
                            <label class="control-label">Tên khuyến mãi : </label>
                            <input name="ten_khuyenmai" class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mã khuyến mãi : </label>
                            <input name="ma_khuyenmai" class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Loại khuyến mãi : </label>
                            <input name="loai_khuyenmai" class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Giá trị khuyến mãi : </label>
                            <input name="giatri_khuyenmai" class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label for>Trạng thái:</label>
                            <select class="custom-select" name="trangthai">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiện</option>
                            </select>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input type="submit" name="them" value="Thêm mới"
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