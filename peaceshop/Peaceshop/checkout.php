<?php
include 'header.php';
$conn = mysqli_connect('localhost','root','','peaceshop');
mysqli_set_charset($conn,'utf8');
require 'slCheckout.php';
error_reporting(0);
?>

<section class="shoping-cart spad ">
    <div class="container">
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
        <div class="content">
            <div class="content-box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="document-box">
                                <form name="checkoutform" id="checkoutform" action="checkout.php" method="POST"
                                    novalidate="novalidate">
                                    <div class="row" id="main-content">
                                        <div class="col-lg-9 col-xs-12">
                                            <input name="action" id="action_form" type="hidden" value="MemberOrder">
                                            <div class="signup-box">
                                                <div class="border-wrapp">
                                                    <?php
                                                    if (isset($_COOKIE['account'])) {
                                                        $account = $_COOKIE['account'];
                                                        $sql="SELECT * FROM accounts WHERE user_account ='$account'";
                                                        $result = mysqli_query( $conn, $sql);
                                                        $row= mysqli_fetch_array($result);
                                                    ?>
                                                    <div class="login-checkout" id="blk-nologin">
                                                        <div class="customer-info">
                                                            <p class="title">Thông tin khách hàng</p>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label>Họ và tên <span
                                                                                class="text-danger">*</span></label>
                                                                        <input class="form-control" id="Name"
                                                                            name="Name"
                                                                            value="<?php echo $row['fullname'] ?>"
                                                                            type="text" placeholder="Họ và tên"
                                                                            autocomplete="off">
                                                                        <div id="Name_validate"
                                                                            class="form-validate-error">
                                                                            <?php echo $error['Name'] ?></div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="note-phone">Số điện thoại <span
                                                                                class="text-danger">*</span></label>
                                                                        <select name="IsForeigner"
                                                                            class="form-control country">
                                                                            <option value="0">Việt Nam</option>
                                                                            <option value="1">Other Country</option>
                                                                        </select>
                                                                        <input class="form-control phone" name="Phone"
                                                                            id="Phone"
                                                                            value="<?php echo $row['phone_account'] ?>"
                                                                            type="text" placeholder="Số điện thoại"
                                                                            autocomplete="off">
                                                                        <div id="Phone_validate"
                                                                            class="form-validate-error">
                                                                            <?php echo $error['Phone'] ?></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-xs-12">
                                                                    <div class=" col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Email <span
                                                                                    class="text-danger">*</span></label>
                                                                            <input class="form-control" required=""
                                                                                value="<?php echo $row['email_account'] ?>"
                                                                                name="email" id="checkout-email"
                                                                                type="email" placeholder="Email"
                                                                                autocomplete="off">
                                                                            <div id="email_validate"
                                                                                class="form-validate-error">
                                                                                <?php echo $error['email'] ?></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=" col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>
                                                                                Số điện thoại khác <small>(không bắt
                                                                                    buộc)</small></label>
                                                                            <input class="form-control" name="phone2"
                                                                                id="checkout-phone2"
                                                                                value="<?php echo $_POST['phone@'] ?>"
                                                                                type="text"
                                                                                placeholder="Số điện thoại khác"
                                                                                autocomplete="off">
                                                                            <div id="phone2_validate"
                                                                                class="form-validate-error">
                                                                                <?php echo $error['phone2'] ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="kt-checkbox kt-checkbox--success"
                                                                    name="andanh">
                                                                    <input type="checkbox" name="anonymous" value="2">Ẩn
                                                                    danh người mua<span></span>
                                                                </label>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <?php
                                                    }else{
                                                    ?>
                                                    <div class="kt-radio-list" id="suggest-login-checkout">
                                                        <label class="kt-radio kt-radio--success"
                                                            style="margin-right: 30px;">
                                                            <input type="radio" id="login_type" name="login_type"
                                                                value="nologin" checked="">Đặt hàng không đăng
                                                            nhập<span></span>
                                                        </label>
                                                        <div>Hoặc</div>
                                                        <span class="kt-radio btn-box kt-radio--success">
                                                            <a class="btn btn-or cart-login" href="login.php">ĐĂNG
                                                                NHẬP</a>
                                                        </span>
                                                    </div>
                                                    <hr>
                                                    <div class="login-checkout" id="blk-nologin">
                                                        <div class="customer-info">
                                                            <p class="title">Thông tin khách hàng</p>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label>Họ và tên <span
                                                                                class="text-danger">*</span></label>
                                                                        <input class="form-control" id="Name"
                                                                            name="Name"
                                                                            value="<?php echo $_POST['Name'] ?>"
                                                                            type="text" placeholder="Họ và tên"
                                                                            autocomplete="off">
                                                                        <div id="Name_validate"
                                                                            class="form-validate-error">
                                                                            <?php echo $error['Name'] ?></div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="note-phone">Số điện thoại <span
                                                                                class="text-danger">*</span></label>
                                                                        <select name="IsForeigner"
                                                                            class="form-control country">
                                                                            <option value="0">Việt Nam</option>
                                                                            <option value="1">Other Country</option>
                                                                        </select>
                                                                        <input class="form-control phone" name="Phone"
                                                                            id="Phone"
                                                                            value="<?php echo $_POST['Phone'] ?>"
                                                                            type="text" placeholder="Số điện thoại"
                                                                            autocomplete="off">
                                                                        <div id="Phone_validate"
                                                                            class="form-validate-error">
                                                                            <?php echo $error['Phone'] ?></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-xs-12">
                                                                    <div class=" col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>Email <span
                                                                                    class="text-danger">*</span></label>
                                                                            <input class="form-control"
                                                                                value="<?php echo $_POST['email'] ?>"
                                                                                name="email" id="checkout-email"
                                                                                type="email" placeholder="Email"
                                                                                autocomplete="off">
                                                                            <div id="email_validate"
                                                                                class="form-validate-error">
                                                                                <?php echo $error['email'] ?></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=" col-xs-12">
                                                                        <div class="form-group">
                                                                            <label>
                                                                                Số điện thoại khác <small>(không bắt
                                                                                    buộc)</small></label>
                                                                            <input class="form-control" name="phone2"
                                                                                id="checkout-phone2"
                                                                                value="<?php echo $_POST['phone2'] ?>"
                                                                                type="text"
                                                                                placeholder="Số điện thoại khác"
                                                                                autocomplete="off">
                                                                            <div id="phone2_validate"
                                                                                class="form-validate-error">
                                                                                <?php echo $error['phone2'] ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="kt-checkbox kt-checkbox--success"
                                                                    name="andanh">
                                                                    <input type="checkbox" name="anonymous" value="2">Ẩn
                                                                    danh người mua<span></span>
                                                                </label>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>

                                                <div class="border-wrapp">
                                                    <div class="customer-address">
                                                        <p class="title">Địa chỉ nhận hàng</p>

                                                        <div class="kt-radio-list">
                                                            <label class="kt-radio kt-radio--success">
                                                                <input type="radio" name="receive_type" value="ship"
                                                                    checked=""><img width="20"
                                                                    src="img/banner/home-1.svg">Giao
                                                                hàng tại nhà<span></span>
                                                            </label>
                                                            <label class="kt-radio kt-radio--success">
                                                                <input type="radio" name="receive_type"
                                                                    value="store"><img width="20"
                                                                    src="img/banner/store.svg">Nhận
                                                                tại cửa hàng<span></span>
                                                            </label>
                                                            <label class="i-will-receive" for="i-will-receive">
                                                                <input id="i-will-receive" type="checkbox"> <b>Tôi là
                                                                    người nhận hàng</b>
                                                            </label>
                                                        </div>

                                                        <div class="home-delivery" id="blk-ship">
                                                            <div class="row">
                                                                <input name="customer_address_id" type="hidden"
                                                                    value="0">
                                                                <div class="col-lg-12 col-xs-4">
                                                                    <div class="kt-radio-list">
                                                                        <label class="kt-radio kt-radio--success">
                                                                            <input type="radio" value="3"
                                                                                name="gender">Anh<span></span>
                                                                        </label>
                                                                        <label class="kt-radio kt-radio--success">
                                                                            <input type="radio" value="1" name="gender"
                                                                                checked="">Chị<span></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-10 col-xs-8">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text"
                                                                            name="fullname" id="checkout-fullname"
                                                                            value="<?php echo $_POST['fullname'] ?>"
                                                                            placeholder="Họ và tên người nhận *"
                                                                            autocomplete="off">
                                                                        <div id="fullname_validate"
                                                                            class="form-validate-error">
                                                                            <?php echo $error['fullname'] ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-lg-2 col-xs-12 hidden-lg hidden-md hidden-sm">
                                                                    <div class="btn-box pull-right"
                                                                        style="margin-bottom: 0;">
                                                                        <input type="hidden" value="0"
                                                                            name="address_book_id">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-xs-12 hidden-xs">
                                                                    <div class="btn-box pull-right"
                                                                        style="margin-bottom: 0;">
                                                                        <input type="hidden" value=""
                                                                            name="address_book_id">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-xs-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-xs-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="text"
                                                                                    name="customer_phone"
                                                                                    id="checkout-phone"
                                                                                    value="<?php echo $_POST['customer_phone'] ?>"
                                                                                    placeholder="Số điện thoại người nhận *"
                                                                                    autocomplete="off">
                                                                                <div id="customer_phone_validate"
                                                                                    class="form-validate-error">
                                                                                    <?php echo $error['customer_phone'] ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-xs-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="text"
                                                                                    id="customer_phone_2"
                                                                                    name="customer_phone_2"
                                                                                    placeholder="Số điện thoại khác (Không bắt buộc)"
                                                                                    autocomplete="off"
                                                                                    vallue="<?php echo $_POST['customer_phone_2'] ?>">
                                                                                <div id="phone2_validate"
                                                                                    class="form-validate-error">
                                                                                    <?php echo $error['customer_phone_2'] ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text"
                                                                            id="diachinhan" name="diachinhan"
                                                                            placeholder="Địa chỉ nhận"
                                                                            autocomplete="off"
                                                                            value="<?php echo $_POST['diachinhan'] ?>">
                                                                        <div id="diachinhan_validate"
                                                                            class="form-validate-error">
                                                                            <?php echo $error['diachinhan'] ?>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="home-delivery" id="blk-store" style="display:none;">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input id="store_info" name="store_id" value="3"
                                                                            data-name="<small>Đuờng Huỳnh Văn Nghệ, quận Ngũ Hàng Sơn, tp.Đà Nẵng<br>+84 364693924<br>Thời gian: 7:00 - 18:00 cả thứ 7 và CN, Ngày lễ</small>"
                                                                            class="form-check-input"
                                                                            data-address="Đuờng Huỳnh Văn Nghệ, quận Ngũ Hàng Sơn, tp.Đà Nẵng"
                                                                            type="hidden">
                                                                        <p style="color:#f68933">Quý khách vui lòng đến
                                                                            trực
                                                                            tiếp và liên hệ nhân viên để được nhận hàng
                                                                            tại Shop
                                                                        </p>
                                                                        <p class="mt-1">Địa chỉ: <b>56 đường Huỳnh Văn
                                                                                Nghệ, quận Ngũ Hàng Sơn, tp.Đà Nẵng</b>
                                                                        </p>
                                                                        <p class="mt-1">Giờ mở cửa: <b
                                                                                style="text-transform: capitalize;">7:00
                                                                                - 18:00
                                                                                cả thứ 7 và CN, Ngày lễ</b></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="">
                                                <div class="row">
                                                    <style>
                                                    #time-other .input-group-addon {
                                                        width: 25%;
                                                    }

                                                    #time-other .input-group input,
                                                    #time-other .input-group input:focus {
                                                        border: 1px solid #ccc;
                                                        border-radius: 0;
                                                    }

                                                    #time-other .input-group {
                                                        border-radius: 0;
                                                        margin-top: 0
                                                    }

                                                    #time-other .input-group-addon {
                                                        padding: 8px 15px;
                                                        text-align: center;
                                                    }
                                                    </style>
                                                    <script>
                                                    const LIMIT_DATE = 1;
                                                    </script>
                                                    <div class="col-lg-6">
                                                        <div class="border-wrapp" id="delivery-time-wrapper">
                                                            <div class="form-group" style="margin:0px;">
                                                                <label class="title">Thời gian nhận hàng mong
                                                                    muốn</label>
                                                                <div class="kt-radio-list">
                                                                    <input type="hidden" name="DeliveryTime" value="">
                                                                    <label class="kt-radio kt-radio--success hidden">
                                                                        <input type="radio" name="delivery_type"
                                                                            value="save"><span></span>
                                                                    </label>
                                                                    <label class="kt-radio kt-radio--success"
                                                                        style="display:none">
                                                                        <input type="radio" name="delivery_type"
                                                                            value="other" checked="">Chọn khung giờ
                                                                        khác<span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="time-delivery" id="time-save"
                                                                style="display:none">
                                                            </div>
                                                            <div class="time-delivery" id="time-other"
                                                                style="display:block">
                                                                <p
                                                                    style="margin-bottom: 5px; line-height: 1.5; font-style:italic; color: red;">
                                                                </p>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-xs-6" id="delivery_time"
                                                                        style="padding-right: 0px;">
                                                                        <div class="form-group">
                                                                            <div class="input-group date"
                                                                                id="kt_datepicker_1">
                                                                                <input type="date"
                                                                                    name="order_delivery_date"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <div id="order_delivery_date_validate"
                                                                                class="form-validate-error">
                                                                                <?php echo $error['order_delivery_date'] ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xs-6">
                                                                        <div class="form-group">
                                                                            <select class="form-control"
                                                                                id="delivery_time_range"
                                                                                name="order_delivery_time"
                                                                                style="width:100%;">
                                                                                <option value="">Chọn thời gian</option>
                                                                                <option value="09:00-17:00">09:00 -
                                                                                    17:00
                                                                                </option>
                                                                                <option value="17:00-18:00">17:00 -
                                                                                    18:00
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div id="order_delivery_time_validate"
                                                                        class="form-validate-error col-xs-12"></div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label for="">Ghi chú cho nhân viên giao
                                                                                hàng</label>
                                                                            <textarea name="note" id="checkout-note"
                                                                                placeholder="ghi chú giao hàng. Ví dụ: Giao hàng giúp tôi lên tầng 3, Student House 2"
                                                                                rows="3" class="form-control"
                                                                                style="width:450px;"></textarea>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div> <!-- END border-wrapp -->
                                                    </div>
                                                    <style>
                                                    #delivery_time_range {
                                                        border: 1px solid #efefef;
                                                        display: flex;
                                                        flex-direction: column;
                                                        padding: 7px;
                                                    }

                                                    #delivery_time_range label:hover {
                                                        cursor: pointer;
                                                        color: #f58831;
                                                    }

                                                    .datepicker table tr td.disabled {
                                                        color: #d0caca !important;
                                                    }

                                                    @media screen and (max-width: 860px) {
                                                        #delivery_time {
                                                            /* display: flex; */
                                                            /* flex-direction: column-reverse; */
                                                        }
                                                    }
                                                    </style>
                                                    <div class="col-lg-6">
                                                        <div class="customer-address border-wrapp">
                                                            <p class="title" style="margin-bottom: 10px;">Lời nhắn cho
                                                                người nhận</p>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-xs-6">
                                                                    <div class="form-group">
                                                                        <div
                                                                            class="dropdown bootstrap-select form-control bs3">
                                                                            <select name="object"
                                                                                class="form-control selectpicker"
                                                                                tabindex="-98">
                                                                                <option value="">Đối tượng</option>
                                                                                <option value="1">Cha / Mẹ</option>
                                                                                <option value="2">Vợ / Chồng</option>
                                                                                <option value="3">Gia đình</option>
                                                                                <option value="4">Người thương</option>
                                                                                <option value="5">Đồng nghiệp / Bạn bè
                                                                                </option>
                                                                            </select>
                                                                            <div class="dropdown-menu open"
                                                                                role="combobox">
                                                                                <div class="inner open" role="listbox"
                                                                                    aria-expanded="false" tabindex="-1">
                                                                                    <ul class="dropdown-menu inner ">
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-xs-6">
                                                                    <div class="form-group">
                                                                        <div
                                                                            class="dropdown bootstrap-select form-control bs3">
                                                                            <select name="occasion"
                                                                                class="form-control selectpicker"
                                                                                tabindex="-98">
                                                                                <option value="">Tặng dịp</option>
                                                                                <option value="1">Sinh nhật</option>
                                                                                <option value="2">Chúc mừng</option>
                                                                                <option value="3">Chia buồn</option>
                                                                                <option value="4">Khai trương</option>
                                                                                <option value="5">Ngày đặc biệt</option>
                                                                                <option value="6">Cảm ơn</option>
                                                                            </select>
                                                                            <div class="dropdown-menu open"
                                                                                role="combobox">
                                                                                <div class="inner open" role="listbox"
                                                                                    aria-expanded="false" tabindex="-1">
                                                                                    <ul class="dropdown-menu inner ">
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label>Thông điệp trên thiệp</label>
                                                                        <textarea class="form-control" name="message"
                                                                            type="text" placeholder="Lời nhắn"
                                                                            autocomplete="off" rows="5"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-wrapp">
                                                    <div class="payment">
                                                        <p class="title">Chọn phương phức thanh toán</p>
                                                        <div class="payment-list">
                                                            <div class="item-payment">
                                                                <label class="kt-radio kt-radio--success">
                                                                    <input type="radio" name="payment"
                                                                        value="onepay_visa">
                                                                    <span>
                                                                        <img height="40" src="img/banner/visa.svg">
                                                                        <span>Visa / Mastercard</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="item-payment">
                                                                <label class="kt-radio kt-radio--success">
                                                                    <input type="radio" name="payment"
                                                                        value="onepay_atm">
                                                                    <span>
                                                                        <img height="40" src="img/banner/atm.svg">
                                                                        <span>Thẻ ATM nội địa</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="item-payment">
                                                                <label class="kt-radio kt-radio--success">
                                                                    <input type="radio" name="payment" value="transfer">
                                                                    <span>
                                                                        <img height="40"
                                                                            src="img/banner/money-transfer.svg">
                                                                        <span>Thanh toán chuyển khoản</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="item-payment">
                                                                <label class="kt-radio kt-radio--success">
                                                                    <input type="radio" name="payment" value="cod"
                                                                        checked="">
                                                                    <span>
                                                                        <img height="40" src="img/banner/cod.svg">
                                                                        <span>Thanh toán khi nhận hàng</span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="info-bank hidden">
                                                            <hr>
                                                            <p class="title hidden">Thông tin chuyển khoản</p>
                                                            <div class="bank-info hidden">
                                                                <div class="bank-item">
                                                                    <p>Tên chủ thẻ: <strong> peaceshop</strong></p>
                                                                    <p>STK: <strong>0561000535116</strong></p>
                                                                    <p>Vietcombank VCB - CN Đà Nẵng</p>
                                                                    <p>Nội dung chuyển khoản:
                                                                        Tên-khách-hàng_Số-điện-thoại_Số-tiền-đơn-hàng
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-wrapp">
                                                    <p>
                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                        Bằng cách đặt hàng, bạn đã đồng ý với <a target="_blank"
                                                            href="baomat.php" title="điều khoản">điều khoản và điều
                                                            kiện</a> của
                                                        PeaceShop.
                                                    </p>

                                                    <div class="btn-box" style="width:400px; margin:20px auto 10px">
                                                        <button type="submit" name="cod" value="1"
                                                            class="btn btn-buy btn-confirm confirm_cod" id="myBtn">
                                                            THANH
                                                            TOÁN <span>KHI NHẬN HÀNG</span>
                                                        </button>

                                                        <button type="submit" name="paymentvisa" value="1"
                                                            title="Thanh toán Online"
                                                            class="btn btn-buy btn-confirm confirm_cod hidden">THANH
                                                            TOÁN
                                                            ONLINE <span>(Visa / Mastercard)</span>
                                                        </button>

                                                        <button type="submit" name="paymentatm" value="1"
                                                            title="Thanh toán Online"
                                                            class="btn btn-buy btn-confirm confirm_cod hidden">THANH
                                                            TOÁN ONLINE <span>(ATM)</span>
                                                        </button>

                                                        <button type="submit" name="transfer" value="1"
                                                            class="btn btn-buy btn-confirm confirm_cod hidden"> THANH
                                                            TOÁN <span>CHUYỂN KHOẢN</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-xs-12" id="sidebar" style="">
                                            <div class="sidebar__inner" id="cart-summary" style="position: relative;">
                                                <div class="border-wrapp padding-0">
                                                    <div class="order-cart-header hover-cursor"
                                                        onclick="if($(this).find('.fa').hasClass('fa-angle-down')){$(this).find('.fa').removeClass('fa-angle-down').addClass('fa-angle-up');}else{$(this).find('.fa').removeClass('fa-angle-up').addClass('fa-angle-down');}; $(this).next().toggle('fast');">
                                                        <p>Sản phẩm</p>
                                                        <?php
                                                            $numGiohang = 0;
                                                            if(isset($_SESSION["giohang"])){
                                                                foreach ($_SESSION["giohang"] as $key => $value) {
                                                                    $numGiohang ++;
                                                                }
                                                            }
                                                        ?>
                                                        <p class="total-item"><?php echo  $numGiohang ?> sp <i
                                                                class="fa fa-angle-up"></i></p>
                                                    </div>
                                                    <div class="order-cart-content " style="display: none;">
                                                        <?php
                                                            $tong = 0;
                                                            $tongtien=0;
                                                            if(isset($_SESSION["giohang"])){
                                                                foreach ($_SESSION["giohang"] as $key => $value) {
                                                                    $numGiohang ++;
                                                        ?>
                                                        <div class="order-cart-content-item">
                                                            <p style="width: 25%; flex: 0 0 25%">
                                                                <img src="admin/modules/quanlysanpham/uploads/<?php echo $value["image"]?>"
                                                                    class="img-responsive" style="width:60px"
                                                                    alt="<?php echo $value["name"]?>">
                                                            </p>
                                                            <p>
                                                                <a class="p-name" style="color: #333"
                                                                    href="chitietsp.php?id=<?php echo $key?>"
                                                                    title="<?php echo $value["name"]?>"><?php echo $value["name"]?></a><br>
                                                                <span>x<?php echo $value["num"]?></span>
                                                            </p>
                                                            <p><?php echo number_format($tong = $value["num"]*$value["price"]). '' . 'vnđ'; $tongtien += $tong ; ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                            }}
                                                        ?>

                                                    </div>
                                                </div>
                                                <div class="border-wrapp padding-0">
                                                    <div class="order-cart-header">
                                                        <p>Tóm tắt đơn hàng</p>
                                                    </div>
                                                    <div class="order-cart-content">
                                                        <div class="order-cart-content-item">
                                                            <p>Tạm tính</p>
                                                            <p><?php echo number_format($tongtien). '' . 'vnđ'?></p>
                                                        </div>
                                                        <?php
                                                            if($tongtien > 1000000){
                                                                $pvc=0;
                                                        ?>
                                                        <div class="order-cart-content-item shipping_price"
                                                            data-shipping-fee="50000">
                                                            <p>Phí vận chuyển</p>
                                                            <p>0vnđ</p>
                                                        </div>
                                                        <?php
                                                            }else{
                                                                $pvc= 25000;
                                                        ?>
                                                        <div class="order-cart-content-item shipping_price"
                                                            data-shipping-fee="50000">
                                                            <p>Phí vận chuyển</p>
                                                            <p>25.000vnđ</p>
                                                        </div>
                                                        <?php }
                                                        ?>
                                                        <hr>
                                                        <div class="order-cart-content-item cart-all-total">
                                                            <p>Tổng cộng</p>
                                                            <p><span class="have_ship"
                                                                    name="tongdh"><?php echo number_format($tongtien+$pvc). '' . 'vnđ'?>
                                                                </span>
                                                                <span class="hidden no_ship"
                                                                    name="tong"><?php echo number_format($tongtien). '' . 'vnđ'?>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--<div class="text-center">
                                                         Button HTML (to Trigger Modal)
                                                        <a href="#myModalcheckout" class="trigger-btn"
                                                            data-toggle="modal">Click
                                                            to Open Confirm Modal</a>
                                                    </div>-->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <?php } else{
    echo '<div class="container" style="margin-top:30px;margin-bottom:30px;    border: 1px solid #ebebeb;padding: 30px;">
            <div class="dc-header text-center">
                <h5 class="heading heading-6 strong-700">Chưa có sản phẩm trong giỏ hàng</h5>
                <div class="btn btn-base-1 py-2 px-3 hov-bounce hov-shaddow mt-3">
                    <a href="index.php" class="text-white" style="letter-spacing: 1px;">Trở lại mua hàng</a>
                </div>
            </div>
        </div>
    </div>';
    }
?>
    </session>

    <?php
    include 'footer.php';
    ?>