<div class="container-fluid ">
    <h3>Thêm sản phẩm</h3>
</div>
<div class="card shadow mb-4">

    <div class="widget-box">
        <div class="card-body">
            <div class="table-reponsive">
                <div class="widget-title">
                    <a href="index.php?quanly=sanpham&ac=lietke" class="btn btn-success">
                        <i class="icon-table"></i> Liệt kê sản phẩm
                    </a>
                </div>
                <hr>

                <div class="widget-content nopadding">
                    <form class="form-horizontal" action="modules/quanlysanpham/xuly.php" method="post"
                        enctype="multipart/form-data">
                        <h5>&nbsp;</h5>
                        <div class="form-group">
                            <label class="control-label">Tên sản phẩm: </label>
                            <input name="tensp" class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ảnh sản phẩm: </label>
                            <input type="file" name="image" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ảnh mô tả: </label>
                            <input type="file" name="images[]" class="form-control" multiple="multiple" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Số lượng: </label>
                            <input name="soluong" class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Giá đề xuất: </label>
                            <input name="giadexuat" class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Khuyến mãi: </label>
                            <div class="controls">
                                <select name="khuyenmai" class="form-control">
                                    <?php
                                    $tb_km = $sp->table_Km();
                                    foreach ( $tb_km as $r) :
                                    ?>
                                    <option value="<?php echo $r['id_khuyenmai'] ?>"><?php echo $r['ten_khuyenmai'] ?>
                                    </option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">loại sản phẩm: </label>
                            <div class="controls">
                                <select name="loaisp" class="form-control">
                                    <?php
                                    $tb_loai = $sp->table_Loai();
                                    foreach ($tb_loai as $r) :
                                    ?>
                                    <option value="<?php echo $r['id_type'] ?>"><?php echo $r['name_type'] ?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Loại hoa: </label>
                            <div class="controls">
                                <select name="loaihoa" class="form-control">
                                    <?php
                                    $tb_loaihoa = $sp->table_Lh();
                                    foreach ($tb_loaihoa as $r) :
                                    ?>
                                    <option value="<?php echo $r['id_typeflower'] ?>">
                                        <?php echo $r['name_typeflower'] ?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Chủ đề: </label>
                            <div class="controls">
                                <select name="chude" class="form-control">
                                    <?php
                                    $tb_cd = $sp->table_Cd();
                                    foreach ($tb_cd as $r) :
                                    ?>
                                    <option value="<?php echo $r['id_theme'] ?>"><?php echo $r['name_theme'] ?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nội dung: </label>
                            <textarea name="noidung" class="form-control" type="text"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mô tả: </label>
                            <textarea name="mota" class="form-control" type="text"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ý nghĩa: </label>
                            <textarea name="ynghia" class="form-control" type="text"></textarea>
                        </div>
                        <div class="form-group">
                            <label for>Nổi bật</label>
                            <select class="custom-select" name="noibat">
                                <option value="0">Không</option>
                                <option value="1">Có</option>
                            </select>
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
                                <a href="index.php?quanly=sanpham&ac=lietke"
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
CKEDITOR.replace('ynghia');
</script>