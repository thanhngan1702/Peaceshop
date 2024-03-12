<div class="container-fluid ">
    <h3>Thêm loại hoa</h3>
</div>
<div class="card shadow mb-4">

    <div class="widget-box">
        <div class="card-body">
            <div class="table-reponsive">
                <div class="widget-title">
                    <a href="index.php?quanly=loaihoa&ac=lietke" class="btn btn-success">
                        <i class="icon-table"></i> Liệt kê loại hoa
                    </a>
                </div>
                <hr>

                <div class="widget-content nopadding">
                    <form class="form-horizontal" action="modules/quanlyloaihoa/xuly.php" method="post" enctype="multipart/form-data">
                        <h5>&nbsp;</h5>
                        <div class="form-group">
                            <label class="control-label">Tên loại hoa : </label>
                            <input name="loaihoa" class="form-control" type="text" /> 
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input type="submit" name="them" value="Thêm mới" class="btn btn-primary  btn-sm border-left-info">
                                <a href="index.php?quanly=loaihoa&ac=lietke" class="btn btn-danger  btn-sm border-left-info">Hủy bỏ</a>
                            </div>
                        </div>
                        <h5>&nbsp;</h5>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>