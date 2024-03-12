<?php
class spLoadsanpham extends DB {
    public function table_SanPhamIndex() {
        $sql = 'select * from products ORDER BY RAND() limit 12';
        return $this->select($sql);
    }
    public function spKhuyenmai() {
        $sql = 'select * from products where id_khuyenmai = 8 order by id_product desc limit 6';
        return $this->select($sql);
    }
    public function spMoi() {
        $sql = 'select * from products order by id_product desc limit 0,6';
        return $this->select($sql);
    }
    public function spMoi1() {
        $sql = 'select * from products order by id_product desc limit 0,3';
        return $this->select($sql);
    }
    public function spMoi2() {
        $sql = 'select * from products order by id_product desc limit 3,3';
        return $this->select($sql);
    }
    public function spNoibat() {
        $sql = 'SELECT * FROM products Where noibat = 1 limit 6';
        return $this->select($sql);
    }
    public function spNoibat1() {
        $sql = 'SELECT * FROM products Where noibat = 1 limit 1';
        return $this->select($sql);
    }
    public function count() {
        $sql = 'select * from products';
        $table = $this->select($sql);
        return count($table);
    }
    public function row_loai($id) {
        $sql = 'select * from types where id_type = ' . $id;
        return $this->select($sql)[0];
    }
    public function row_khuyenmai($id) {
        $sql = 'select * from khuyenmai  where id_khuyenmai = ' . $id ;
        return $this->select($sql)[0];
    }
    public function row_nsx($id) {
        $sql = 'select * from brands where id_brand = ' . $id;
        return $this->select($sql)[0];
    }
    public function row_lh($id) {
        $sql = 'select * from typeflowers where id_typeflower = ' . $id;
        return $this->select($sql)[0];
    }
    public function row_cd($id) {
        $sql = 'select * from themes where id_theme = ' . $id;
        return $this->select($sql)[0];
    }
    public function row_Bannerindex() {
        $sql = "SELECT * FROM `banners` WHERE trang = 'trangchu' and trangthai='1'";
        return $this->select($sql);
    }
    public function row_Banner($trang) {
        $sql = "SELECT * FROM `banners` WHERE trang = '$trang' and trangthai='1'";
        return $this->select($sql);
    }
}
class spChitiet extends DB {

    public function row_SanPham($id) {
        $sql = 'select * from products where id_product=' . $id;
        return $this->select($sql)[0];
    }
    
    public function rows_Loai() {
        $sql = 'select * from types';
        return $this->select($sql);
    }
    
    public function rows_NSX() {
        $sql = 'select * from brands';
        return $this->select($sql);
    }
    public function rows_Km() {
        $sql = 'select * from khuyenmai';
        return $this->select($sql);
    }
    public function rows_Lh() {
        $sql = 'select * from typeflowers';
        return $this->select($sql);
    }
    public function rows_Cd() {
        $sql = 'select * from themes';
        return $this->select($sql);
    }
    public function rows_img() {
        $sql = 'select * from img_pd';
        return $this->select($sql);
    }
    public function count_dg($id){
        $sql = 'select * from danhgia where id_pro =' .$id;
        $table = $this->select($sql);
        return count($table);
    }
}
class spTuongtu extends DB {
    public function row_SanPham($id) {
        $sql = 'select * from products where id_product=' . $id;
        return $this->select($sql)[0];
    }
    public function table_Tuongtu($id_type){
       $sql ='select * from products where id_typeflower ='. $id_type . ' limit 6';
       return $this->select($sql);
    }
    public function row_loai($id) {
        $sql = 'select * from types where id_type = ' . $id;
        return $this->select($sql)[0];
    }
    public function row_khuyenmai($id) {
        $sql = 'select * from khuyenmai  where id_khuyenmai = ' . $id ;
        return $this->select($sql)[0];
    }

    public function row_nsx($id) {
        $sql = 'select * from brands where id_brand = ' . $id;
        return $this->select($sql)[0];
    }
    public function row_lh($id) {
        $sql = 'select * from typeflowers where id_typeflower = ' . $id;
        return $this->select($sql)[0];
    }
    public function row_cd($id) {
        $sql = 'select * from themes where id_theme = ' . $id;
        return $this->select($sql)[0];
    }
}

class sanpham extends DB {

