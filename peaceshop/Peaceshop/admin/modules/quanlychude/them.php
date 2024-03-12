<div class="container-fluid ">
    <h3>Thêm chủ đề</h3>
</div>
<div class="card shadow mb-4">
    <div class="widget-box">
        <div class="card-body">

            <div class="table-reponsive">

                <div class="widget-title">
                    <a href="index.php?quanly=chude&ac=lietke" class="btn btn-success">
                        <i class="icon-table"></i> Liệt kê chủ đề
                    </a>
                </div>
                <div class="widget-content nopadding">
                    <form class="form-horizontal" action="modules/quanlychude/xuly.php" method="post" enctype="multipart/form-data">
                        <h5>&nbsp;</h5>
                        <div class="form-group">
                            <label class="control-label">Tên chủ đề : </label>
                            <input name="chude" class="form-group" type="text" />
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input type="submit" name="them" value="Thêm mới" class="btn btn-primary  btn-sm border-left-info">
                                <a href="index.php?quanly=chude&ac=lietke" class="btn btn-danger  btn-sm border-left-info">Hủy bỏ</a>
                            </div>
                        </div>
                        <h5>&nbsp;</h5>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>