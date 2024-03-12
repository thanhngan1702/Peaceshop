<?php

require '../../DB.php';

class xulyLoaiHoa extends DB {

    public function themLoaiHoa() {
        if (@$_POST) {
            $tenloaihoa = '"' . $_POST['loaihoa'] . '"';
            $sql = 'insert into typeflowers (name_typeflower) value(' . $tenloaihoa . ')';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=loaihoa&ac=lietke&tt=<div class="alert alert-success"><strong>Thêm!</strong> Đã thêm loại hoa mới thành công.</div>');
            } else {
                header('location:../../index.php?quanly=loaihoa&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=loaihoa&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function suaLoaiHoa() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            if (@$_POST) {
                $tenloaihoa = '"' . $_POST['loaihoa'] . '"';
                $sql = 'update typeflowers set name_typeflower =' . $tenloaihoa . ' where id_typeflower = ' . $id . '';
                if (@$this->querry($sql)) {
                    header('location:../../index.php?quanly=loaihoa&ac=lietke&tt=<div class="alert alert-success"><strong>Sửa!</strong> Đã lưu loại hoa ' . $tenloaihoa . ' thành công.</div>');
                } else {
                    header('location:../../index.php?quanly=loaihoa&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
                }
            } else {
                header('location:../../index.php?quanly=loaihoa&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=loaihoa&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function xoaLoaiHoa() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            $sql = 'delete from typeflowers where id_typeflower = ' . $id . ';';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=loaihoa&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa loại hoa ' . $id . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=loaihoa&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=loaihoa&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

}

$xlLoaiHoa = new xulyLoaiHoa();

if (isset($_POST['them'])) {
    $xlLoaiHoa->themLoaiHoa();
} elseif (isset($_POST['sua'])) {
    $xlLoaiHoa->suaLoaiHoa();
} else {
    $xlLoaiHoa->xoaLoaiHoa();
}