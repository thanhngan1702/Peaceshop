<div class="container-fluid ">
    <h3>Sửa chủ đề</h3>
</div>
<?php
$row = $chude->row_Chude($_GET['id']);
?>
<div class="card shadow mb-4">

    <div class="widget-box">
        <div class="card-body">
            <div class="table-reponsive">

                <div class="widget-title">
                    <a href="index.php?quanly=chude&ac=lietke" class="btn btn-success">
                        <i class="icon-table"></i> Liệt kê Chủ đề
                    </a>
                </div>
                <hr>

                <div class="widget-content nopadding">
                    <form class="form-horizontal" action="modules/quanlychude/xuly.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
                        <h5>&nbsp;</h5>
                        <div class="form-group">
                            <label for>Tên chủ đề : </label>
                            <input type="text" name="chude" class="form-control" value="<?php echo $row['name_theme'] ?>" />
                        </div>
                        <h5>&nbsp;</h5>
                        <div class="form-group">
                            <div class="controls">
                                <input type="submit" name="sua" value="Lưu lại" class="btn btn-primary  btn-sm border-left-info">
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