<?php
include 'header.php';
?>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Giỏ hàng</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Trang chủ</a>
                        <span>Giỏ hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad " id="listCart">
    <div class="container" id="listCarttb">
        <?php
            $numGiohang = 0;
            if(isset($_SESSION["giohang"])){
                foreach ($_SESSION["giohang"] as $key => $value) {
                    $numGiohang ++;
                }
            }
        ?>
        <?php 
            if($numGiohang >0){
        ?>
        <?php
            $soluong=0;
            $tong = 0;
            $tongtien=0;
            if(isset($_SESSION["giohang"])){
            ?>
        <div class="row">
            <div class="col-lg-8">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng cộng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    foreach ($_SESSION["giohang"] as $key => $value) {
                                        $numGiohang ++;
                                        
                            ?>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="admin/modules/quanlysanpham/uploads/<?php echo $value["image"]?>" alt="">
                                    <h5><?php echo $value["name"]?></h5>
                                </td>
                                <td class="shoping__cart__price">
                                    <?php echo number_format($value["price"]). '' .'vnđ'?>
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="dem">
                                            <input type="number" onchange="updateCart(<?php echo $key?>)"
                                                value="<?php echo $value["num"]?>" id="num_<?php echo $key;?>"
                                                name="num_<?php echo $key?>">
                                        </div>
                                        <?php
                                            $soluong +=$value["num"];
                                        ?>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    <?php echo number_format($tong = $value["num"]*$value["price"]). '' . 'vnđ'; $tongtien += $tong ; ?>
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close" onclick="deleteCart(<?php echo $key?>)"> </span>
                                </td>
                            </tr>
                        </tbody>
                        <?php }
                            ?>
                    </table>
                </div>
            </div>
            <div class=" col-lg-4">
                <div class="shoping__checkout">
                    <h5>Giỏ hàng của tôi</h5>
                    <ul>
                        <li>Số lượng
                            <span><?php echo $soluong; ?></span>
                        </li>
                        <li>Tạm tính
                            <span><?php echo number_format($tongtien). '' . 'vnđ'?></span>
                        </li>
                        <?php
                            if($tongtien > 1000000){
                                $pvc=0;
                        ?>
                        <li>Phí vận chuyển
                            <span>0vnđ</span>
                        </li>

                        <?php
                            }else{
                                $pvc= 25000;
                        ?>
                        <li>Phí vận chuyển
                            <span>25,000vnđ</span> <br>
                            <h7>Mua thêm <?php echo number_format(1000000-$tongtien);?>vnđ để miễn phí vận chuyển</h7>


                        </li>
                        <?php }
                        ?>
                        <div class="shoping__continue">
                            <div class="shoping__discount">
                                <form action="#">
                                    <input type="text" placeholder="Nhập mã giảm giá">
                                    <button type="submit" class="site-btn">Áp dụng</button>
                                </form>
                            </div>
                        </div>
                        <li style="margin-top:20px">Tổng cộng
                            <span><?php echo number_format($tongtien+$pvc). '' . 'vnđ'?></span>
                        </li>
                    </ul>
                    <a href="checkout.php" class="primary-btn">Tiếp theo</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="#" class="primary-btn "><i class="fa fa-row-right"></i>Trở lại cửa hàng</a>
                </div>
            </div>
        </div>
    </div>
    <?php } else{
    echo '</thead></table><div class="container" style="margin-top:30px;    border: 1px solid #ebebeb;padding: 30px
    ;">
    <div class="dc-header text-center">
    <h5 class="heading heading-6 strong-700">Chưa có sản phẩm trong giỏ hàng</h5>
    <div class="btn btn-base-1 py-2 px-3 hov-bounce hov-shaddow mt-3">
    <a href="index.php" class="text-white" style="letter-spacing: 1px;">Trở lại mua hàng</a>
    </div>
    </div>
    </div>
    </div></div></div>';
    }
    }else{
        echo '</thead></table><div class="container" style="margin-top:30px;    border: 1px solid #ebebeb;padding: 30px
    ;">
    <div class="dc-header text-center">
    <h5 class="heading heading-6 strong-700">Chưa có sản phẩm trong giỏ hàng</h5>
    <div class="btn btn-base-1 py-2 px-3 hov-bounce hov-shaddow mt-3">
    <a href="index.php" class="text-white" style="letter-spacing: 1px;">Trở lại mua hàng</a>
    </div>
    </div>
    </div>
    </div></div></div>';
    }
?>
</section>
<!-- Shoping Cart Section End -->

<!-- Footer Section Begin -->
<?php
    include 'footer.php';
?>