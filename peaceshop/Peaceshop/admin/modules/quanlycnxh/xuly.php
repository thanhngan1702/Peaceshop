<?php

require '../../DB.php';

class spXulyCnxh extends DB {

    public function themCnxh() {
        if (@$_POST) {
            $tencnxh = "'" . $_POST['tencnxh'] . "'";
            $macnxh = "'" . $_POST['macnxh'] . "'";
            $noidung = "'" . $_POST['noidung'] . "'";
            $mota = "'" . $_POST['mota'] . "'";
            date_default_timezone_get('Asian/Ho_Chi_Minh');
            $ngaythem = '"' . date('Y-m-d'). '"';
            if(isset($_FILES['image'])){
                $hinhanh = "'" .  $_FILES['image']['name']. "'";
                $hinhanh_tmp = $_FILES['image']['tmp_name'];
                @move_uploaded_file($hinhanh_tmp, 'uploads/' . $_FILES['image']['name']);
            }
            $sql = 'insert into trends (name_trend,hagtag_trend,image_trend,info_trend,ngaythem,mota) value(' . $tencnxh . ',' . $macnxh . ',' . $hinhanh . ',' . $noidung . ',' . $ngaythem .',' . $mota .');';
            if(@$this->querry($sql)) {
                header('location:../../index.php?quanly=cnxh&ac=lietke&cnxh=<div class="alert alert-success"><strong>Thêm!</strong> Đã thêm cẩm năng xu hướng mới thành công.</div>');
            } else {
                header('location:../../index.php?quanly=cnxh&ac=lietke&cnxh=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        }
    }

    public function suaCnxh() {
        if (isset($_GET['id'])) {
            if (@$_POST) {
                $tencnxh = "'" . $_POST['tencnxh'] . "'";
                $macnxh = "'" . $_POST['macnxh'] . "'";
                $noidung = "'" . $_POST['noidung'] . "'";
                $mota = "'" . $_POST['mota'] . "'";

                if(isset($_FILES['image'])){
                    $hinhanh = "'" . $_FILES['image']['name'] . "'";
                    $hinhanh_tmp = $_FILES['image']['tmp_name'];
                    @move_uploaded_file($hinhanh_tmp, 'uploads/' . $_FILES['image']['name']);
                }
            }
            $id = "'" . $_GET['id'] . "'";

            if ($hinhanh != "''") {
                $sql = 'update trends set name_trend=' . $tencnxh . ',mota=' . $mota . ',hagtag_trend=' . $macnxh . ',image_trend=' .$hinhanh . ',info_trend=' . $noidung . ' where id_trend=' . $id . ';';
            } else {
                $sql = 'update trends set name_trend=' . $tencnxh . ',mota=' . $mota . ',hagtag_trend=' . $macnxh . ',info_trend=' . $noidung . ' where id_trend=' . $id . ';';
            }
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=cnxh&ac=lietke&cnxh=<div class="alert alert-success"><strong>Sửa!</strong> Đã lưu chỉnh sửa cẩm nang xu hướng ' . $tencnxh . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=cnxh&ac=lietke&cnxh=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=cnxh&ac=lietke&cnxh=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function xoaCnxh() {
        if (isset($_GET['id'])) {
            $sql = "delete from trends where id_trend like '" . $_GET['id'] . "';";
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=cnxh&ac=lietke&cnxh=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa cẩm năng xu hướng ' . $tencnxh . ' thành công.</div>');
            }
        } else {
            header('location:../../index.php?quanly=cnxh&ac=lietke&cnxh=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }
}

$xulyCnxh = new spXulyCnxh();

if (isset($_POST['them'])) {
    $xulyCnxh->themCnxh();
} else if (isset($_POST['sua'])) {
    $xulyCnxh->suaCnxh();
} else {
    $xulyCnxh->xoaCnxh();
}