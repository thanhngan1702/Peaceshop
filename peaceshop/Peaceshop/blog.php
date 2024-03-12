<?php
include 'header.php';
$cnxh = new loadcnxh();
?>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/banner/ttcn.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Tn tức - Cẩm nang</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Trang chủ </a>
                        <span>Tin tức - Cẩm nang</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="blog__sidebar__item">
                        <div class="container-xl">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title-1 clearfix">
                                        <h3 class="heading-5 strong-700 mb-0 float-left text-dark "
                                            style="margin-top: 55px;">
                                            <span class="mr-4"> Hagtags </span>
                                        </h3>
                                    </div>
                                    <div class="blog__sidebar__item__tags">
                                        <?php
                                            $tbCnxh = $cnxh->table_hagtag();
                                            foreach ($tbCnxh as $row ):
                                        ?>
                                        <a href="#">#<?php echo $row['hagtag_trend']?></a>
                                        <?php
                                            endforeach
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog__sidebar__item">
                        <div class="container-xl">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title-1 clearfix">
                                        <h3 class="heading-5 strong-700 mb-0 float-left text-dark "
                                            style="margin-top: 55px;">
                                            <span class="mr-4"> Tin tức - cẩm nang mới </span>
                                        </h3>
                                    </div>
                                    <div class="blog__sidebar__recent">
                                        <?php
                                            $tbCnxh = $cnxh->table_new();
                                            foreach ($tbCnxh as $row ):
                                        ?>
                                        <a href="#" class="blog__sidebar__recent__item">
                                            <div class="blog__sidebar__recent__item__pic">
                                                <img src="admin/modules/quanlycnxh/uploads/<?php echo $row['image_trend'] ?>"
                                                    alt="" style="width:80px; height:70px">
                                            </div>
                                            <div class="blog__sidebar__recent__item__text">
                                                <h6><?php echo $row['name_trend'] ?></h6>
                                                <span> Ngày thêm: <?php echo $row['ngaythem'] ?></span>
                                            </div>
                                        </a>
                                        <?php 
                                            endforeach
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7" style="border:1px solid #efefef; padding:10px">
                <div class="filter__item clearfix">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span>
                                        <?php $sl = $cnxh->table_Cnxh();
                                                        if($sl != ''){
                                                            $count_sl = count($sl);
                                                            echo $count_sl;
                                                        }else{
                                                            echo 0;
                                                        }
                                                    ?>
                                    </span> tin tức - cẩm nang </h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-lg-12" style="margin-bottom:30px; margin-top:10px;">
                    <div class="row">
                        <?php
                            $tbCnxh = $cnxh->table_Cnxh();
                            foreach ($tbCnxh as $row ):
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="admin/modules/quanlycnxh/uploads/<?php echo $row['image_trend'] ?>"
                                        alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Ngày thêm: <?php echo $row['ngaythem'] ?>
                                        </li>
                                    </ul>
                                    <h5><a
                                            href="chitietcnxh.php?id=<?=$row['id_trend']?>"><?php echo $row['name_trend'] ?></a>
                                    </h5>
                                    <p><?php echo $row['mota'] ?></p>
                                    <a href="chitietcnxh.php?id=<?=$row['id_trend']?>" class="blog__btn">Đọc thêm <span
                                            class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <?php
                            endforeach;
                        ?>
                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<!-- Footer Section Begin -->
<?php
include 'footer.php';
?>