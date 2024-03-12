<?php
include "header.php"
?>
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="blog/style.css">

<section id="home-section" class="hero_ab">
    <div class="home-slider owl-carousel">
        <?php
        $banner = $sp->row_Banner('peaceshop');
        foreach ($banner as $row):
    ?>
        <div class="slider-item" style="background-image: url(img/banner/<?php echo $row['image_banner']?>);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-12 text-center">
                        <h1 class="mb-2">Thay lời muốn nói trao gửi yêu thương</h1>
                        <h2 class="subheading mb-4">Gửi hoa tươi trao cảm xúc</h2>
                        <p><a href="hoa.php" class="btn btn-primary">Xem Thêm</a></p>
                    </div>

                </div>
            </div>
        </div>
        <?php
        endforeach;
    ?>
    </div>
</section>


<section class="section-sevices">
    <div class="container" style="max-width: 1160px;">
        <div class="featureBox row">
            <h2 class="heading h1 heading--dancing text-center col-md-12">Tại sao chọn chúng tôi</h2> <br>
            <div class="container">
                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-xs-6 col-sm-6 col-lg-3 featureBox__item">
                        <img src="img/banner/camket.png" alt="">
                        <h3 class="featureBox__item__title">Giá cả hợp lý</h3>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-3 featureBox__item">
                        <img src="img/banner/ship.png" alt="">
                        <h3 class="featureBox__item__title">Giao hàng nhanh</h3>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-3 featureBox__item">
                        <img src="img/banner/medal.png" alt="">
                        <h3 class="featureBox__item__title">Sạch,tươi,mới</h3>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-3 featureBox__item">
                        <img src="img/banner/hand.png" alt="">
                        <h3 class="featureBox__item__title">Thân thiện môi trường</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="ourStory row">
            <div class="col-md-12 col-md-offset-1 col-lg-12col-lg-offset-1">
                <h2 class="heading h1 heading--dancing text-center">Về chúng tôi</h2>
                <p class="text-italic text-center ">Sứ mệnh của chúng tôi là giúp bạn trao đi tâm tư và biến mọi dịp
                    trọng đại của bạn trở nên đặc biệt hơn.</p> <br>
                <p class="text-italic text-center">Đội ngũ giàu kinh nghiệm của chúng tôi luôn đảm bảo đem đến cho bạn
                    những bó hoa tươi nhất được gói cùng các loại nguyên vật liệu chất lượng cao. Chúng tôi cung cấp
                    nhiều chủng loại hoa, kích thước và thiết kế khác nhau phù hợp cho bất kỳ dịp nào bạn cần.</p>
                <p class="text-italic text-center">Thông qua nền tảng trực tuyến, chúng tôi mong muốn đem đến cho bạn
                    trải nghiệm thật tiện lợi, dễ dàng và tràn đầy niềm vui.</p>
                <div class="text-center">
                    <img src="img/banner/about-us1.jpeg" alt="" width="160" height="160"
                        style="border-radius: .5rem;box-shadow: 0 0 15px rgb(247 137 50 / 25%);">&nbsp;
                    <img src="img/banner/about-us2.jpeg" alt="" width="160" height="160"
                        style="border-radius: .5rem;box-shadow: 0 0 15px rgb(247 137 50 / 25%);">&nbsp;
                    <img src="img/banner/about-us2.jpeg" alt="" width="160" height="160"
                        style="border-radius: .5rem; box-shadow: 0 0 15px rgb(247 137 50 / 25%);">
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Peace shop</span>
                <h2 class="mb-4 heading--dancing">Đội ngũ nhân viên</h2>
                <p>Nhân viên của chúng tôi là những người trẻ đầy nhiệt huyết, họ đã đóng góp vô cùng lớn đến sự hình
                    thành và phát triển của công ty </p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(img/latest-product/lp-3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">abcdefg</p>
                                <p class="name">Lê Thị Thanh Ngân</p>
                                <span class="position">Nhân viên Marketing </span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(img/latest-product/lp-3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">hihi,haha,hoho</p>
                                <p class="name">Lê Thị Thanh Bình</p>
                                <span class="position">Giám đốc</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(img/latest-product/lp-3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">an nhoonh ha xê ố</p>
                                <p class="name">Nguyễn VĂn A</p>
                                <span class="position">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(img/latest-product/lp-3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">an nhoonh ha xê ố</p>
                                <p class="name">Nguyễn VĂn A</p>
                                <span class="position">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(img/latest-product/lp-3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="fa fa-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">an nhoonh ha xê ố</p>
                                <p class="name">Nguyễn VĂn A</p>
                                <span class="position">UI Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
        <p><a href="raucuqua.php" class="btn btn-primary">Xem Tất cả</a></p>
        </div>

    </div>
</section>
-->
<!--
<section class="blog-news">
    <div class="container">
        <div class="row" style="padding-top: 70px;padding-bottom: 50px;">
            <h2 class="heading h1 heading--dancing text-center col-md-12">Tin tức & Sự kiện nổi bật</h2> <br>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="blog__item">
                    <div class="blog__pic">
                        <img src="img/blog/blog-1.jpg" alt="">
                    </div>
                    <div class="blog__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="blog__item">
                    <div class="blog__pic">
                        <img src="img/blog/blog-1.jpg" alt="">
                    </div>
                    <div class="blog__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="blog__item">
                    <div class="blog__pic">
                        <img src="img/blog/blog-1.jpg" alt="">
                    </div>
                    <div class="blog__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <p><a href="raucuqua.php" class="btn-readmore" style="width:180px;">Xem Tất Cả</a></p>
        </div>
    </div>
</section>
-->

<script src="blog/js/jquery.min.js"></script>
<script src="blog/js/jquery-migrate-3.0.1.min.js"></script>
<script src="blog/js/jquery.easing.1.3.js"></script>
<script src="blog/js/jquery.stellar.min.js"></script>
<script src="blog/js/owl.carousel.min.js"></script>
<script src="blog/js/aos.js"></script>
<script src="blog/js/scrollax.min.js"></script>
<script src="blog/js/main.js"></script>


<?php
include "footer.php"
?>