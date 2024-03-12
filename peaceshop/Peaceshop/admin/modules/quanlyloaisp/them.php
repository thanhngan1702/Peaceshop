<div class="container-fluid ">
    <div class="card shadow mb-4">
        <div class="widget-box">
            <div class="card-body">
                <div class="table-reponsive">
                    <h3>Thêm loại sản phẩm</h3>

                    <div class="widget-title card-header">
                        <a href="index.php?quanly=loaisp&ac=lietke" class="btn btn-success">
                            <i class="icon-plus"></i> Liệt kê loại sản phẩm
                        </a>
                    </div>
                    <hr>

                    <div class="widget-content nopadding">
                        <form class="form-horizontal" action="modules/quanlyloaisp/xuly.php" method="post"
                            enctype="multipart/form-data">
                            <h5>&nbsp;</h5>
                            <div class="form-group">
                                <label class="control-label">Tên loại sản phẩm : </label>
                                <input name="loaisp" class="form-control" type="text" />
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="submit" name="them" value="Thêm mới"
                                        class="btn btn-primary  btn-sm border-left-info">
                                    <a href="index.php?quanly=loaisp&ac=lietke"
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