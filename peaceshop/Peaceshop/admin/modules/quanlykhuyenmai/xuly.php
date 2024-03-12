<?php

require '../../DB.php';

class xulyKhuyenMai extends DB {

    public function themKhuyenMai() {
        if (@$_POST) {
            $ten_khuyenmai = '"' . $_POST['ten_khuyenmai'] . '"';
            $ma_khuyenmai = '"' . $_POST['ma_khuyenmai'] . '"';
            $loai_khuyenmai = '"' . $_POST['loai_khuyenmai'] . '"';
            $giatri_khuyenmai = '"' . $_POST['giatri_khuyenmai'] . '"';
            $trangthai = '"' . $_POST['trangthai'] . '"';
            date_default_timezone_get('Asian/Ho_Chi_Minh');
            $ngaybatdau = '"' . date('Y-m-d H:i:s'). '"';

            $sql = 'insert into khuyenmai (ten_khuyenmai,ma_khuyenmai,loai_khuyenmai,giatri_khuyenmai,trangthai,ngaybatdau) value(' . $ten_khuyenmai . ',' . $ma_khuyenmai . ',' . $loai_khuyenmai . ',' . $giatri_khuyenmai . ',' . $trangthai . ',' .$ngaybatdau . ')';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=khuyenmai&ac=lietke&tt=<div class="alert alert-success"><strong>Thêm!</strong> Đã thêm khuyến mãi mới thành công.</div>');
            } else {
                header('location:../../index.php?quanly=khuyenmai&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=khuyenmai&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function suaKhuyenMai() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            if (@$_POST) {
                $ten_khuyenmai = '"' . $_POST['ten_khuyenmai'] . '"';
                $ma_khuyenmai = '"' . $_POST['ma_khuyenmai'] . '"';
                $loai_khuyenmai = '"' . $_POST['loai_khuyenmai'] . '"';
                $giatri_khuyenmai = '"' . $_POST['giatri_khuyenmai'] . '"';
                $trangthai = '"' . $_POST['trangthai'] . '"';
                date_default_timezone_get('Asian/Ho_Chi_Minh');
                $ngaybatdau = '"' . date('Y-m-d H:i:s'). '"'; 
                
                $sql = 'update khuyenmai set ten_khuyenmai =' . $ten_khuyenmai . ',ma_khuyenmai =' . $ma_khuyenmai . ',loai_khuyenmai =' . $loai_khuyenmai . ',giatri_khuyenmai =' . $giatri_khuyenmai . ',trangthai =' . $trangthai . ',ngaybatdau =' . $ngaybatdau . ' where id_khuyenmai = ' . $id . '';
                if (@$this->querry($sql)) {
                    header('location:../../index.php?quanly=khuyenmai&ac=lietke&tt=<div class="alert alert-success"><strong>Sửa!</strong> Đã lưu khuyến mãi ' . $ten_khuyenmai . ' thành công.</div>');
                } else {
                    header('location:../../index.php?quanly=khuyenmai&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
                }
            } else {
                header('location:../../index.php?quanly=khuyenmai&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=khuyenmai&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function xoaKhuyenMai() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            $sql = 'delete from khuyenmai where id_khuyenmai = ' . $id . ';';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=khuyenmai&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa khuyến mãi ' . $id . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=khuyenmai&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=khuyenmai&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

}

$xulyKhuyenMai = new xulyKhuyenMai();

if (isset($_POST['them'])) {
    $xulyKhuyenMai->themKhuyenMai();
} elseif (isset($_POST['sua'])) {
    $xulyKhuyenMai->suaKhuyenMai();
} else {
    $xulyKhuyenMai->xoaKhuyenMai();
}