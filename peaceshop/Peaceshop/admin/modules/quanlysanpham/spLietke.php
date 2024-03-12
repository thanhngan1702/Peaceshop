<?php


class spLietke extends DB {

    public function table_SanPham() {
        $sql = 'select * from products ';
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
        $sql = 'select * from khuyenmai where id_khuyenmai = ' . $id;
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