<!-- Footer Section Begin -->
<footer>
    <div class="seperate-line"></div>
    <div class="container">
        <div class="row">
            <div class="mouse button_scroll2top" onclick="page_scroll2top()">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel">
                        <span class="fa fa-angle-up" size="5x"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="img/banner/logo.png" alt=""
                                style="height: 50px;width:310px" /></a>
                    </div>
                    <ul>
                        <li>Địa chỉ: 56 Huỳnh Văn Nghệ, Đà Nẵng</li>
                        <li>Phone: 0364693924</li>
                        <li>Email: Peaceshop@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Liên kết trang web</h6>
                    <ul>
                        <li><a href="#">Về chúng tôi</a></li>
                        <li><a href="#">Dối tác tiêu biểu</a></li>
                        <li><a href="#">Cầu hôn cùng chúng tôi</a></li>
                        <li><a href="#">Doanh nghiệp</a></li>
                        <li><a href="#">Hướng dẫn chăm sóc</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Liên hệ với chúng tôi</a></li>
                        <li><a href="#">Câu hỏi thường gặp</a></li>
                        <li><a href="#">Phương thức thanh toán</a></li>
                        <li><a href="#">Lưu ý chính</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <li><a href="#">Điều khoản chi tiết</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Đồng hành cùng chúng tôi<i></i></h6>
                    <p>
                        Đăng kí để nhận được nhiều ưu đãi.
                    </p>
                    <form action="#">
                        <input type="text" placeholder="Nhập email của bạn" />
                        <button type="submit" class="site-btn">Đăng kí</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="seperate-line" style="margin-bottom: 0px"></div>

    <div class="row" style="margin-left: 50px; margin-right: 50px">
        <div class="col-lg-12">
            <div class="footer__copyright">
                <div class="footer__copyright__text">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | This template is made with
                        <i class="fa fa-heart" aria-hidden="true"></i> by
                        <a href="index.php" target="_blank">Peacseshop</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
                <div class="footer__copyright__payment">
                    <img src="img/payment-item.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
$(window).scroll(function() {
    if ($(window).scrollTop() >= 10) {
        $(".button_scroll2top").show();
    } else {
        $(".button_scroll2top").hide();
    }
});

function page_scroll2top() {
    $("html,body").animate({
            scrollTop: 0,
        },
        "fast"
    );
}
</script>
<script type="text/javascript">
var counter = 1;
setInterval(function() {
    document.getElementById("radio" + counter).checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }
}, 5000);
</script>
<script>
$(document).ready(function() {
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function() {
        $(this).siblings(".card-header").find(".btn i").html("remove");
        $(this).prev(".card-header").addClass("highlight");
    });

    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function() {
        $(this).parent().find(".card-header .btn i").html("remove");
    }).on('hide.bs.collapse', function() {
        $(this).parent().find(".card-header .btn i").html("add");
    });
});
</script>
<script>
function themvaogiohang(id) {
    num = $("#num").val();
    $.post('slgiohang.php', {
            'id': id,
            'num': num
        },
        function(data) {
            img = $("#anh").attr("src");
            $("#nameCart").text($("#name").text());
            $("#priceCart").text($("#price").text());
            $("#numCart").text(num);

            $("#imgCart").attr({
                'src': img,
            });
            $('#modalBasket').modal();
            $("#listNum").load("http://localhost/DACS2/giohang.php #listNumtb");

            $('#numGiohang').text(data);
        });
}

function muangay(id) {
    num = $("#num").val();
    $.post('slgiohang.php', {
            'id': id,
            'num': num
        },
        function(data) {
            img = $("#anh").attr("src");
            $("#nameCart").text($("#name").text());
            $("#priceCart").text($("#price").text());
            $("#numCart").text(num);

            $("#imgCart").attr({
                'src': img,
            });
            window.location.replace("http://localhost/DACS2/giohang.php");
            $('#numGiohang').text(data);
        });
}

function themvaogiohangindex(id) {
    num = 1;
    $.post('slgiohang.php', {
            'id': id,
            'num': num
        },
        function(data) {
            $("#numCart").text(num);
            alert("Thêm sản phẩm vào giỏ hàng thàng công!");
            $('#numGiohang').text(data);
            $("#listNum").load("http://localhost/DACS2/index.php #listNumtb");


        });
}

