<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Peaceshop" />
    <meta name="keywords" content="Peaceshop, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Peace shop</title>


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<?php
    ob_start();
    session_start();
    require 'admin/DB.php';
    require 'spLoadsanpham.php';
    $sp = new spLoadsanpham();
?>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/banner/logo.png" alt="" /></a>
        </div>
        <div class="humberger__menu__widget">
            <!--<div class="header__top__right__language">
                <img src="img/language.png" alt="" />
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>-->
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="menu-active-index"><a href="index.php">Trang chủ</a></li>
                <li class="menu-active-shop"><a
                        href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key=">Shop</a>
                </li>
                <li class="menu-active-peaceshop">
                    <a href="about.php">Về Peace shop</a>
                    <!--<ul class="header__menu__dropdown">
                        <li class="menu-active-index"><a href="shop-details.html">Shop Details</a></li>
                        <li class="menu-active-index"><a href="shoping-cart.html">Shoping Cart</a></li>
                        <li class="menu-active-index"><a href="checkout.html">Check Out</a></li>
                        <li class="menu-active-index"><a href="blog-details.html">Blog Details</a></li>
                    </ul>-->
                </li>
                <li class="menu-active-blog"><a href="blog.php">Tin tức-Cẩm nang</a></li>
                <li class="menu-active-uudai"><a href="bosuutap.php">Bộ sưu tập</a></li>
                <li class="menu-active-contact"><a href="lienhe.php">Liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> peaceshop@gmail.com</li>
                <li>Miễn phí vận chuyển cho đơn hàng trên 1 triệu</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->
    <?php
        if (isset($_COOKIE['account'])) {
            $account = $_COOKIE['account'];
            $connection = mysqli_connect("localhost","root","");
            mysqli_set_charset($connection, 'UTF8');
            mysqli_select_db($connection, "peaceshop");
            $sql="SELECT * FROM accounts WHERE user_account ='$account'";
            $result = mysqli_query( $connection, $sql);
            $row= mysqli_fetch_array($result);
        }
    ?>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> peaceshop@gmail.com</li>
                                <li>Miễn phí vận chuyển cho đơn hàng trên 1 triệu</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <!--<div class="header__top__right__language">
                                <img src="img/language.png" alt="" />
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>-->
                            <div class="header__top__right__auth">
                                <?php
                                if (isset($_COOKIE['account'])) {
                                    $connection = mysqli_connect("localhost","root","");
                                    mysqli_set_charset($connection, 'UTF8');
                                    mysqli_select_db($connection, "peaceshop");
                                    $sql="SELECT * FROM accounts WHERE user_account ='$account'";
                                    $result = mysqli_query( $connection, $sql);
                                    $row= mysqli_fetch_array($result);                        
                                ?>
                                <li class="nav-item dropdown no-arrow show">
                                    <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="true">
                                        <span
                                            class="mr-2 d-none d-lg-inline text-gray-600 small"><?php  echo $_COOKIE['account']; ?>
                                        </span>
                                        <img class="img-profile rounded-circle"
                                            src="img/<?php echo $row['image_account']?>">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                        style="margin-top:10px" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="taikhoancanhan.php?ac=thongtin">
                                            <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Thông tin
                                        </a>
                                        <a class="dropdown-item" href="taikhoancanhan.php?ac=thongtin">
                                            <i class="fa fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Cài đặt
                                        </a>
                                        <a class="dropdown-item" href="taikhoancanhan.php?ac=thongtin">
                                            <i class="fa fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Bảo mật
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="logout.php">
                                            <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Đăng xuất
                                        </a>
                                    </div>
                                </li>
                                <?php
                                } else{
                                ?>
                                <a href="login.php"><img width="15" src="img/hero/social-media.svg" alt="" srcset="">
                                    Đăng nhập
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container" id="listNum">
                <div class="row" id="listNumtb">
                    <div class="col-lg-2">
                        <div class="header__logo">
                            <a href="./index.php"><img src="img/banner/logo.png" alt="" style="margin-top:10px" /></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <nav class="header__menu">
                            <ul>
                                <li class="menu-active-index"><a href="index.php">Trang chủ</a></li>
                                <li class="menu-active-shop"><a
                                        href="shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=&page=&key=">Shop</a>
                                </li>
                                <li class="menu-active-peaceshop">
                                    <a href="about.php">Về Peace shop</a>
                                    <!--<ul class="header__menu__dropdown">
                                        <li class="menu-active-index"><a href="shop-details.html">Shop Details</a></li>
                                        <li class="menu-active-index"><a href="shoping-cart.html">Shoping Cart</a></li>
                                        <li class="menu-active-index"><a href="checkout.html">Check Out</a></li>
                                        <li class="menu-active-index"><a href="blog-details.html">Blog Details</a></li>
                                    </ul>-->
                                </li>
                                <li class="menu-active-blog"><a href="blog.php">Tin tức-Cẩm nang</a></li>
                                <li class="menu-active-uudai"><a href="bosuutap.php">Bộ sưu tập</a></li>
                                <li class="menu-active-contact"><a href="lienhe.php">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2">
                        <li class="nav-item dropdown no-arrow mx-1" style="list-style:none; padding:20px">
                            <a class="nav-link" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-cart fa-fw"></i>
                                <?php
                                $numGiohang = 0;
                                if(isset($_SESSION["giohang"])){
                                    foreach ($_SESSION["giohang"] as $key => $value) {
                                        $numGiohang ++;
                                    }
                                }
                                ?>
                                <span class="badge badge-danger badge-counter"
                                    id="numGiohang"><?php echo $numGiohang; ?></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown" style="z-index:1001;">
                                <h6 class="dropdown-header text-center ">
                                    Sản phẩm mới thêm
                                </h6>
                                <?php 
                                if($numGiohang >0){
                                ?>
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
                                                <a class="dropdown-item d-flex align-items-center latest-product__item"
                                                    href="#" style="margin-bottom:0px">
                                                    <div class="latest-product__item__pic" style="margin-right:10px">
                                                        <img src="admin/modules/quanlysanpham/uploads/<?php echo $value["image"]?>"
                                                            alt="" style="width:70px;height:70px" />
                                                    </div>
                                                    <div class="latest-product__item__text" style="width: 150px;">
                                                        <h6 style="font-size:13px;margin-bottom:0px;">
                                                            <?php echo $value["name"]?>
                                                        </h6>
                                                        <span
                                                            style="font-size:13px"><?php echo number_format($value["price"]). '' .'vnđ';$tong = $value["num"]*$value["price"];$tongtien += $tong;?></span>
                                                        <div class="dem"
                                                            style="padding-left: 10px;width: 40px; margin:0">
                                                            x<?php echo $value["num"]; ?>
                                                        </div>
                                                    </div>
                                                    <div class="dc-actions" style="z-index: 5;margin-top: 10px;">
                                                        <button>
                                                            <i class="fa fa-close"
                                                                onclick="deleteCart(<?php echo $key?>)"></i>
                                                        </button>
                                                    </div>
                                                </a>
                                                <?php
                                                }                                
                                            ?>
                                            </div>
                                        </div>
                                        <div class="dc-item py-3">
                                            <span class="subtotal-text">Tổng tiền</span>
                                            <span
                                                class="subtotal-amount"><?php echo number_format($tongtien). '' . 'vnđ'?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                <?php
                                } else {
                                    echo'<div class="dc-header text-center" style=" padding:10px;"><h6 class="heading heading-6 strong-700">Giỏ hàng trống!</h6></div>';
                                }
                                ?>
                                <div class="py-2 text-center dc-btn" style="border-top:1px solid rgba(0,0,0,.05);">
                                    <ul class="inline-links inline-links--style-3">
                                        <li class="pr-3">
                                            <a href="giohang.php"
                                                class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 hov-bounce hov-shaddow">
                                                <i class="fa fa-shopping-cart"></i> Xem giỏ hàng
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="seperate-line"></div>

        </div>
    </header>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <?php 
        $dm = new sanpham();
    ?>
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>DANH MỤC</span>
                        </div>
                        <form action="search.php" method="post">
                            <ul style="background: #ffffff">
                                <li>
                                    <a href="#"> Hoa chủ đề</a>
                                    <ul class="header__menu__dropdown">
                                        <div class="row">
                                            <?php
                                            if (@$dm->chude()):
                                            foreach ($dm->chude() as $row):
                                                $_GET['key'] = "";
                                                $_GET['type'] = "";
                                                $_GET['typeflower'] ="";
                                        ?>
                                            <div class="col-md-4">
                                                <li><a
                                                        href="shop.php<?php echo $dm->hrefdanhsachsanpham('dsSP', $row['id_theme'],'','','','', '1',''); ?>">
                                                        <?php echo $row['name_theme']; ?></a>
                                                </li>
                                            </div>
                                            <?php
                                            endforeach;
                                            endif;
                                        ?>
                                        </div>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"> Loại hoa</a>
                                    <ul class="header__menu__dropdown">
                                        <div class="row">
                                            <?php
                                            if (@$dm->loaihoa()):
                                            foreach ($dm->loaihoa() as $row):
                                        ?>
                                            <div class="col-md-4">
                                                <li><a
                                                        href="shop.php<?php echo $dm->hrefdanhsachsanpham('dsSP','','', $row['id_typeflower'],'','', '1',''); ?>">
                                                        <?php echo $row['name_typeflower']; ?></a>
                                                </li>
                                            </div>
                                            <?php
                                            endforeach;
                                            endif;
                                        ?>
                                        </div>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"> Loại sản phẩm</a>
                                    <ul class="header__menu__dropdown">
                                        <div class="row">
                                            <?php
                                            if (@$dm->loaisp()):
                                            foreach ($dm->loaisp() as $row):
                                        ?>
                                            <div class="col-md-4">
                                                <li><a
                                                        href="shop.php<?php echo $dm->hrefdanhsachsanpham('dsSP','', $row['id_type'],'','','', '1',''); ?>">
                                                        <?php echo $row['name_type']; ?></a>
                                                </li>
                                            </div>
                                            <?php
                                            endforeach;
                                            endif;
                                        ?>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-lg-8">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="search.php" method="post">
                                <div class="hero__search__categories">
                                    Tất cả sản phẩm
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" name="search" placeholder="Bạn muốn tìm gì?"
                                    value="<?php if (isset($_GET['key'])) echo $_GET['key']; ?>" />
                                <button type="submit" class="site-btn">
                                    <img src="img/banner/search.png" alt="" />
                                </button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0364693924</h5>
                                <span>Phục vụ 24/7</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <div class="header__extendlink">
        <div class="header__extendlink__item peace-shop">
            <a href="" target="_blank" title="Peace shop">
                <i class="ic-sticky-peace"></i>
                <span>Câu hỏi<br>thường gặp</span>
            </a>
        </div>
        <div class="header__extendlink__item lienhe">
            <a href="" target="_blank" title="lienhe">
                <i class="ic-sticky-lienhe"></i>
                <span>Chăm sóc <br> khách hàng</span>
            </a>
        </div>
        <div class="header__extendlink__item danhgia">
            <a href="" target="_blank" title="danh gia">
                <i class="ic-sticky-danhgia"></i>
                <span>Feedback</span>
            </a>
        </div>
        <div class="header__extendlink__item thuvienanh">
            <a href="bosuutap.php" target="_blank" title="thu vien anh">
                <i class="ic-sticky-thuvienanh"></i>
                <span>Bộ sưu <br> tập hoa</span>
            </a>
        </div>
    </div>