    public function danhsachsanphamphantrang($SP_BD, $per) {
        $key = "'%%'";
        if (isset($_GET['key']) && $_GET['key'] != '') {
            $key = "'%" . $_GET['key'] . "%'";
        }
        $theme = "'%%'";
        if (isset($_GET['theme']) && $_GET['theme'] != '') {
            $theme = "'" . $_GET['theme'] . "'";
        }
        $typeflower = "'%%'";
        if (isset($_GET['typeflower']) && $_GET['typeflower'] != '') {
            $typeflower = "'" . $_GET['typeflower'] . "'";
        }
        $type = "'%%'";
        if (isset($_GET['type']) && $_GET['type'] != '') {
            $type = "'" . $_GET['type'] . "'";
        }
        $price = "";
        if(isset($_GET['price'])){
            if ($_GET['price'] == 'khuyenmai') {
                $price = "and id_khuyenmai > 1";
            }else if ($_GET['price'] == 'duoi100') {
                $price = "BETWEEN 0 AND 100000 ";
            } else if ($_GET['price'] == '100-300') {
                $price = "BETWEEN 100000 AND 300000 ";
            } else if ($_GET['price'] == '300-800') {
                $price = "BETWEEN 300000 AND 800000 ";
            } else if ($_GET['price'] == '800-1500') {
                $price = "BETWEEN 900000 AND 1500000 ";
            } else if ($_GET['price'] == 'hon1500') {
                $price = "> 1500000";
            }
        }
        $sx ="";
        if(isset($_GET['sx'])){
            if ($_GET['sx'] == 'TenGiam') {
                $sx = "order by name_product asc ";
            } else if ($_GET['sx'] == 'TenTang') {
                $sx = "order by name_product desc ";
            } else if ($_GET['sx'] == 'GiaGiam') {
                $sx = " order by price_product desc ";
            } else if ($_GET['sx'] == 'GiaTang') {
                $sx = " order by price_product asc ";
            }
        }
        $sql = 'select * from products where name_product like ' . $key . ' and id_theme like ' . $theme . ' and id_type like ' . $type . ' and id_typeflower like ' . $typeflower .' and price_product ' . $price . $sx . ' limit  ' . $SP_BD . ',' . $per . ';';
        if (@$this->select($sql)) {
            return $this->select($sql);
        }
    }

    public function danhsachsanpham() {
        $key = "'%%'";
        if (isset($_GET['key']) && $_GET['key'] != '') {
            $key = "'%" . $_GET['key'] . "%'";
        }
        $theme = "'%%'";
        if (isset($_GET['theme']) && $_GET['theme'] != '') {
            $theme = "'" . $_GET['theme'] . "'";
        }
        $typeflower = "'%%'";
        if (isset($_GET['typeflower']) && $_GET['typeflower'] != '') {
            $typeflower = "'" . $_GET['typeflower'] . "'";
        }
        $type = "'%%'";
        if (isset($_GET['type']) && $_GET['type'] != '') {
            $type = "'" . $_GET['type'] . "'";
        }
        $price = "";
        if(isset($_GET['price'])){
            if ($_GET['price'] == 'duoi100') {
                $price = "BETWEEN 0 AND 100000 ";
            } else if ($_GET['price'] == '100-300') {
                $price = "BETWEEN 100000 AND 300000 ";
            } else if ($_GET['price'] == '300-800') {
                $price = "BETWEEN 300000 AND 800000 ";
            } else if ($_GET['price'] == '800-1500') {
                $price = "BETWEEN 900000 AND 1500000 ";
            } else if ($_GET['price'] == 'hon1500') {
                $price = "> 1500000";
            }
        }
        $sx ="";
        if(isset($_GET['sx'])){
            if ($_GET['sx'] == 'TenGiam') {
                $sx = "order by name_product asc ";
            } else if ($_GET['sx'] == 'TenTang') {
                $sx = "order by name_product desc ";
            } else if ($_GET['sx'] == 'GiaGiam') {
                $sx = " order by price_product desc ";
            } else if ($_GET['sx'] == 'GiaTang') {
                $sx = " order by price_product asc ";
            }
        }
        $sql = 'select * from products where name_product like ' . $key . ' and id_theme like ' . $theme . ' and id_type like ' . $type . ' and id_typeflower like ' . $typeflower .' and price_product ' . $price . $sx . ';';
        if (@$this->select($sql)) {
            return $this->select($sql);
        }
    }

    public function rowSanPham($id) {
        $sql = 'select * from products where id_product = ' . $id;
        if (@$this->select($sql)[0]) {
            return $this->select($sql)[0];
        }
    }

