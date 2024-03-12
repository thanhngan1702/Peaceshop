<?php
include 'header.php';
require 'slCheckout.php';
?>
<section class="shoping-cart spad ">
    <div class="container" style="margin-top:30px;margin-bottom:30px;    border: 1px solid #ebebeb;padding: 30px;">
        <div class="dc-header text-center">
            <h5 class="heading heading-6 strong-700">Đặt hàng thành công</h5>
            <div id="listCarthd">
                <div id="listCarthdtb">
                    <div>
                        <div class="latest-prdouct__slider__item "
                            style="min-width:300px;margin-bottom:0px; overflow:overlay;height:240px;">
                            <?php
                                                $tongtien=0;
                                                $tong = 0;
                                                $numGiohang = 0;
                                                if(isset($_SESSION["giohang"])){
                                                    foreach ($_SESSION["giohang"] as $key => $value) {
                                            ?>
                            <a class="dropdown-item d-flex align-items-center latest-product__item" href="#"
                                style="margin-bottom:0px">
                                <div class="latest-product__item__pic" style="margin-right:10px">
                                    <img src="admin/modules/quanlysanpham/uploads/<?php echo $value["image"]?>" alt=""
                                        style="width:70px;height:70px" />
                                </div>
                                <div class="latest-product__item__text" style="width: 150px;">
                                    <h6 style="font-size:13px;margin-bottom:0px;">
                                        <?php echo $value["name"]?>
                                    </h6>
                                    <span
                                        style="font-size:13px"><?php echo number_format($value["price"]). '' .'vnđ';$tong = $value["num"]*$value["price"];$tongtien += $tong;?></span>
                                    <div class="dem" style="padding-left: 10px;width: 40px; margin:0">
                                        x<?php echo $value["num"]; ?>
                                    </div>
                                </div>
                                <div class="dc-actions" style="z-index: 5;margin-top: 10px;">
                                    <button>
                                        <i class="fa fa-close" onclick="deleteCart(<?php echo $key?>)"></i>
                                    </button>
                                </div>
                            </a>
                            <?php
                                                }      }                          
                                            ?>
                        </div>
                    </div>
                    <div class="dc-item py-3">
                        <span class="subtotal-text">Tổng tiền</span>
                        <span class="subtotal-amount"><?php echo number_format($tongtien). '' . 'vnđ'?></span>
                    </div>
                </div>
            </div>
            <div class="btn btn-base-1 py-2 px-3 hov-bounce hov-shaddow mt-3">
                <a href="index.php" class="text-white" style="letter-spacing: 1px;">Trở lại mua hàng</a>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>