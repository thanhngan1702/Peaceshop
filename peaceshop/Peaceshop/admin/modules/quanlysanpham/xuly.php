<?php

require '../../DB.php';


class xulySanPham extends DB {
    public function themSanPham() {

        if (@$_POST) {
            $tensp =$_POST['tensp'];
            $noidung =$_POST['noidung'];
            $mota = $_POST['mota'];
            $khuyenmai =$_POST['khuyenmai'];
            $ynghia=$_POST['ynghia'];
            $soluong =$_POST['soluong'];
            $giadexuat =$_POST['giadexuat'];
            $loaisp =$_POST['loaisp'];
            $loaihoa =$_POST['loaihoa'];
            $chude =$_POST['chude'];
            $trangthai =$_POST['trangthai'];
            $noibat =$_POST['noibat'];


            if(isset($_FILES['image'])){
                $hinhanh = $_FILES['image']['name'];
                $hinhanh_tmp = $_FILES['image']['tmp_name'];
                @move_uploaded_file($hinhanh_tmp, 'uploads/' . $_FILES['image']['name']);
            }

            if(isset($_FILES['images'])){
                $files =$_FILES['images'];
                $file_names = $files['name'];
                foreach($file_names as $key => $value){
                move_uploaded_file($files['tmp_name'][$key],'uploads/'.$value);
                }
            }
            
            $connection = mysqli_connect("localhost","root","","peaceshop");


            $sql = "insert into products (name_product,image,price_product,id_khuyenmai,sl_product,id_type,info_product,mota,ynghia,id_typeflower,id_theme,trangthai,noibat) values ('$tensp','$hinhanh','$giadexuat','$khuyenmai','$soluong','$loaisp','$noidung','$mota ','$ynghia','$loaihoa','$chude','$trangthai','$noibat')";
        

            $query = mysqli_query($connection,$sql);
            
            $id_pro = mysqli_insert_id($connection);
            foreach($file_names as $key => $value){
                mysqli_query($connection,"insert into img_pd (id_product,name_image) values ('$id_pro','$value')");
            }

            if ($query) {
                header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-success"><strong>Thêm!</strong> Đã lưu thêm sản phẩm mới thành công.</div>');
            } else {
                header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
            
            
        } else {
            header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function suaSanPham() {
        if (isset($_GET['id'])) {
            $id =$_GET['id'];
            if (@$_POST) {
                $tensp = $_POST['tensp'];
                $noidung =$_POST['noidung'];
                $mota = $_POST['mota'];
                $ynghia=$_POST['ynghia'];
                $soluong =$_POST['soluong'];
                $giadexuat =$_POST['giadexuat'];
                $khuyenmai = $_POST['khuyenmai'];
                $loaisp =$_POST['loaisp'];
                $loaihoa =$_POST['loaihoa'];
                $chude =$_POST['chude'];
                $trangthai = $_POST['trangthai'];
                $noibat =$_POST['noibat'];

                if(isset($_FILES['image'])){
                    $hinhanh =$_FILES['image']['name'];
                    $hinhanh_tmp = $_FILES['image']['tmp_name'];
                    @move_uploaded_file($hinhanh_tmp, 'uploads/' . $_FILES['image']['name']);
                }
                $connection = mysqli_connect("localhost","root","","peaceshop");
                if(isset($_FILES['images'])){
                    $files =$_FILES['images'];
                    $file_names = $files['name'];

                    if(!empty($file_names[0])){
                        mysqli_query($connection,"delete from img_pd where id_product=$id");
                        foreach($file_names as $key => $value){
                             move_uploaded_file($files['tmp_name'][$key],'uploads/'.$value);
                        }
                        foreach ($file_names as $key => $value) {
                            mysqli_query($connection,"insert into img_pd(id_product,name_image) values ('$id','$value')");
                        }
                    }
                }
                if($hinhanh!=''){
                    $sql = "update products set name_product='$tensp', image ='$hinhanh',price_product='$giadexuat',id_khuyenmai='$khuyenmai',sl_product='$soluong',info_product='$noidung',mota='$mota ',ynghia='$ynghia',id_type='$loaisp',id_typeflower='$loaihoa',id_theme='$chude',trangthai=' $trangthai',noibat='$noibat' where id_product='$id'";
                }else{
                    $sql = "update products set name_product='$tensp',price_product='$giadexuat',id_khuyenmai='$khuyenmai',sl_product='$soluong',info_product='$noidung',mota='$mota ',ynghia='$ynghia',id_type='$loaisp',id_typeflower='$loaihoa',id_theme='$chude',trangthai=' $trangthai',noibat='$noibat' where id_product='$id'";
                }

                if (@$this->querry($sql)) {
                    header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-success"><strong>Sửa!</strong> Đã lưu chỉnh sửa sản phẩm thành công.</div>');
                }else{
                    header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');

                }
            } else {
                header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }

    public function xoaSanPham() {
        if (isset($_GET['id'])) {
            $id = "'" . $_GET['id'] . "'";
            $sql = 'delete from products where id_product like ' . $id . ';';
            if (@$this->querry($sql)) {
                header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-success"><strong>Xóa!</strong> Đã xóa sản phẩm ' . $id . ' thành công.</div>');
            } else {
                header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
            }
        } else {
            header('location:../../index.php?quanly=sanpham&ac=lietke&tt=<div class="alert alert-danger"><strong>Lỗi!</strong> Đã xảy ra vấn đề. Vui long thử lại sau.</div>');
        }
    }
}

$xulySanPham = new xulySanPham();

if (isset($_POST['them'])) {
    $xulySanPham->themSanPham();
} elseif (isset($_POST['sua'])) {
    $xulySanPham->suaSanPham();
} else {
    $xulySanPham->xoaSanPham();
}