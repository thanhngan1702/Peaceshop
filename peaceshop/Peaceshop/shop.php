<?php 
include 'header.php';
    $shop = new sanpham();
?>
<!-- Hero Section End -->
<!-- Breadcrumb Section Begin -->
<?php
$banner = $sp->row_Banner('shop');
foreach ($banner as $row):
?>
<section class="breadcrumb-section set-bg" data-setbg="img/banner/<?php echo $row['image_banner']?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Peace Shop</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
endforeach;
?>
<!-- Breadcrumb Section End -->
<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <div class="container-xl">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title-1 clearfix">
                                        <h3 class="heading-5 strong-700 mb-0 float-left text-dark "
                                            style="margin-top: 55px;">
                                            <span class="mr-4">Nhóm sản phẩm</span>
                                        </h3>
                                    </div>
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="clearfix mb-0">
                                                    <a class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne"> <i class="material-icons">add</i>
                                                        Chủ đề</a>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                        <li><a
                                                                href="<?php echo $shop->hrefdanhsachsanpham('dsSP','',$_GET['type'], $_GET['typeflower'], $_GET['price'], $_GET['sx'], '1', $_GET['key']); ?>">-
                                                                &emsp;Tất cả chủ đề</a>
                                                        </li>
                                                        <?php
                                                            if (@$shop->chude()):
                                                            foreach ($shop->chude() as $row):
                                                        ?>
                                                        <li><a
                                                                href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $row['id_theme'], $_GET['type'], $_GET['typeflower'], $_GET['price'], $_GET['sx'], '1', $_GET['key']); ?>">-&emsp;
                                                                <?php echo $row['name_theme']; ?></a>
                                                        </li>
                                                        <?php
                                                            endforeach;
                                                            endif;
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <a class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo"><i class="material-icons">add</i>
                                                        Loại hoa </a>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                        <li><a
                                                                href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'],$_GET['type'],'', $_GET['price'], $_GET['sx'], '1', $_GET['key']); ?>">-&emsp;
                                                                Tất cả loại hoa</a>
                                                        </li>
                                                        <?php
                                                            if (@$shop->loaihoa()):
                                                            foreach ($shop->loaihoa() as $row):
                                                        ?>
                                                        <li><a
                                                                href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $_GET['type'], $row['id_typeflower'], $_GET['price'], $_GET['sx'], '1', $_GET['key']); ?>">-&emsp;
                                                                <?php echo $row['name_typeflower']; ?></a>
                                                        </li>
                                                        <?php
                                                            endforeach;
                                                            endif;
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h2 class="mb-0">
                                                    <a class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree"> <i
                                                            class="material-icons">add</i>Loại sản phẩm</a>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                        <li><a
                                                                href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'],'',$_GET['typeflower'], $_GET['price'], $_GET['sx'], '1', $_GET['key']); ?>">-&emsp;
                                                                Tất cả loại sản phẩm</a>
                                                        </li>
                                                        <?php
                                                        if (@$shop->loaisp()):
                                                        foreach ($shop->loaisp() as $row):
                                                        ?>
                                                        <li><a
                                                                href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $row['id_type'],$_GET['typeflower'], $_GET['price'], $_GET['sx'], '1', $_GET['key']); ?>">-&emsp;
                                                                <?php echo $row['name_type']; ?></a>
                                                        </li>
                                                        <?php
                                                    endforeach;
                                                    endif;
                                                ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__item">
                        <div class="container-xl">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title-1 clearfix">
                                        <h3 class="heading-5 strong-700 mb-0 float-left text-dark "
                                            style="margin-top: 55px;">
                                            <span class="mr-4">Sản phẩm mới</span>
                                        </h3>
                                    </div>
                                    <div class="latest-product__text">
                                        <div class="latest-product__slider owl-carousel">
                                            <div class="latest-prdouct__slider__item">
                                                <?php
                                                    $sp= new spLoadsanpham();
                                                    $tbSp1 = $sp->spMoi1();
                                                    foreach ($tbSp1 as $row1 ):
                                                ?>
                                                <a href="chitietsp.php?id=<?=$row1['id_product']?>"
                                                    class="latest-product__item">
                                                    <div class="latest-product__item__pic">
                                                        <img src="admin/modules/quanlysanpham/uploads/<?php echo $row1['image'] ?>"
                                                            alt="">
                                                    </div>
                                                    <div class="latest-product__item__text">
                                                        <h6><?php echo $row1['name_product']?></h6>
                                                        <?php 
                                                            if($sp->row_khuyenmai($row1['id_khuyenmai'])['giatri_khuyenmai']>0){
                                                                echo ' <span>';
                                                                echo number_format(($row1['price_product']) - ($row1['price_product'] * $sp->row_khuyenmai($row1['id_khuyenmai'])['giatri_khuyenmai']) / 100) . '' . 'vnđ';
                                                                echo '</span>';
                                                                echo '<del style="color:#888;font-size: 13px; margin-left:5px; font-weight:500">'; echo number_format($row1['price_product']) . '' . 'vnđ';
                                                                echo '</del><br>';
                                                            }else{
                                                                echo ' <span>';
                                                                echo number_format($row1['price_product']) . '' . 'vnđ';
                                                                echo '</span>';
                                                            }
                                                        ?>
                                                    </div>
                                                </a>
                                                <?php
                                                    endforeach;
                                                ?>
                                            </div>
                                            <div class="latest-prdouct__slider__item">
                                                <?php
                                                    $tbSp2 = $sp->spMoi2();
                                                    foreach ($tbSp2 as $row2 ):
                                                ?>
                                                <a href="chitietsp.php?id=<?=$row2['id_product']?>"
                                                    class="latest-product__item">
                                                    <div class="latest-product__item__pic">
                                                        <img src="admin/modules/quanlysanpham/uploads/<?php echo $row2['image'] ?>"
                                                            alt="">
                                                    </div>
                                                    <div class="latest-product__item__text">
                                                        <h6><?php echo $row2['name_product']?></h6>
                                                        <?php 
                                                            if($sp->row_khuyenmai($row2['id_khuyenmai'])['giatri_khuyenmai']>0){
                                                                echo ' <span>';
                                                                echo number_format(($row2['price_product']) - ($row2['price_product'] * $sp->row_khuyenmai($row2['id_khuyenmai'])['giatri_khuyenmai']) / 100) . '' . 'vnđ';
                                                                echo '</span>';
                                                                echo '<del style="color:#888;font-size: 13px; margin-left:5px; font-weight:500">'; echo number_format($row2['price_product']) . '' . 'vnđ';
                                                                echo '</del><br>';
                                                            }else{
                                                                echo ' <span>';
                                                                echo number_format($row2['price_product']) . '' . 'vnđ';
                                                                echo '</span>';
                                                            }
                                                        ?>
                                                    </div>
                                                </a>
                                                <?php
                                                    endforeach;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-7" style="border:1px solid #efefef; padding:10px">
                <div class="row">
                    <div class="col-lg-12" style="margin-bottom:30px; margin-top:10px;">
                        <div class="product-filter-group pull-right" style="margin-right:30px">
                            <div class="pull-right">
                                <div class="tutorial">
                                    <ul>
                                        <li><?php
                                                if (!empty($_GET['sx'])) {
                                                    if ($_GET['sx']=='TenGiam'){
                                                        echo 'Theo tên A-Z';
                                                    }elseif($_GET['sx']=='TenTang'){
                                                        echo 'Theo tên Z-A';
                                                    }elseif($_GET['sx']=='GiaTang'){
                                                        echo 'Theo giá tăng dần';
                                                    }elseif($_GET['sx']=='GiaGiam'){
                                                        echo 'Theo giá giảm dần';
                                                    }
                                                } else {
                                                    echo 'Không sắp xếp';
                                                }
                                            ?> <i class="fa fa-angle-down" style="margin-left:70px"></i>
                                            <ul>
                                                <li><a
                                                        href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $_GET['type'], $_GET['typeflower'], $_GET['price'],'', '1', $_GET['key']); ?>">
                                                        Không sắp xếp </a></li>
                                                <li><a
                                                        href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $_GET['type'], $_GET['typeflower'], $_GET['price'],'GiaGiam', '1', $_GET['key']); ?>">
                                                        Theo giá giảm dần</a></li>
                                                <li><a
                                                        href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $_GET['type'], $_GET['typeflower'], $_GET['price'],'GiaTang', '1', $_GET['key']); ?>">
                                                        Theo giá tăng dần</a></li>
                                                <li><a
                                                        href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $_GET['type'], $_GET['typeflower'], $_GET['price'],'TenGiam', '1', $_GET['key']); ?>">
                                                        Theo tên A-Z</a></li>
                                                <li><a
                                                        href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $_GET['type'], $_GET['typeflower'], $_GET['price'],'TenTang', '1', $_GET['key']); ?>">
                                                        Theo tên Z-A</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown pull-right" style="margin-right:15px">
                                <div class="tutorial">
                                    <ul>
                                        <li><?php
                                                if (!empty($_GET['price'])) {
                                                    if ($_GET['price']=='khuyenmai'){
                                                        echo 'Có khuyến mãi';
                                                    }elseif ($_GET['price']=='duoi100'){
                                                        echo ' &lt; 100.000đ';
                                                    }elseif($_GET['price']=='100-300'){
                                                        echo '100.000đ - 300.000đ';
                                                    }elseif($_GET['price']=='300-800'){
                                                        echo '300.000đ - 800.000đ';
                                                    }elseif($_GET['price']=='800-1500'){
                                                        echo '800.000đ - 1.500.000đ';
                                                    }elseif($_GET['price']=='hon1500'){
                                                        echo '&gt; 1.500.000đ';
                                                    }
                                                } else {
                                                    echo 'Lọc theo giá';
                                                }
                                            ?><i class="fa fa-angle-down" style="margin-left:70px"></i>
                                            <ul>
                                                <li><a
                                                        href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $_GET['type'], $_GET['typeflower'],'', $_GET['sx'], '1', $_GET['key']); ?>">
                                                        Lọc theo giá </a></li>
                                                <li><a
                                                        href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $_GET['type'], $_GET['typeflower'],'khuyenmai', $_GET['sx'], '1', $_GET['key']); ?>">
                                                        Có khuyến mãi </a></li>
                                                <li><a
                                                        href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $_GET['type'], $_GET['typeflower'],'duoi100', $_GET['sx'], '1', $_GET['key']); ?>">
                                                        &lt; 100.000đ </a></li>
                                                <li><a
                                                        href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $_GET['type'], $_GET['typeflower'],'100-300', $_GET['sx'], '1', $_GET['key']); ?>">
                                                        100.000đ - 300.000đ </a></li>
                                                <li><a
                                                        href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $_GET['type'], $_GET['typeflower'],'300-800', $_GET['sx'], '1', $_GET['key']); ?>">
                                                        300.000đ - 800.000đ </a></li>
                                                <li><a
                                                        href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $_GET['type'], $_GET['typeflower'],'800-1500', $_GET['sx'], '1', $_GET['key']); ?>">
                                                        800.000đ - 1.500.000đ </a></li>
                                                <li><a
                                                        href="<?php echo $shop->hrefdanhsachsanpham('dsSP', $_GET['theme'], $_GET['type'], $_GET['typeflower'],'hon1500', $_GET['sx'], '1', $_GET['key']); ?>">
                                                        &gt; 1.500.000đ </a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter__item clearfix">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span><?php $sl = $shop->danhsachsanpham();
                                if($sl != ''){
                                $count_sl = count($sl);
                                echo $count_sl;
                                }else{
                                    echo 0;
                                }
                                ?>
                                    </span> sản phẩm </h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                        </div>
                    </div>
                </div>
                <?php if(isset($_GET['ac'])): ?>
                <?php
                    if($_GET['ac']=='dsSP'){
                        require './danhsachsanpham.php';
                    }
                    ?>
                <?php else:?>
                <?php
                    require './danhsachsanpham.php';
                    ?>
                <?php endif;
                ?>
            </div>
        </div>
</section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<?php 
include 'footer.php';
?>