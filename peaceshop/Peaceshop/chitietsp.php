<?php 
include 'header.php';
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<?php
$chitiet_sp = new spChitiet();
?>
<!-- Breadcrumb Section Begin -->

<!-- Breadcrumb Section End -->
<?php
$row = $chitiet_sp->row_SanPham($_GET['id']);
?>
<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container" style="border: 1px solid #efefef;padding: 15px;margin-bottom: 30px;">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                            src="admin/modules/quanlysanpham/uploads/<?php echo $row['image'] ?>" id="anh" alt="">
                    </div>
                    <div class="product__details__pic__slider owl-carousel">
                        <?php
                        $img_ct = $chitiet_sp->rows_img();
                        foreach ($img_ct as $r):
                            if ($row['id_product'] == $r['id_product']):
                        ?>
                        <img data-imgbigurl="admin/modules/quanlysanpham/uploads/<?php echo $r['name_image']?>"
                            src="admin/modules/quanlysanpham/uploads/<?php echo $r['name_image'] ?>" alt="">
                        <?php
                        endif;
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="product__details__text">
                    <h3 id="name"><?php echo $row['name_product']?></h3>
                    <div class="mb-3">
                        <i class="fa fa-star star-light2 mr-1 main_star2"></i>
                        <i class="fa fa-star star-light2 mr-1 main_star2"></i>
                        <i class="fa fa-star star-light2 mr-1 main_star2"></i>
                        <i class="fa fa-star star-light2 mr-1 main_star2"></i>
                        <i class="fa fa-star star-light2 mr-1 main_star2"></i>
                        <span>(</span><span id="total_review2">0</span><span>đánh giá)</span>
                    </div>
                    <?php
                    $tb_km = $chitiet_sp->rows_Km();
                    foreach ($tb_km as $r) :
                        if ($row['id_khuyenmai'] == $r['id_khuyenmai']) :
                    ?>
                    <?php
                     if($r['giatri_khuyenmai']>0){
                        echo '<p>Giá: &emsp;&emsp;&emsp;&emsp;&emsp;<del style="color:#555"><span id="price">';
                        echo number_format($row['price_product']).'</span>'.'vnđ';
                        echo '</del></p>';
                        echo 'Giá giảm: &emsp;&emsp;<a class="product__details__price">';
                         echo number_format(($row['price_product'])-($row['price_product']*$r['giatri_khuyenmai'])/100).''.'vnđ';
                         echo'</a>';
                    }else{
                        echo 'Giá: &emsp;&emsp;<a id="price" class="product__details__price">';
                        echo number_format($row['price_product']).''.'vnđ';
                        echo'</a>';
                         }
                    ?>
                    <?php
                        endif;
                        endforeach;
                    ?>
                    <p><?php echo $row['info_product']?></p>
                    <i>Sản phẩm thực nhận có thể khác với hình đại diện trên website (đặc điểm thủ công và tính chất tự
                        nhiên của hàng nông nghiệp)</i> <br>
                    <ul>
                        <div class="product__details__quantity">
                            <p>Số lượng: &emsp;&emsp;
                                <a class="quantity">
                                    <a class="pro-qty">
                                        <input type="text" value="1" id="num" name="num">
                                    </a>
                                </a>
                            </p>
                        </div>
                        <a style="color: #555;"> &emsp;&emsp;Yêu thích:&emsp;</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> <br>
                        <a class="primary-btn2" style="color:#fff;"
                            onclick="muangay(<?php echo $row['id_product']?>)">MUA NGAY</a>
                        <a class="primary-btn" onclick="themvaogiohang(<?php echo $row['id_product']?>)">THÊM
                            VÀO GIỎ</a>
                    </ul>
                    <div class="option-box">
                        <ul>
                            <li><img width="40"
                                    src="https://shop.dalathasfarm.com/public/dalathasfarm/images/delivery.png"><span>Giao
                                    hàng nhanh trong ngày</span></li>
                            <li><img width="40"
                                    src="https://shop.dalathasfarm.com/public/dalathasfarm/images/present-box.png"><span>Nhiều
                                    ưu đãi &amp; quà tặng</span></li>
                            <li><img width="40"
                                    src="https://shop.dalathasfarm.com/public/dalathasfarm/images/eco-nature.png"><span>Đảm
                                    bảo tươi &amp; mới mỗi ngày</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="border: 1px solid #efefef;padding: 15px;margin-bottom: 30px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                aria-selected="true">Mô tả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">Ý
                                nghĩa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">Đánh
                                giá <span>(<?php echo $chitiet_sp->count_dg($_GET['id']); ?>)</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <?php echo $row['mota']?>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <?php echo $row['ynghia']?>
                            </div>
                        </div>
                        <div id="id_pro" value="<?php echo $row['id_product']?>">
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <div class="container">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4 text-center">
                                                    <h1 class="text-warning mt-4 mb-4">
                                                        <b><span id="average_rating">0.0</span> / 5</b>
                                                    </h1>
                                                    <div class="mb-3">
                                                        <i class="fa fa-star star-light mr-1 main_star"></i>
                                                        <i class="fa fa-star star-light mr-1 main_star"></i>
                                                        <i class="fa fa-star star-light mr-1 main_star"></i>
                                                        <i class="fa fa-star star-light mr-1 main_star"></i>
                                                        <i class="fa fa-star star-light mr-1 main_star"></i>
                                                    </div>
                                                    <h5>(<span id="total_review">0</span> Đánh giá)</h5>
                                                </div>
                                                <div class="col-sm-4">
                                                    <p>
                                                    <div class="progress-label-left"><b>5</b> <i
                                                            class="fa fa-star text-warning"></i></div>

                                                    <div class="progress-label-right">(<span
                                                            id="total_five_star_review">0</span>)</div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                            id="five_star_progress"></div>
                                                    </div>
                                                    </p>
                                                    <p>
                                                    <div class="progress-label-left"><b>4</b> <i
                                                            class="fa fa-star text-warning"></i></div>

                                                    <div class="progress-label-right">(<span
                                                            id="total_four_star_review">0</span>)</div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                            id="four_star_progress"></div>
                                                    </div>
                                                    </p>
                                                    <p>
                                                    <div class="progress-label-left"><b>3</b> <i
                                                            class="fa fa-star text-warning"></i></div>

                                                    <div class="progress-label-right">(<span
                                                            id="total_three_star_review">0</span>)</div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                            id="three_star_progress"></div>
                                                    </div>
                                                    </p>
                                                    <p>
                                                    <div class="progress-label-left"><b>2</b> <i
                                                            class="fa fa-star text-warning"></i></div>

                                                    <div class="progress-label-right">(<span
                                                            id="total_two_star_review">0</span>)</div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                            id="two_star_progress"></div>
                                                    </div>
                                                    </p>
                                                    <p>
                                                    <div class="progress-label-left"><b>1</b> <i
                                                            class="fa fa-star text-warning"></i></div>

                                                    <div class="progress-label-right">(<span
                                                            id="total_one_star_review">0</span>)</div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                            id="one_star_progress"></div>
                                                    </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5" id="review_content"></div>
                                </div>
                                <style>
                                .progress-label-left {
                                    float: left;
                                    margin-right: 0.5em;
                                    line-height: 1em;
                                }

                                .progress-label-right {
                                    float: right;
                                    margin-left: 0.3em;
                                    line-height: 1em;
                                }

                                .star-light {
                                    color: #e9ecef;
                                }

                                .star-light2 {
                                    color: #e9ecef;
                                }
                                </style>

                                <script>
                                $(document).ready(function() {
                                    var rating_data = 0;
                                    load_rating_data();

                                    function load_rating_data() {
                                        let url_str = $(location).attr('href');
                                        let url = new URL(url_str);
                                        let search_params = url.searchParams;
                                        $.ajax({
                                            url: "submit_rating.php",
                                            method: "POST",
                                            data: {
                                                action: 'load_data',
                                                id: search_params.get('id'),
                                            },
                                            dataType: "JSON",
                                            success: function(data) {
                                                $('#average_rating').text(data.average_rating);
                                                $('#total_review').text(data.total_review);
                                                $('#total_review2').text(data.total_review);

                                                var count_star = 0;

                                                $('.main_star').each(function() {
                                                    count_star++;
                                                    if (Math.ceil(data.average_rating) >=
                                                        count_star) {
                                                        $(this).addClass('text-warning');
                                                        $(this).addClass('star-light');
                                                    }
                                                });
                                                $('.main_star2').each(function() {
                                                    count_star++;
                                                    if (Math.ceil(data.average_rating) >=
                                                        count_star) {
                                                        $(this).addClass('text-warning');
                                                        $(this).addClass('star-light2');
                                                    }
                                                });

                                                $('#total_five_star_review').text(data
                                                    .five_star_review);

                                                $('#total_four_star_review').text(data
                                                    .four_star_review);

                                                $('#total_three_star_review').text(data
                                                    .three_star_review);

                                                $('#total_two_star_review').text(data
                                                    .two_star_review);

                                                $('#total_one_star_review').text(data
                                                    .one_star_review);

                                                $('#five_star_progress').css('width', (data
                                                        .five_star_review / data.total_review) *
                                                    100 + '%');

                                                $('#four_star_progress').css('width', (data
                                                        .four_star_review / data.total_review) *
                                                    100 + '%');

                                                $('#three_star_progress').css('width', (data
                                                    .three_star_review / data.total_review
                                                ) * 100 + '%');

                                                $('#two_star_progress').css('width', (data
                                                        .two_star_review / data.total_review) *
                                                    100 + '%');

                                                $('#one_star_progress').css('width', (data
                                                        .one_star_review / data.total_review) *
                                                    100 + '%');

                                                if (data.review_data.length > 0) {
                                                    var html = '';

                                                    for (var count = 0; count < data.review_data
                                                        .length; count++) {
                                                        html += '<div class="row mb-3">';

                                                        html +=
                                                            '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">' +
                                                            data.review_data[count].user_name
                                                            .charAt(0) + '</h3></div></div>';

                                                        html += '<div class="col-sm-11">';

                                                        html += '<div class="card">';

                                                        html += '<div class="card-header"><b>' +
                                                            data.review_data[count].user_name +
                                                            '</b></div>';

                                                        html += '<div class="card-body">';

                                                        for (var star = 1; star <= 5; star++) {
                                                            var class_name = '';

                                                            if (data.review_data[count].rating >=
                                                                star) {
                                                                class_name = 'text-warning';
                                                            } else {
                                                                class_name = 'star-light';
                                                            }

                                                            html += '<i class="fa fa-star ' +
                                                                class_name + ' mr-1"></i>';
                                                        }

                                                        html += '<br />';

                                                        html += data.review_data[count].user_review;
                                                        html += '<br />';
                                                        html +=
                                                            '<img style="width:200px; height:200px;" src="img/danhgia/' +
                                                            data.review_data[
                                                                count].img + '" alt="">';

                                                        html += '</div>';

                                                        html +=
                                                            '<div class="card-footer text-right">Vào  ' +
                                                            data.review_data[count].datetime +
                                                            '</div>';

                                                        html += '</div>';

                                                        html += '</div>';

                                                        html += '</div>';
                                                    }

                                                    $('#review_content').html(html);
                                                }
                                            }
                                        })
                                    }

                                });
                                </script>
                                </body>

                                </html>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->

<!-- Related Product Section Begin -->
<?php
include 'spTuongtu.php';
?>
<!-- Related Product Section End -->

<!-- Footer Section Begin -->
<?php
include 'footer.php';
?>