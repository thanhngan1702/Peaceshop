<?php
include "header.php"
?>
<div style="background: #eaf7ee !important;padding-bottom:80px">
    <!-- Breadcrumb Section Begin -->
    <!-- Breadcrumb Section End -->
    <?php
$banner = $sp->row_Banner('lienhe');
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
                            <span>Liên hệ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
endforeach;
?>
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center ">
                    <div class="contact__widget nho">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>0364693924</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center ">
                    <div class="contact__widget nho">
                        <span class="icon_pin_alt"></span>
                        <h4>Địa chỉ</h4>
                        <p>56, Huỳnh Văn Nghê, Đà Nẵng</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center ">
                    <div class="contact__widget nho">
                        <span class="icon_clock_alt"></span>
                        <h4>Thời gian mở cửa</h4>
                        <p> Từ 10:00 sáng đến 23:00 tối</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center ">
                    <div class="contact__widget nho">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>peaceshop2002@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="container">

        <div class="row">
            <div class="map col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.6488622772044!2d108.24777801464175!3d15.979703288936292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314211b86e5d31e5%3A0x7dda379e8bba5762!2zNTYgSHXhu7NuaCBWxINuIE5naOG7hywgSG_DoCBI4bqjaSwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1636399432562!5m2!1svi!2s"
                    width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="map-inside">
                    <i class="icon_pin"></i>
                    <div class="inside-widget">
                        <h4>Đà Nẵng</h4>
                        <ul>
                            <li>Phone: +246123456</li>
                            <li>Địa chỉ: 56 đường Huỳnh Văn Nghệ</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Map End -->
            <?php
            $error = '';
            $name = '';
            $email = '';
            $message = '';
            $conn = mysqli_connect('localhost','root','','peaceshop');
            mysqli_set_charset($conn,'utf8');
            function clean_text($string)
            {
	            $string = trim($string);
	            $string = stripslashes($string);
	            $string = htmlspecialchars($string);
	            return $string;
            }
            
            if(isset($_POST["submit"])){
        	    if(empty($_POST["name"])){
        		    $error .= '<p><label class="text-danger">Vui long nhập tên!</label></p>';
        	    }else{
        		    $name = clean_text($_POST["name"]);
        	    }
        	    if(empty($_POST["email"])){
        		    $error .= '<p><label class="text-danger">Vui long nhập email!</label></p>';
        	        
                }else{
        		    $email = clean_text($_POST["email"]);
        		    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        			    $error .= '<p><label class="text-danger">Sai định dạng</label></p>';
        		    }
        	    }
        	    if(empty($_POST["message"])){
        		    $error .= '<p><label class="text-danger">Vui lòng nhập nội dung!</label></p>';
        	    }else{
        		    $message = clean_text($_POST["message"]);
        	    }
        	    if($error == ''){
                    $ngaygui= date('Y/m/d h:i:s');
                    $query = mysqli_query($conn,"INSERT INTO lienhe (name_lienhe,gmail_lienhe,noidung,ngaygui,trangthai)VALUES('$name','$email','$message','$ngaygui','0')");

						//An HTML or plain text message body
		        if($query){
			        $error = '<div class="alert alert-success"><strong>Cảm ơn bạn đã liên hê!.</strong> Chúng tôi sẽ trả lời sớm nhất có thể</div>';
		        }else{
			        $error = '<div class="alert alert-danger"><strong>Lỗi!</strong> Vui lòng thử lại</div>';
		        }
		        $name = '';
		        $email = '';
		        $message = '';
	        }
        }
        ?>

            <!-- Contact Form Begin -->
            <div class="contact-form  col-md-6 nho">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact__form__title">
                                <h2>Liên Hệ Với Chúng Tôi</h2>
                            </div>
                        </div>
                    </div>
                    <?php echo $error; ?>
                    <form action="lienhe.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Họ và tên">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="text" name="email" value="<?php echo $email; ?>"
                                    placeholder="Địa chỉ Email">
                            </div>
                            <div class="col-lg-12 text-center">
                                <textarea name="message" value="<?php echo $message; ?>"
                                    placeholder="Nhập tin nhắn"></textarea>
                                <button type="submit" name="submit" class="site-btn1"> Gửi </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Form End -->

<?php
include "footer.php"
?>