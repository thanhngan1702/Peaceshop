<div class="row" style="padding:20px;">
    <div class="col-md-12 col-sm-6 col-xs-12" style=" margin-bottom:20px">
        <ul class="pagination product__pagination " style="float:right;">
            <?php
                $per = 12;
                $SP_BD = $shop->perpage($per, $_GET['theme'],$_GET['type'], $_GET['typeflower'],$_GET['price'], $_GET['sx'], $_GET['page'], $_GET['key']);
            ?>
        </ul>
    </div>
    <?php
        if (@$shop->danhsachsanphamphantrang($SP_BD, $per)):
            foreach ($shop->danhsachsanphamphantrang($SP_BD, $per) as $rowSP):
    ?>
    <div class="col-lg-3 col-md-2 col-sm-6">
        <div class="featured__item">
            <?php if($shop->row_khuyenmai($rowSP['id_khuyenmai'])['giatri_khuyenmai']>0){
                    echo ' <div class="saleoff">
                              <div class="dlhf-badge dlhf-badge--fixed-width dlhf-badge--promotion">
                                <div class="dlhf-badge--promotion__label-wrapper dlhf-badge--promotion__label-wrapper--vi">
                                  <span class="percent">';echo '-'.$shop->row_khuyenmai($rowSP['id_khuyenmai'])['giatri_khuyenmai'].'%';echo '</span>
                                </div>
                              </div>
                            </div>';
                         } else {
                    echo '<div></div>';
                    }
            ?>
            <div class="featured__item__pic set-bg"
                data-setbg="admin/modules/quanlysanpham/uploads/<?php echo $rowSP['image']?>">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="chitietsp.php?id=<?=$rowSP['id_product']?>"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h6><a href="#"><?php echo $rowSP['name_product']?></a></h6>
                <div class="price" style="height:30px">
                    <?php if($shop->row_khuyenmai($rowSP['id_khuyenmai'])['giatri_khuyenmai']>0){
                            echo number_format(($rowSP['price_product']) - ($rowSP['price_product'] * $shop->row_khuyenmai($rowSP['id_khuyenmai'])['giatri_khuyenmai']) / 100) . '' . 'vnđ';
                           echo '<del style="color:#888;font-size: 13px; margin-left:5px; font-weight:500">'; echo number_format($rowSP['price_product']) . '' . 'vnđ';
                           echo '</del><br>';
                        } else{
                            echo ' <h5>';
                            echo number_format($rowSP['price_product']) . '' . 'vnđ';
                            echo '</h5>';
                        }
                        ?>
                </div>
                <a onclick="themvaogiohangindex(<?php echo $rowSP['id_product']?>)" class="btn red">
                    <span>Đặt ngay</span>
                    <span class="_icon">
                        <i class="fa fa-plus"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <?php
        endforeach;
    ?>
    <?php
        else:
        echo '<center>Không tìm thấy sản phẩm. Vui lòng thử lại sau! </center>';
    ?>
    <?php
        endif;
    ?>
</div>
<div class=" col-md-4 col-sm-6 col-xs-12">
    <ul class="pagination product__pagination ">
        <?php
                $per = 12;
                $SP_BD = $shop->perpage($per, $_GET['theme'],$_GET['type'], $_GET['typeflower'],$_GET['price'], $_GET['sx'], $_GET['page'], $_GET['key']);
                ?>
    </ul>
</div>
</div>