function updateCart(id) {
    num = $("#num_" + id).val();
    $.post('updateCart.php', {
        'id': id,
        'num': num
    }, function(data) {
        $("#listCarthd").load("http://localhost/DACS2/giohang.php #listCarthdtb");
        $("#listCart").load("http://localhost/DACS2/giohang.php #listCarttb");

    });
}

function deleteCart(id) {
    $.post('updateCart.php', {
        'id': id,
        'num': 0
    }, function(data) {
        $("#listNum").load("http://localhost/DACS2/giohang.php #listNumtb");
        $("#listCart").load("http://localhost/DACS2/giohang.php #listCarttb");
        $("#index").load("http://localhost/DACS2/giohang.php #indextb");


    });
}
</script>
<section>

    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="modalBasket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-header">
                    <div class=" text-success text-center">
                        <i class="fa fa-check"></i>
                        <h4>Đã thêm vào giỏ hàng.</h4>
                    </div>
                </div>
                <div class="modal-body mx-3 pt-4 pb-0">
                    <div class="media mb-3">
                        <img class="d-flex z-depth-1 rounded mr-3" width="70px" src="" id="imgCart" alt="Sample">
                        <div class="media-body row" style="margin-top: 24px;">
                            <div class="col-md-4">
                                <h5 id="nameCart"></h5>
                            </div>
                            <div class="col-md-4">
                                <p class="mb-0">Giá: <span id="priceCart"></span> </p class="mb-0">
                            </div>
                            <div class="col-md-4">
                                <p class="mb-0">Số lượng: <span id="numCart"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center py-4">
                    <a href=""
                        class="btn btn-styled btn-base-1 btn-outline mb-3 mb-sm-0 hov-bounce hov-shaddow shopping">Tiếp
                        tục mua sắm</a>
                    <a href="giohang.php" class="btn btn-styled btn-base-1 mb-3 mb-sm-0 hov-bounce hov-shaddow">Đến
                        trang thanh
                        toán</a>
                </div>
            </div>
        </div>
    </div>

</section>

<!--Section: Block Content-->
<!--Section: Block Content-->
<script src="admin/vendor/jquery/jquery.min.js"></script>
<script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="admin/js/sb-admin-2.min.js"></script>
<script>
$(document).ready(function() {
    $("#myModal1").modal();
});
</script>
<script>
$(document).ready(function() {
    $("#i-will-receive").change(function() {
        var receiverName = $(
            "#checkout-fullname");
        var receiverPhone = $(
            "#checkout-phone");
        var receiverPhone2 = $(
            "#customer_phone_2");
        if (!$(this).is(":checked")) {
            $(receiverName).val("");
            $(receiverPhone).val("");
            $(receiverPhone2).val("");
            return;
        }
        if ($("#login_type").val() ===
            "userlogin") {
            buyerName = $("#CName");
            buyerPhone = $("#CPhone");
            buyerPhone2 = $("#checkout-phone2");
        } else {
            buyerName = $("#Name");
            buyerPhone = $("#Phone");
            buyerPhone2 = $("#checkout-phone2");
        }
        var buyerNameVal = $(buyerName).val();
        var buyerPhoneVal = $(buyerPhone).val();
        var buyerPhone2Val = $(buyerPhone2)
            .val();
        if (buyerNameVal.trim() == "" ||
            buyerPhoneVal.trim() == "") {
            alert(
                "Bạn chưa điền thông tin mua hàng"
            );
            $("#i-will-receive").prop("checked",
                false);
            return;
        }
        $(receiverName).val(buyerNameVal);
        $(receiverPhone).val(buyerPhoneVal);
        $(receiverPhone2).val(buyerPhone2Val);
    });
});
</script>
<script>
$(document).ready(function() {
    console.log("ready!");
    let url = window.location.pathname;
    if (url.includes("index")) {
        $(document).find(".menu-active-index").addClass("active");
    }
    if (url.includes("shop")) {
        $(document).find(".menu-active-shop").addClass("active");
    }
    if (url.includes("bosuutap")) {
        $(document).find(".menu-active-uudai").addClass("active");
    }
    if (url.includes("about")) {
        $(document).find(".menu-active-peaceshop").addClass("active");
    }
    if (url.includes("blog")) {
        $(document).find(".menu-active-blog").addClass("active");
    }
    if (url.includes("lienhe")) {
        $(document).find(".menu-active-contact").addClass("active");
    }
    if (url.includes("chitietsp")) {
        $(document).find(".menu-active-shop").addClass("active");
    }
    if (url.includes("service")) {
        $(document).find(".menu-active-service").addClass("active");
    }
});
</script>


</body>

</html>