    public function rowLoaiSP($id) {
        $sql = 'select * from types where id_type = ' . $id;
        if (@$this->select($sql)[0]) {
            return $this->select($sql)[0];
        }
    }
    public function row_khuyenmai($id) {
        $sql = 'select * from khuyenmai  where id_khuyenmai = ' . $id ;
        return $this->select($sql)[0];
    }

    public function rowLoaihoa($id) {
        $sql = 'select * from typeflowers where id_typeflower = ' . $id;
        if (@$this->select($sql)[0]) {
            return $this->select($sql)[0];
        }
    }
    public function rowChude($id) {
        $sql = 'select * from themes where id_theme = ' . $id;
        if (@$this->select($sql)[0]) {
            return $this->select($sql)[0];
        }
    }

    public function perpage($per, $theme, $type, $typeflower, $price, $sx, $page, $key) {
        $numPage = 0;
        if (!empty($page)) {
            $numPage = $page;
        } else {
            $numPage = 1;
        }
        if ($numPage == '' || $numPage == 1) {
            $SP_BD = 0;
        } else {
            $SP_BD = ($numPage * $per) - $per;
        }

        $table = $this->danhsachsanpham();
        if($table != ''){
        $count_page = count($table);
        $total_page = ceil($count_page / $per);
        if ($numPage > 1) {
            echo '<li><a href="' . $this->hrefdanhsachsanpham('dsSP', $theme, $type, $typeflower, $price, $sx, 1, $key) . '">1</a></li>';
            echo '<li><a href="' . $this->hrefdanhsachsanpham('dsSP', $theme, $type, $typeflower, $price, $sx, ($numPage - 1), $key) . '">&laquo;</a></li>';
        }
        for ($i = $numPage - 2; $i <= $numPage + 2; $i++) {
            if ($i == $numPage) {
                echo '<li><a href="' . $this->hrefdanhsachsanpham('dsSP', $theme, $type, $typeflower, $price, $sx, $i, $key) . '" style="background-color: #00833D; color:#fff;"> ' . $i . '</a></li>';
            } else if ($i > 0 && $i <= $total_page) {
                echo '<li><a href="' . $this->hrefdanhsachsanpham('dsSP', $theme, $type, $typeflower, $price, $sx, $i, $key) . '">' . $i . ' </a></li>';
            }
        }
        if ($numPage < $total_page) {
            echo '<li><a href="' . $this->hrefdanhsachsanpham('dsSP', $theme, $type, $typeflower, $price, $sx, ($numPage + 1), $key) . '">&raquo;</a></li>';
            echo '<li><a href="' . $this->hrefdanhsachsanpham('dsSP', $theme, $type, $typeflower, $price, $sx, $total_page, $key) . '">' . $total_page . '</a></li>';
        }
        return $SP_BD;
        }
    }

    public function hrefdanhsachsanpham($ac, $theme, $type, $typeflower, $price, $sx, $page, $key) {
        if (empty($theme)) {
            $theme = '';
        }
        if (empty($type)) {
            $type = '';
        }
        if (empty($typeflower)) {
            $typeflower = '';
        }
        if (empty($price)) {
            $price = '';
        }
        if (empty($sx)) {
            $sx = '';
        }
        if (empty($page)) {
            $page = '';
        }
        if (empty($key)) {
            $key = '';
        }
        return "?ac=$ac&theme=$theme&type=$type&typeflower=$typeflower&price=$price&sx=$sx&page=$page&key=$key";
    }
    public function chude() {
        $sql = 'select * from themes';
        if (@$this->select($sql)) {
            return $this->select($sql);
        }
    }
    public function loaihoa() {
        $sql = 'select * from typeflowers';
        if (@$this->select($sql)) {
            return $this->select($sql);
        }
    }
    public function loaisp() {
        $sql = 'select * from types';
        if (@$this->select($sql)) {
            return $this->select($sql);
        }
    }

}
class giohang extends DB{
    public function row_Giohang($id) {
        $sql = "select * from giohang where user_account='$id'";
        return $this->select($sql);
    }
}
class loadcnxh extends DB{
    public function table_Cnxh() {
        $sql = 'select * from trends limit 6';
        return $this->select($sql);
    }
    public function table_hagtag() {
        $sql = 'SELECT DISTINCT hagtag_trend FROM trends';
        return $this->select($sql);
    }
    public function table_new() {
        $sql = 'select * from trends order by id_trend desc limit 0,3';
        return $this->select($sql);
    }
    public function table_Ttcn(){
        $sql = 'select * from trends order by id_trend desc limit 0,5';
        return $this->select($sql);
    }
}
?>