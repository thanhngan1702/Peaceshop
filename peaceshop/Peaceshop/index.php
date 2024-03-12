<?php
include 'header.php';
?>
<?php
include 'bannerindex.php';
?>
<!-- Hero Section End -->
<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel" style="background-color: #f7f6f2;">
                <div class="col-lg-2">
                    <div class="categories__item set-bg" data-setbg="img/banner/product-cat-icon-1.png">
                        <h5><a href="#">Tình yêu</a></h5>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="categories__item set-bg" data-setbg="img/banner/product-cat-icon-2.png">
                        <h5><a href="#">Sinh nhật</a></h5>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="categories__item set-bg" data-setbg="img/banner/product-cat-icon-3.png">
                        <h5><a href="#">Chúc mừng</a></h5>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="categories__item set-bg" data-setbg="img/banner/product-cat-icon-4.png">
                        <h5><a href="#">Chia buồn</a></h5>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="categories__item set-bg" data-setbg="img/banner/product-cat-icon-5.png">
                        <h5><a href="#">Cảm ơn</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->
<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container product-wrapp">
        <div class="section-title-1 clearfix">
            <a href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key=">
                <h3 class="heading-5 strong-700 mb-0 float-left text-dark">
                    <span class="mr-4">Top ưu đãi 12.12</span>
                </h3>
            </a>
            <a href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key=" class="float-right">
                Xem thêm</a>
        </div>
        <div class="row featured__filter">
            <?php
              $tbSp = $sp-> spKhuyenmai();
              foreach ($tbSp as $row):
            ?>
            <div class="col-xl-2 my-2 col-lg-3 col-md-4 col-6">
                <div class="featured__item">
                    <?php if($sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai']>0){
                    echo ' <div class="saleoff">
                              <div class="dlhf-badge dlhf-badge--fixed-width dlhf-badge--promotion">
                                <div class="dlhf-badge--promotion__label-wrapper dlhf-badge--promotion__label-wrapper--vi">
                                  <span class="percent">';echo '-'.$sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai'].'%';echo '</span>
                                </div>
                              </div>
                            </div>';
                         } else {
                    echo '<div></div>';
                    }
                    ?>
                    <div class="featured__item__pic set-bg anhsp"
                        data-setbg="admin/modules/quanlysanpham/uploads/<?php echo $row['image'] ?>">
                        <ul class="featured__item__pic__hover">
                            <li>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="chitietsp.php?id=<?=$row['id_product']?>"><i class="fa fa-eye"></i></a>
                            </li>
                            <li>
                                <a href="#" onclick="themvaogiohangindex(<?php echo $row['id_product']?>)"><i
                                        class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#"><?php echo $row['name_product']?></a></h6>
                        <div class="price" style="height:30px">
                            <?php if($sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai']>0){
                            echo '<span>';
                            echo number_format(($row['price_product']) - ($row['price_product'] * $sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai']) / 100) . '</span>' . 'vnđ';
     
                           echo '<del style="color:#888;font-size: 13px; margin-left:5px; font-weight:500">'; echo number_format($row['price_product']) . '' . 'vnđ';
                           echo '</del><br>';
                        } else{
                            echo ' <h5>';
                            echo number_format($row['price_product']) . '' . 'vnđ';
                            echo '</h5>';
                        }
                        ?>
                        </div>
                        <a onclick="themvaogiohangindex(<?php echo $row['id_product']?>)" class="btn red">
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
            <a class="btn-readmore" href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key="
                style="margin-top:20px; margin-bottom:20px">Xem thêm</a>
        </div>
    </div>
</section>
<section class="featured spad">
    <div class="container product-wrapp">
        <div class="section-title-1 clearfix">
            <a href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key=">
                <h3 class="heading-5 strong-700 mb-0 float-left text-dark">
                    <span class="mr-4">Sản phẩm mới</span>
                </h3>
            </a>
            <a href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key=" class="float-right">
                Xem thêm</a>
        </div>
        <div class="row featured__filter">
            <?php
              $tbSp = $sp-> spMoi();
              foreach ($tbSp as $row):
            ?>
            <div class="col-xl-2 my-2 col-lg-3 col-md-4 col-6">
                <div class="featured__item">
                    <?php if($sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai']>0){
                    echo ' <div class="saleoff">
                              <div class="dlhf-badge dlhf-badge--fixed-width dlhf-badge--promotion">
                                <div class="dlhf-badge--promotion__label-wrapper dlhf-badge--promotion__label-wrapper--vi">
                                  <span class="percent">';echo '-'.$sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai'].'%';echo '</span>
                                </div>
                              </div>
                            </div>';
                         } else {
                    echo '<div></div>';
                    }
                    ?>
                    <div class="featured__item__pic set-bg anhsp"
                        data-setbg="admin/modules/quanlysanpham/uploads/<?php echo $row['image'] ?>">
                        <ul class="featured__item__pic__hover">
                            <li>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="chitietsp.php?id=<?=$row['id_product']?>"><i class="fa fa-eye"></i></a>
                            </li>
                            <li>
                                <a href="#" onclick="themvaogiohangindex(<?php echo $row['id_product']?>)"><i
                                        class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#"><?php echo $row['name_product']?></a></h6>
                        <div class="price" style="height:30px">
                            <?php if($sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai']>0){
                            echo '<span>';
                            echo number_format(($row['price_product']) - ($row['price_product'] * $sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai']) / 100) . '</span>' . 'vnđ';
     
                           echo '<del style="color:#888;font-size: 13px; margin-left:5px; font-weight:500">'; echo number_format($row['price_product']) . '' . 'vnđ';
                           echo '</del><br>';
                        } else{
                            echo ' <h5>';
                            echo number_format($row['price_product']) . '' . 'vnđ';
                            echo '</h5>';
                        }
                        ?>
                        </div>
                        <a onclick="themvaogiohangindex(<?php echo $row['id_product']?>)" class="btn red">
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
            <a class="btn-readmore" href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key="
                style="margin-top:20px; margin-bottom:20px">Xem thêm</a>
        </div>
    </div>
</section>
<section class="featured spad">
    <div class="container product-wrapp">
        <div class="section-title-1 clearfix">
            <a href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key=">
                <h3 class="heading-5 strong-700 mb-0 float-left text-dark">
                    <span class="mr-4">Sản phẩm nổi bật</span>
                </h3>
            </a>
            <a href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key=" class="float-right">
                Xem thêm</a>
        </div>
        <div class="row featured__filter">
            <?php
              $tbSp = $sp-> spNoibat();
              foreach ($tbSp as $row):
            ?>
            <div class="col-xl-2 my-2 col-lg-3 col-md-4 col-6">
                <div class="featured__item">
                    <?php if($sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai']>0){
                    echo ' <div class="saleoff">
                              <div class="dlhf-badge dlhf-badge--fixed-width dlhf-badge--promotion">
                                <div class="dlhf-badge--promotion__label-wrapper dlhf-badge--promotion__label-wrapper--vi">
                                  <span class="percent">';echo '-'.$sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai'].'%';echo '</span>
                                </div>
                              </div>
                            </div>';
                         } else {
                    echo '<div></div>';
                    }
                    ?>
                    <div class="featured__item__pic set-bg"
                        data-setbg="admin/modules/quanlysanpham/uploads/<?php echo $row['image'] ?>">
                        <ul class="featured__item__pic__hover">
                            <li>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="chitietsp.php?id=<?=$row['id_product']?>"><i class="fa fa-eye"></i></a>
                            </li>
                            <li>
                                <a href="#" onclick="themvaogiohangindex(<?php echo $row['id_product']?>)"><i
                                        class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#"><?php echo $row['name_product']?></a></h6>
                        <div class="price" style="height:30px">
                            <?php if($sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai']>0){
                            echo number_format(($row['price_product']) - ($row['price_product'] * $sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai']) / 100) . '' . 'vnđ';
                           echo '<del style="color:#888;font-size: 13px; margin-left:5px; font-weight:500">'; echo number_format($row['price_product']) . '' . 'vnđ';
                           echo '</del><br>';
                        } else{
                            echo ' <h5>';
                            echo number_format($row['price_product']) . '' . 'vnđ';
                            echo '</h5>';
                        }
                        ?>
                        </div>
                        <a onclick="themvaogiohangindex(<?php echo $row['id_product']?>)" class="btn red">
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
            <a class="btn-readmore" href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key="
                style="margin-top:20px; margin-bottom:20px">Xem thêm</a>

        </div>
    </div>
</section>
<section class="featured spad">
    <div class="container product-wrapp">
        <div class="section-title-1 clearfix">
            <a href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key=">
                <h3 class="heading-5 strong-700 mb-0 float-left text-dark">
                    <span class="mr-4">Sản phẩm khác</span>
                </h3>
            </a>
            <a href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key=" class="float-right">
                Xem thêm</a>
        </div>
        <div class="row featured__filter">
            <?php
              $tbSp = $sp-> table_SanPhamIndex();
              foreach ($tbSp as $row):
            ?>
            <div class="col-xl-2 my-2 col-lg-3 col-md-4 col-6">
                <div class="featured__item">
                    <?php if($sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai']>0){
                    echo ' <div class="saleoff">
                              <div class="dlhf-badge dlhf-badge--fixed-width dlhf-badge--promotion">
                                <div class="dlhf-badge--promotion__label-wrapper dlhf-badge--promotion__label-wrapper--vi">
                                  <span class="percent">';echo '-'.$sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai'].'%';echo '</span>
                                </div>
                              </div>
                            </div>';
                         } else {
                    echo '<div></div>';
                    }
                    ?>
                    <div class="featured__item__pic set-bg"
                        data-setbg="admin/modules/quanlysanpham/uploads/<?php echo $row['image'] ?>">
                        <ul class="featured__item__pic__hover">
                            <li>
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="chitietsp.php?id=<?=$row['id_product']?>"><i class="fa fa-eye"></i></a>
                            </li>
                            <li>
                                <a href="#" onclick="themvaogiohangindex(<?php echo $row['id_product']?>)"><i
                                        class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#"><?php echo $row['name_product']?></a></h6>
                        <div class="price" style="height:30px">
                            <?php if($sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai']>0){
                            echo number_format(($row['price_product']) - ($row['price_product'] * $sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai']) / 100) . '' . 'vnđ';
                           echo '<del style="color:#888;font-size: 13px; margin-left:5px; font-weight:500">'; echo number_format($row['price_product']) . '' . 'vnđ';
                           echo '</del><br>';
                        } else{
                            echo ' <h5>';
                            echo number_format($row['price_product']) . '' . 'vnđ';
                            echo '</h5>';
                        }
                        ?>
                        </div>
                        <a onclick="themvaogiohangindex(<?php echo $row['id_product']?>)" class="btn red">
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
            <a class="btn-readmore" href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key="
                style="margin-top:20px; margin-bottom:20px">Xem thêm</a>

        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Latest Product Section Begin
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="" />
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
Latest Product Section End -->
<?php
$tt = new loadcnxh();
?>
<!-- Blog Section Begin -->
<section class="from-blog spad">
    <div class="container blog">
        <div class="section-title-1 clearfix">
            <a href="blog.php">
                <h3 class="heading-5 strong-700 mb-0 float-left text-dark">
                    <span class="mr-4">Tin tức - Cẩm nang</span>
                </h3>
            </a>
            <a href="blog.php" class="float-right">
                Xem thêm</a>
        </div>
        <div class="row">
            <?php
              $tbtt = $tt-> table_Ttcn();
              foreach ($tbtt as $row):
            ?>
            <div class="col-lg-custom-2 col-xs-12">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="admin/modules/quanlycnxh/uploads/<?php echo $row['image_trend'] ?>"
                            style="height:200px" alt="" />
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> <?php echo $row['ngaythem']?></li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#"><?php echo $row['name_trend']?></a></h5>
                        <p><?php echo $row['mota']?></p>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>
<!-- Blog Section End -->
<?php
include 'footer.php';
?>