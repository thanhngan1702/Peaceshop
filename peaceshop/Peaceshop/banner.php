<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Peace Shop</h2>
                    <?php
$row = $chitiet_sp->row_SanPham($_GET['id']);
?>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Trang chủ</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>