<?php

class spSua extends DB {

    public function row_SanPham($id) {
        $sql = 'select * from products where id_product=' . $id;
        return $this->select($sql)[0];
    }
    
    public function rows_Loai() {
        $sql = 'select * from types';
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
}