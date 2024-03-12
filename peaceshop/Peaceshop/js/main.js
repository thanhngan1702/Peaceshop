/*  ---------------------------------------------------
    Template Name: Ogani
    Description:  Ogani eCommerce  HTML Template
    Author: Colorlib
    Author URI: https://colorlib.com
    Version: 1.0
    Created: Colorlib
---------------------------------------------------------  */

"use strict";

(function ($) {
  /*------------------
        Preloader
    --------------------*/
  $(window).on("load", function () {
    $(".loader").fadeOut();
    $("#preloder").delay(200).fadeOut("slow");

    /*------------------
            Gallery filter
        --------------------*/
    $(".featured__controls li").on("click", function () {
      $(".featured__controls li").removeClass("active");
      $(this).addClass("active");
    });
    if ($(".featured__filter").length > 0) {
      var containerEl = document.querySelector(".featured__filter");
      var mixer = mixitup(containerEl);
    }
  });

  /*------------------
        Background Set
    --------------------*/
  $(".set-bg").each(function () {
    var bg = $(this).data("setbg");
    $(this).css("background-image", "url(" + bg + ")");
  });

  //Humberger Menu
  $(".humberger__open").on("click", function () {
    $(".humberger__menu__wrapper").addClass("show__humberger__menu__wrapper");
    $(".humberger__menu__overlay").addClass("active");
    $("body").addClass("over_hid");
  });

  $(".humberger__menu__overlay").on("click", function () {
    $(".humberger__menu__wrapper").removeClass(
      "show__humberger__menu__wrapper"
    );
    $(".humberger__menu__overlay").removeClass("active");
    $("body").removeClass("over_hid");
  });

  /*------------------
		Navigation
	--------------------*/
  $(".mobile-menu").slicknav({
    prependTo: "#mobile-menu-wrap",
    allowParentLinks: true,
  });

  /*-----------------------
        Categories Slider
    ------------------------*/
  $(".categories__slider").owlCarousel({
    loop: true,
    margin: 0,
    items: 4,
    dots: false,
    nav: true,
    navText: [
      "<span class='fa fa-angle-left'><span/>",
      "<span class='fa fa-angle-right'><span/>",
    ],
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    smartSpeed: 1200,
    autoHeight: false,
    autoplay: true,
    responsive: {
      0: {
        items: 1,
      },

      480: {
        items: 2,
      },

      768: {
        items: 3,
      },

      992: {
        items: 4,
      },
    },
  });

  $(".hero__categories__all").on("click", function () {
    $(".hero__categories ul").slideToggle(400);
  });

  /*--------------------------
        Latest Product Slider
    ----------------------------*/
  $(".latest-product__slider").owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    dots: false,
    nav: true,
    navText: [
      "<span class='fa fa-angle-left'><span/>",
      "<span class='fa fa-angle-right'><span/>",
    ],
    smartSpeed: 1200,
    autoHeight: false,
    autoplay: true,
  });

  /*-----------------------------
        Product Discount Slider
    -------------------------------*/
  $(".product__discount__slider").owlCarousel({
    loop: true,
    margin: 0,
    items: 3,
    dots: true,
    smartSpeed: 1200,
    autoHeight: false,
    autoplay: true,
    responsive: {
      320: {
        items: 1,
      },

      480: {
        items: 2,
      },

      768: {
        items: 2,
      },

      992: {
        items: 3,
      },
    },
  });

  /*---------------------------------
        Product Details Pic Slider
    ----------------------------------*/
  $(".product__details__pic__slider").owlCarousel({
    loop: true,
    margin: 20,
    items: 4,
    dots: true,
    smartSpeed: 1200,
    autoHeight: false,
    autoplay: true,
  });

  /*-----------------------
		Price Range Slider
	------------------------ */
  var rangeSlider = $(".price-range"),
    minamount = $("#minamount"),
    maxamount = $("#maxamount"),
    minPrice = rangeSlider.data("min"),
    maxPrice = rangeSlider.data("max");
  rangeSlider.slider({
    range: true,
    min: minPrice,
    max: maxPrice,
    values: [minPrice, maxPrice],
    slide: function (event, ui) {
      minamount.val("$" + ui.values[0]);
      maxamount.val("$" + ui.values[1]);
    },
  });
  minamount.val("$" + rangeSlider.slider("values", 0));
  maxamount.val("$" + rangeSlider.slider("values", 1));

  /*--------------------------
        Select
    ----------------------------*/
  $("select").niceSelect();

  /*------------------
		Single Product
	--------------------*/
  $(".product__details__pic__slider img").on("click", function () {
    var imgurl = $(this).data("imgbigurl");
    var bigImg = $(".product__details__pic__item--large").attr("src");
    if (imgurl != bigImg) {
      $(".product__details__pic__item--large").attr({
        src: imgurl,
      });
    }
  });

  /*-------------------
		Quantity change
	--------------------- */
  var proQty = $(".pro-qty");
  proQty.prepend('<span class="dec qtybtn">-</span>');
  proQty.append('<span class="inc qtybtn">+</span>');
  proQty.on("click", ".qtybtn", function () {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();
    if ($button.hasClass("inc")) {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 0;
      }
    }
    $button.parent().find("input").val(newVal);
  });
})(jQuery);

(function () {
  $("#cart").on("click", function () {
    $(".shopping-cart").fadeToggle("fast");
  });
})();

