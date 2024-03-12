<?php

require '../../DB.php';

class xulyChude extends DB {

    public function themChude() {
        if (@$_POST) {
            $tenchude = '"' . $_POST['chude'] . '"';
            $sql = 'insert into themes (name_theme) value(' . $tenchude . ')';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=chude&ac=lietke&tt=<div class="alert alert-success"><strong>Thêm!</strong> Đã thêm chủ đề mới thành công.</div>');
            } else {
                header('location:../../index.php?quanly=chude&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=chude&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function suaChude() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            if (@$_POST) {
                $tenchude = '"' . $_POST['chude'] . '"';
                $sql = 'update themes set name_theme =' . $tenchude . ' where id_theme = ' . $id . '';
                if (@$this->querry($sql)) {
                    header('location:../../index.php?quanly=chude&ac=lietke&tt=<div class="alert alert-success"><strong>Sửa!</strong> Đã lưu chủ đề ' . $tenchude . ' thành công.</div>');
                } else {
                    header('location:../../index.php?quanly=chude&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
                }
            } else {
                header('location:../../index.php?quanly=chude&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=chude&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function xoaChude() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            $sql = 'delete from themes where id_theme = ' . $id . ';';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=chude&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa chủ đề ' . $id . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=chude&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=chude&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

}

$xlChude = new xulyChude();

if (isset($_POST['them'])) {
    $xlChude->themChude();
} elseif (isset($_POST['sua'])) {
    $xlChude->suaChude();
} else {
    $xlChude->xoaChude();
}