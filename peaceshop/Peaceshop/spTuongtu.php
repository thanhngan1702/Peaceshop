<?php
$sp_Tuongtu = new spTuongtu();
$row = $sp_Tuongtu-> row_SanPham($_GET['id']);
$id_type = $row['id_type'];
$tbTt = $sp_Tuongtu -> table_Tuongtu($id_type);
$dem = count($tbTt);
?>
<section class="related-product">
    <div class="container" style="border: 1px solid #efefef;padding: 30px;margin-bottom: 10px;">
        <div class="section-title-1 clearfix">
            <a href="https://flowerstore.vn/collection/Lan+H%E1%BB%93+%C4%90i%E1%BB%87p">
                <h3 class="heading-5 strong-700 mb-0 float-left text-dark">
                    <span class="mr-4">Sản phẩm tương tự</span>
                </h3>
            </a>
            <a href="https://flowerstore.vn/collection/Lan+H%E1%BB%93+%C4%90i%E1%BB%87p" class="float-right">
                Xem thêm</a>
        </div>
        <div class="row">
            <?php
            foreach ($tbTt as $row_Tt):
                if($row_Tt['id_product'] != $row['id_product']):
            ?>
            <div class="col-xl-2 my-2 col-lg-3 col-md-4 col-6">
                <div class="featured__item">
                    <?php if($sp_Tuongtu->row_khuyenmai($row_Tt['id_khuyenmai'])['giatri_khuyenmai']>0){
                    echo ' <div class="saleoff">
                              <div class="dlhf-badge dlhf-badge--fixed-width dlhf-badge--promotion">
                                <div class="dlhf-badge--promotion__label-wrapper dlhf-badge--promotion__label-wrapper--vi">
                                  <span class="percent">';echo '-'.$sp_Tuongtu->row_khuyenmai($row_Tt['id_khuyenmai'])['giatri_khuyenmai'].'%';echo '</span>
                                </div>
                              </div>
                            </div>';
                         } else {
                    echo '<div></div>';
                    }
                    ?>
                    <div class="featured__item__pic set-bg"
                        data-setbg="admin/modules/quanlysanpham/uploads/<?php echo $row_Tt['image'] ?>">
                        <ul class="featured__item__pic__hover">
                            <li>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="chitietsp.php?id=<?=$row_Tt['id_product']?>"><i class="fa fa-eye"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#"><?php echo $row_Tt['name_product']?></a></h6>
                        <div class="price" style="height:30px">
                            <?php if($sp_Tuongtu->row_khuyenmai($row_Tt['id_khuyenmai'])['giatri_khuyenmai']>0){
                           echo number_format(($row_Tt['price_product']) - ($row_Tt['price_product'] * $sp_Tuongtu->row_khuyenmai($row_Tt['id_khuyenmai'])['giatri_khuyenmai']) / 100) . '' . 'vnđ';
                           echo '<del style="color:#888;font-size: 13px; margin-left:5px">'; echo number_format($row_Tt['price_product']) . '' . 'vnđ';
                           echo '</del><br>';
                        } else{
                            echo ' <h5>';
                            echo number_format($row_Tt['price_product']) . '' . 'vnđ';
                            echo '</h5>';
                        }
                        ?>
                        </div>
                        <a href="chitietsp.php?id=<?=$row_Tt['id_product']?>" class="btn red">
                            <span>Đặt ngay</span>
                            <span class="_icon">
                                <i class="fa fa-plus"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <?php
                endif;
              endforeach;
            ?>
        </div>
    </div>
</section>