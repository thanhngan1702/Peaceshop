<?php

require '../../DB.php';

class xulyDonhang extends DB { 
    public function suaDonhang() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            if (@$_POST) {
                $trangthai = "'" . $_POST['sua'] . "'"; 
                $sql = 'UPDATE orders SET trangthai = ' . $trangthai . ' where orders.id_order = ' . $id . '';
                if (@$this->querry($sql)) {
                    header('location:../../index.php?quanly=donhang&ac=lietke&tt=<div class="alert alert-success"><strong>Duyệt!</strong> Đã duyệt đơn hàng ' . $id . ' thành công.</div>');
                
                } else {
                    header('location:../../index.php?quanly=donhang&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
                }
            } else {
                header('location:../../index.php?quanly=donhang&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=donhang&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function suaDonhang2() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            if (@$_POST) {
                $trangthai = "'" . 3 . "'";
                $thanhtoan = "'" . 0 . "'";
                $sql = 'UPDATE orders SET trangthai = ' . $trangthai . ', thanhtoan = ' . $thanhtoan .  ' where orders.id_order = ' . $id . '';
                if (@$this->querry($sql)) {
                    header('location:../../index.php?quanly=donhang&ac=lietke&tt=<div class="alert alert-success"><strong>Duyệt!</strong> Đơn hàng ' . $id . ' đã giao thành công.</div>');
                } else {
                    header('location:../../index.php?quanly=donhang&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
                }
            } else {
                header('location:../../index.php?quanly=donhang&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=donhang&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function xoaDonhang() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            $sql = 'delete from orders where id_order like ' . $id . ';';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=donhang&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa đơn hàng ' . $id . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=donhang&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=donhang&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }
}

$xulyDonhang = new xulyDonhang();

if (isset($_POST['sua'])) {
    $xulyDonhang->suaDonhang();
}
elseif (isset($_POST['sua2'])) {
    $xulyDonhang->suaDonhang2();
} else {
    $xulyDonhang->xoaDonhang();
}