<?php

require '../../DB.php';

class xuly extends DB {
    public function xoa() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            $sql = 'delete from lienhe where id_lienhe = ' . $id . ';';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=lienhe&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa  ' . $id . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=lienhe&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=lienhe&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

}

$xl = new xuly();

if (isset($_POST['xoa'])) {
    $xl->xoa();
} 