<div class="container-fluid ">
    <h3>Sửa sản phẩm</h3>
</div>
<?php
    $row = $sp->row_SanPham($_GET['id']);
    
?>
<div class="card shadow mb-4">
    <div class="widget-box">

        <div class="card-body">
            <div class="table-reponsive">
                <div class="widget-box">
                    <div class="widget-title">
                        <a href="index.php?quanly=sanpham&ac=lietke" class="btn btn-success">
                            <i class="icon-plus"></i> Liệt kê sản phẩm
                        </a>
                    </div>
                    <hr>

                    <div class="widget-content nopadding">
                        <form class="form-horizontal"
                            action="modules/quanlysanpham/xuly.php?id=<?php echo $_GET['id']; ?>" method="post"
                            enctype="multipart/form-data">
                            <h5>&nbsp;</h5>
                            <div class="form-group">
                                <label for>Tên sản phẩm : </label>
                                <input type="text" class="form-control" name="tensp"
                                    value="<?php echo $row['name_product'] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="">Ảnh sản phẩm:</label>
                                <img style="margin-bottom:20px"
                                    src="modules/quanlysanpham/uploads/<?php echo $row['image'] ?>" height="200px"
                                    width="200px">
                                <input type="file" class="form-control" id="" placeholder="" name="image"
                                    value="<?php echo $row['image']?>" />

                            </div>
                            <div class="form-group" style="display: flex;flex-wrap: wrap;">
                                <label for="">Ảnh mô tả:</label>
                                <?php
                                $tb_img = $sp->rows_img();
                                foreach ($tb_img as $r):
                                    if($row['id_product']==$r['id_product']):
                                ?>
                                <div class="col-md-2">
                                    <a href="" class="thumbnail">
                                        <img style="width:100%; margin-bottom:20px"
                                            src="modules/quanlysanpham/uploads/<?php echo $r['name_image']?>">
                                    </a>
                                </div>
                                <?php
                                endif;
                                endforeach;
                                ?>
                                <input type="file" class="form-control" id="" multiple="multiple" placeholder=""
                                    name="images[]" />
                            </div>

                            <div class="form-group">
                                <label for>Số lượng: </label>
                                <input type="text" class="form-control" name="soluong"
                                    value="<?php echo $row['sl_product'] ?>" />
                            </div>
                            <div class="form-group">
                                <label for>Giá đề xuất: </label>
                                <input type="text" name="giadexuat" class="form-control"
                                    value="<?php echo $row['price_product'] ?>" />
                            </div>
                            <div class="form-group">
                                <label for>Khuyến mãi: </label>
                                <div class="controls">
                                    <select name="khuyenmai" class="form-control">
                                        <?php
                                        $tb_km = $sp->rows_Km();
                                        foreach ($tb_km as $r) :
                                            if ($row['id_khuyenmai'] == $r['id_khuyenmai']) :
                                        ?>
                                        <option selected="selected" value="<?php echo $r['id_khuyenmai']; ?>">
                                            <?php echo $r['ten_khuyenmai']; ?>
                                        </option>
                                        <?php
                                            else :
                                            ?>
                                        <option value="<?php echo $r['id_khuyenmai']; ?>">
                                            <?php echo $r['ten_khuyenmai']; ?>
                                        </option>
                                        <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Loại sản phẩm : </label>
                                <div class="controls">
                                    <select name="loaisp" class="form-control">
                                        <?php
                                        $tb_loai = $sp->rows_Loai();
                                        foreach ($tb_loai as $r) :
                                            if ($row['id_type'] == $r['id_type']) :
                                        ?>
                                        <option selected="selected" value="<?php echo $r['id_type']; ?>">
                                            <?php echo $r['name_type']; ?></option>
                                        <?php
                                            else :
                                            ?>
                                        <option value="<?php echo $r['id_type']; ?>"><?php echo $r['name_type']; ?>
                                        </option>
                                        <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Loại hoa : </label>
                                <div class="controls">
                                    <select name="loaihoa" class="form-control">
                                        <?php
                                        $tb_loaihoa = $sp->rows_Lh();
                                        foreach ($tb_loaihoa as $r) :
                                            if ($row['id_typeflower'] == $r['id_typeflower']) :
                                        ?>
                                        <option selected="selected" value="<?php echo $r['id_typeflower']; ?>">
                                            <?php echo $r['name_typeflower']; ?></option>
                                        <?php
                                            else :
                                            ?>
                                        <option value="<?php echo $r['id_typeflower']; ?>">
                                            <?php echo $r['name_typeflower']; ?></option>
                                        <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Chủ đề : </label>
                                <div class="controls">
                                    <select name="chude" class="form-control">
                                        <?php
                                        $tb_cd = $sp->rows_Cd();
                                        foreach ($tb_cd as $r) :
                                            if ($row['id_theme'] == $r['name_theme']) :
                                        ?>
                                        <option selected="selected" value="<?php echo $r['id_theme']; ?>">
                                            <?php echo $r['name_theme']; ?></option>
                                        <?php
                                            else :
                                            ?>
                                        <option value="<?php echo $r['id_theme']; ?>">
                                            <?php echo $r['name_theme']; ?>
                                        </option>
                                        <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for>Nội dung: </label>
                                <textarea name="noidung"
                                    class="form-control"><?php echo $row['info_product'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for>Mô tả</label>
                                <textarea class="form-control" type="text"
                                    name="mota"><?php echo $row['mota'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for>Ý nghĩa</label>
                                <textarea class="form-control" type="text"
                                    name="ynghia"><?php echo $row['ynghia'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nổi bật: </label>
                                <div class="controls">
                                    <select name="noibat" class="form-control">
                                        <option value="1" <?php if ($row['noibat'] == 1) echo "selected"; ?>>Có
                                        </option>
                                        <option value="0" <?php if ($row['noibat'] == 0) echo "selected"; ?>>Không
                                        </option>

                                    </select>
                                </div>
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
</div>
<script type="text/javascript">
CKEDITOR.replace('noidung');
CKEDITOR.replace('mota');
CKEDITOR.replace('ynghia');
</script>