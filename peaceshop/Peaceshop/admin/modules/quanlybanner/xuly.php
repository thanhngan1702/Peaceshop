<?php

require '../../DB.php';


class xulyBanner extends DB {
    public function themBanner() {

        if (@$_POST) {
            $noidung =$_POST['noidung'];
            $trang=$_POST['trang'];
            $trangthai =$_POST['trangthai'];

            if(isset($_FILES['image'])){
                $hinhanh = $_FILES['image']['name'];
                $hinhanh_tmp = $_FILES['image']['tmp_name'];
                @move_uploaded_file($hinhanh_tmp, 'uploads/' . $_FILES['image']['name']);
            }

            $sql = "insert into banners (image_banner,noidung,trang,trangthai) values ('$hinhanh','$noidung','$trang','$trangthai')";
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=banner&ac=lietke&tt=<div class="alert alert-success"><strong>Thêm!</strong> Đã lưu thêm banner mới thành công.<strong>Thêm!</strong></div>');
            } else {
                header('location:../../index.php?quanly=banner&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        }
    }

    public function suaBanner() {
        if (isset($_GET['id'])) {
            $id =$_GET['id'];
            if (@$_POST) {
                $noidung =$_POST['noidung'];
                $trang=$_POST['trang'];
                $trangthai =$_POST['trangthai'];

            if(isset($_FILES['image'])){
                $hinhanh = $_FILES['image']['name'];
                $hinhanh_tmp = $_FILES['image']['tmp_name'];
                @move_uploaded_file($hinhanh_tmp, 'uploads/' . $_FILES['image']['name']);
            }

                if($hinhanh!=''){
                    $sql = "update banners set noidung='$noidung', image_banner ='$hinhanh',trangthai = '$trangthai',trang= '$trang' where id_banner='$id'";
                }else{
                    $sql = "update banners set noidung='$noidung',trangthai = '$trangthai',trang= '$trang' where id_banner='$id'";
                }
                if (@$this->querry($sql)) {
                    header('location:../../index.php?quanly=banner&ac=lietke&tt=<div class="alert alert-success"><strong>Sửa!</strong> Đã lưu chỉnh sửa banner thành công.</div>');
                }else{
                    header('location:../../index.php?quanly=banner&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui lòng thử lại sau.</div>');

                }
            } else {
                header('location:../../index.php?quanly=banner&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui lòng thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=banner&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui lòng thử lại sau.</div>');
        }
    }

    public function xoaBanner() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            $sql = 'delete from banners where id_banner like ' . $id . ';';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=banner&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa banner ' . $id . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=banner&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui lòng thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui lòng thử lại sau.</div>');
        }
    }
}

$xulyBanner = new xulyBanner();

if (isset($_POST['them'])) {
    $xulyBanner->themBanner();
} elseif (isset($_POST['sua'])) {
    $xulyBanner->suaBanner();
} else {
    $xulyBanner->xoaBanner();
}