jQuery(document).ready(function () {
  $("input[name=payment]").click(function () {
    if ($(this).val() == "cod") {
      $(".info-bank").addClass("hidden");
      $("button[name=cod]").removeClass("hidden");
      $("button[name=paymentvisa]").addClass("hidden");
      $("button[name=paymentatm]").addClass("hidden");
      $("button[name=transfer]").addClass("hidden");
    }
    if ($(this).val() == "onepay_visa") {
      $(".info-bank").addClass("hidden");
      $("button[name=cod]").addClass("hidden");
      $("button[name=paymentvisa]").removeClass("hidden");
      $("button[name=paymentatm]").addClass("hidden");
      $("button[name=transfer]").addClass("hidden");
    }
    if ($(this).val() == "onepay_atm") {
      $(".info-bank").addClass("hidden");
      $("button[name=cod]").addClass("hidden");
      $("button[name=paymentvisa]").addClass("hidden");
      $("button[name=paymentatm]").removeClass("hidden");
      $("button[name=transfer]").addClass("hidden");
    }
    if ($(this).val() == "transfer") {
      $(".info-bank").removeClass("hidden");
      $("button[name=cod]").addClass("hidden");
      $("button[name=paymentvisa]").addClass("hidden");
      $("button[name=paymentatm]").addClass("hidden");
      $("button[name=transfer]").removeClass("hidden");
    }
  });
  $("[name=receive_type]").click(function () {
    $(this).prop("checked", true);
    $(".home-delivery").hide("slow");
    $("#blk-" + $(this).val()).show("slow");
    $(".confirm_cod").prop("disabled", false);
    if ($(this).val() == "store") {
      $(this).prop("checked", true);
      $(".shipping_price").hide();
      $("p .have_ship").addClass("hidden");
      $("p .no_ship").removeClass("hidden");
      $("#checkoutform").removeData("validator");
      var store_address = $("#store_info").attr("data-address");
      $("#checkout-address").val(store_address);
      validate_store();
    } else {
      $("p .have_ship").removeClass("hidden");
      $("p .no_ship").addClass("hidden");
      $(".shipping_price").show();
      $("#checkoutform").removeData("validator");
      validate_ship();
    }
  });

  $("[name=delivery_type]").click(function () {
    $(".time-delivery").hide("slow");
    $("#time-" + $(this).val()).show("slow");
  });
});

function validate_checkout() {
  var receive_type = $("[name=receive_type]").val();
  if (receive_type == "ship") {
    $("#checkoutform").validate({
      ignore: "",
      ignore: 'input[type="hidden"]',
      rules: {
        Name: {
          required: true,
        },
        email: {
          required: true,
          email: true,
        },
        Phone: {
          number: true,
          minlength: 10,
          maxlength: 16,
        },
        fullname: {
          required: true,
        },
        address_type_id: {
          required: true,
        },
        city_id: {
          required: true,
        },
        ship_district: {
          required: true,
        },
        ship_ward: {
          required: true,
        },
        ship_address: {
          required: true,
        },
        customer_phone: {
          required: true,
          number: true,
          minlength: 10,
          maxlength: 16,
        },
        order_delivery_time: {
          required: true,
        },
      },
      messages: {
        Name: {
          required: "Vui lòng nhập họ tên!",
        },
        email: {
          required: "Vui lòng nhập email!",
          email: "Email không hợp lệ!",
        },
        Phone: {
          number: "Điện thoại là số!",
          minlength: "Số điện thoại phải lớn hơn 9",
          maxlength: "Số điện thoại phải nhỏ hơn 16",
        },
        fullname: {
          required: "Vui lòng điền tên người nhận!",
        },
        address_type_id: {
          required: "Vui lòng chọn loại địa chỉ!",
        },
        city_id: {
          required: "Vui lòng chọn Tỉnh/Thành Phố!",
        },
        ship_district: {
          required: "Vui lòng chọn Quận/Huyện!",
        },
        ship_ward: {
          required: "Vui lòng chọn Phường/Xã!",
        },
        ship_address: {
          required: "Vui lòng nhập địa chỉ cho nhân viên giao hàng!",
        },
        customer_phone: {
          required: "Vui lòng điền số điện thoại người nhận",
          number: "Điện thoại là số!",
          minlength: "Số điện thoại phải lớn hơn 9",
          maxlength: "Số điện thoại phải nhỏ hơn 16",
        },
        order_delivery_time: {
          required: "Bạn chưa chọn thời gian giao hàng!",
        },
      },
      errorPlacement: function (error, element) {
        var name = $(element).attr("name");
        error.appendTo($("#" + name + "_validate"));
        // $('.text-phone-error').html('');
        // $('#customer_phone_validate').html('');
      },
      success: function (label) {
        $(".confirm_cod").prop("disabled", false);
      },
    });
  } else {
    $("#checkoutform").validate({
      ignore: null,
      ignore: 'input[type="hidden"]',
      rules: {
        Name: {
          required: true,
        },
        Phone: {
          required: true,
        },
        email: {
          required: true,
        },
      },
      messages: {
        Name: {
          required: "Vui lòng điền tên người mua hàng!",
        },
        Phone: {
          required: "Vui lòng điền Sdt người mua hàng!",
        },
        email: {
          required: "Vui lòng điền email người mua hàng!",
        },
      },
      errorPlacement: function (error, element) {
        var name = $(element).attr("name");
        error.appendTo($("#" + name + "_validate"));
      },
      success: function (label) {
        $(".confirm_cod").prop("disabled", false);
      },
    });
  }
}
