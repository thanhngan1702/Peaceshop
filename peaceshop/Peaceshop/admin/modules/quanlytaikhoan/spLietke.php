<?php


class spLietke extends DB {

    public function table_Taikhoan() {
        $sql = 'select * from accounts';
        return $this->select($sql);
    }
    public function count() {
        $sql = 'select * from accounts';
        $table = $this->select($sql);
        return count($table);
    }
}
class spChitietLietke extends DB {
    public function count() {
        $id = $_GET['id'];
        $sql = "select * from giohang where user_account='$id'";
        $table = $this->select($sql);
        return count($table);
    }
    public function row_SanPham($id) {
        $sql = "select * from giohang where user_account='$id'";
        return $this->select($sql);
    }
}
?>