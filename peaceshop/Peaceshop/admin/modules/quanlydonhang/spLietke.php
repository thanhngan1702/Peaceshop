<?php
class spLietke extends DB {

    public function table_order() {
        $sql = 'select * from orders';
        return $this->select($sql);
    }
    public function count() {
        $sql = 'select * from orders';
        $table = $this->select($sql);
        return count($table);
    }

    public function table_ordercd() {
        $sql = 'select * from orders where trangthai = 1';
        return $this->select($sql);
    }
    public function countcd() {
        $sql = 'select * from orders where trangthai = 1';
        $table = $this->select($sql);
        return count($table);
    }

    public function table_orderdd() {
        $sql = 'select * from orders where trangthai = 0';
        return $this->select($sql);
    }
    public function countdd() {
        $sql = 'select * from orders where trangthai = 0';
        $table = $this->select($sql);
        return count($table);
    }

    public function table_orderdh() {
        $sql = 'select * from orders where trangthai = 2';
        return $this->select($sql);
    }
    public function countdh() {
        $sql = 'select * from orders where trangthai = 2';
        $table = $this->select($sql);
        return count($table);
    }

    public function table_orderdht() {
        $sql = 'select * from orders where trangthai = 3';
        return $this->select($sql);
    }
    public function countdht() {
        $sql = 'select * from orders where trangthai = 3';
        $table = $this->select($sql);
        return count($table);
    }
   


}
class spChitietLietke extends DB {
    public function count() {
        $id = $_GET['id'];
        $sql = 'select * from orders_sanpham where id_order=' . $id;
        $table = $this->select($sql);
        return count($table);
    }
    public function row_SanPham($id) {
        $sql = 'select * from orders_sanpham where id_order=' . $id;
        return $this->select($sql);
    }
}
?>