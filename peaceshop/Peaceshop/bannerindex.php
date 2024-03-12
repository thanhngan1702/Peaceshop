<!-- Banner Section Begin -->
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-lg-custom-3 col-xs-12 hidden-xs">
                <div style="border:2px solid #eee; padding: 5px; height: 340px;">
                    <a style="font-weight:700;">Sản phẩm nổi bật</a>
                    <?php
                    $tbNb = $sp-> spNoibat1();
                    foreach ($tbNb as $row):
                ?>
                    <div class="featured__item">
                        <?php if($sp->row_khuyenmai($row['id_khuyenmai'])['giatri_khuyenmai']>0){
                    echo ' <div class="saleoff" style="top:30px;right:20px;z-index:3">
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
                        <div class="featured__item__pic set-bg" style="height:170px"
                            data-setbg="admin/modules/quanlysanpham/uploads/<?php echo $row['image'] ?>">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-retweet"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
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
                            <a href="chitietsp.php?id=<?=$row['id_product']?>" class="btn red">
                                <span>Đặt ngay</span>
                                <span class="_icon">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
            <div class="col-lg-8" style="margin-bottom:10px">
                <div class="slider">
                    <div class="slides">
                        <!--radio buttons start-->
                        <input type="radio" name="radio-btn" id="radio1" />
                        <input type="radio" name="radio-btn" id="radio2" />
                        <input type="radio" name="radio-btn" id="radio3" />
                        <input type="radio" name="radio-btn" id="radio4" />
                        <!--radio buttons end-->
                        <!--slide images start-->
                        <div class="slide first">
                            <img src="img/banner/banner_7.jpeg" alt="" />
                        </div>
                        <?php
                            $banner = $sp-> row_Bannerindex();
                            foreach ($banner as $row):
                        ?>
                        <div class="slide">
                            <img src="img/banner/<?php echo $row['image_banner'] ?>" alt="" />
                        </div>
                        <?php
                            endforeach;
                        ?>
                        <!--slide images end-->
                        <!--automatic navigation start-->

                        <!--automatic navigation end-->
                    </div>
                    <!--manual navigation start-->

                    <!--manual navigation end-->
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-lg-custom-3 col-xs-12 hidden-xs">
                <ul class="services-box">
                    <li>
                        <div class="box-item">
                            <img src="img/banner/commit.png" />
                            <h4>Cam kết</h4>
                            <p>Giá cả hợp lý</p>
                        </div>
                    </li>
                    <li>
                        <div class="box-item">
                            <img src="img/banner/shipping.png" />
                            <h4>Giao nhanh</h4>
                            <p>nội thành</p>
                        </div>
                    </li>
                    <li>
                        <div class="box-item">
                            <img src="img/banner/guarantee.png" />
                            <h4>Đảm bảo</h4>
                            <p>Sạch, Tươi, Mới</p>
                        </div>
                    </li>
                    <li>
                        <div class="box-item">
                            <img src="img/banner/sustainability.png" />
                            <h4>Thân thiện</h4>
                            <p>Môi trường sống</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->