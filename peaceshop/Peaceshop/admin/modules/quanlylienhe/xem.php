<div class="container-fluid ">
    <h3>Xem liên hệ</h3>
</div>
<?php
$row = $lienhe->row_Traloi($_GET['id']);
?>
<div class="card shadow mb-4">
    <div class="widget-box">

        <div class="card-body">
            <div class="table-reponsive">
                <div class="widget-box">
                    <div class="widget-title">
                        <a href="index.php?quanly=lienhe&ac=lietke" class="btn btn-success">
                            <i class="icon-plus"></i> Liệt kê các liên hệ
                        </a>
                    </div>
                    <hr>

                    <div class="widget-content nopadding">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <h5>&nbsp;</h5>
                            <div class="form-group">
                                <label for>Tên người gửi: <span name="tenng"> <?php echo $row['name_lienhe'] ?></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for>Email: <span name="makm"><?php echo $row['gmail_lienhe'] ?></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for>Nội dung: <?php echo $row['noidung'] ?> </label>
                            </div>
                            <div class="form-group">
                                <label for>Ngày gửi:
                                    <?php echo $row['ngaygui']?>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for>Trạng thái:
                                    <?php if($row['trangthai'] == 0 )
                                      {
                                        echo 'Chưa trả lời    </label>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label class="control-label">Trả lời: </label>
                                        <textarea name="noidung" class="form-control" type="text"></textarea>
                                    </div>
                                    <h5>&nbsp;</h5>
                                    <div class="form-group">
                                        <div class="controls">
                                            <input type="submit" name="traloi" value="Trả lời"
                                                class="btn btn-primary  btn-sm border-left-info">
                                            <a href="index.php?quanly=lienhe&ac=lietke"
                                                class="btn btn-danger  btn-sm border-left-info">Hủy bỏ</a>
                                        </div>
                                    </div>';
                                    } else {
                                        echo 'Đã trả lời </label>
                                        </div>
                                        <h5>&nbsp;</h5>
                            <div class="form-group">
                                    <a href="index.php?quanly=lienhe&ac=lietke"
                                        class="btn btn-danger  btn-sm border-left-info">Hủy bỏ</a>
                                </div>
                            </div>';
                                    }
                                    ?>
                                    <h5>&nbsp;</h5>
                        </form>
                        <?php
                        $conn = mysqli_connect('localhost','root','','peaceshop');
                        mysqli_set_charset($conn,'utf8');
                include "PHPMailer/src/PHPMailer.php";
                include "PHPMailer/src/Exception.php";
                include "PHPMailer/src/OAuth.php";
                include "PHPMailer/src/POP3.php";
                include "PHPMailer/src/SMTP.php";
                
                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\Exception;
                use PHPMailer\PHPMailer\SMTP;


                    if(isset($_POST['traloi'])){

                        $tenlh = $row['name_lienhe'];
                        $gmaiil = $row['gmail_lienhe'] ;
                        $noidung = $_POST['noidung'];
                        
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
                        $mail->addAddress($gmaiil,$tenlh);// Add a recipient
                        $mail->addReplyTo('peaceshop2002@gmail.com', 'Peaceshop');
                        //$mail->addCC('cc@example.com');
                        //$mail->addBCC('bcc@example.com');
                 
                    //Attachments
                        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                 
                    //Content
                        $mail->isHTML(true);                                    // Set email format to HTML
                        $mail->Subject = 'Liên hệ';
                        $mail->Body    = $noidung;
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                        if(!$mail->send()){
                            echo '<div class="alert alert-danger"><strong>Lỗi!</strong> vui lòng thử lạ sau.</div>';
                        }else{
                            $query = mysqli_query($conn,"update lienhe set trangthai = '1'");
                            if($query){
                                echo '<div class="alert alert-success"><strong>Gửi!</strong> Đã gửi thành công.</div>';
                            }else{
                                echo '<div class="alert alert-danger"><strong>Lỗi!</strong> vui lòng thử lạ sau.</div>';
                            }
                        }
                    }
                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>