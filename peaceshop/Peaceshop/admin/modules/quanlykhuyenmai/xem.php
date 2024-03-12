<div class="container-fluid ">
    <h3>Sửa khuyến mãi</h3>
</div>
<?php
$row = $khuyenmai->row_Khuyenmai($_GET['id']);
?>
<div class="card shadow mb-4">
    <div class="widget-box">

        <div class="card-body">
            <div class="table-reponsive">
                <div class="widget-box">
                    <div class="widget-title">
                        <a href="index.php?quanly=khuyenmai&ac=lietke" class="btn btn-success">
                            <i class="icon-plus"></i> Liệt kê khuyến mãi
                        </a>
                    </div>
                    <hr>

                    <div class="widget-content nopadding">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <h5>&nbsp;</h5>
                            <div class="form-group">
                                <label for>Tên khuyến mãi:<span name="tenkm"><?php echo $row['ten_khuyenmai'] ?></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for>Mã khuyến mãi: <span name="makm"><?php echo $row['ma_khuyenmai'] ?></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for>Loại khuyến mãi: <?php echo $row['loai_khuyenmai'] ?> </label>

                            </div>
                            <div class="form-group">
                                <label for>Giá trị khuyến mãi:
                                    <span name="gtrikm"><?php echo $row['giatri_khuyenmai'].'%' ?></span>
                                </label>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Trạng thái: <?php if ($row['trangthai'] == 1){echo "Hiện";}else { echo "Ẩn";}
                                 ?></label>
                            </div>
                            <h5>&nbsp;</h5>
                            <div class="form-group">
                                <div class="controls">
                                    <input type="submit" name="guima" value="Gửi mã"
                                        class="btn btn-primary  btn-sm border-left-info">
                                    <a href="index.php?quanly=khuyenmai&ac=lietke"
                                        class="btn btn-danger  btn-sm border-left-info">Hủy bỏ</a>
                                </div>
                            </div>
                            <h5>&nbsp;</h5>
                        </form>
                        <?php
                include "PHPMailer/src/PHPMailer.php";
                include "PHPMailer/src/Exception.php";
                include "PHPMailer/src/OAuth.php";
                include "PHPMailer/src/POP3.php";
                include "PHPMailer/src/SMTP.php";
                
                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\Exception;
                use PHPMailer\PHPMailer\SMTP;


                    if(isset($_POST['guima'])){

                        $tenkm = $row['ten_khuyenmai'];
                        $makm = $row['ma_khuyenmai'] ;
                        $gtrikm = $row['giatri_khuyenmai'];
                        
                        $mail = new PHPMailer(true);
                        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username = 'peaceshop2002@gmail.com';          // SMTP username
                        $mail->Password = 'srfecylqqjjvzzuo';                 // SMTP password
                        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 587;                                    // TCP port to connect to
                        $mail->CharSet = 'UTF-8';                             // TCP port to connect to

                    //Recipients
                        $mail->setFrom('peaceshop2002@gmail.com', 'Peaceshop');
                        $tbkh =  $khuyenmai->table_khachhang();
                            foreach ($tbkh as $row){
                        $mail->addAddress($row['email_account'],$row['fullname']);     // Add a recipient
                        }
                        $mail->addReplyTo('peaceshop2002@gmail.com', 'Peaceshop');
                        //$mail->addCC('cc@example.com');
                        //$mail->addBCC('bcc@example.com');
                 
                    //Attachments
                        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                 
                    //Content
                        $mail->isHTML(true);                                    // Set email format to HTML
                        $mail->Subject = 'Liên hệ';
                        $mail->Body    = 'Chào bạn! Peace Shop đang có chương trình khuyến mãi ' . $tenkm . ' siêu to khổng lồ, giảm tới ' . $gtrikm . '%. Và hãy nhập mã  ' . $makm . ' để được miễn phí vận chuyển nhé. Chúc quý khách một ngày tốt lành!' ;
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                        if(!$mail->send()){
                            echo 'Lỗi! Không thể gửi';
                        }else{
                            echo '<div class="alert alert-success"><strong>Gửi!</strong> Đã gửi thành công.</div>';

                        }
                    }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>