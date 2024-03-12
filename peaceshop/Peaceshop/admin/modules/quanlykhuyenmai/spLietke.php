<?php
class spLietke extends DB {

    public function table_khuyenmai() {
        $sql = 'select * from khuyenmai';
        return $this->select($sql);
    }
    
    public function count() {
        $sql = 'select * from khuyenmai';
        $table = $this->select($sql);
        return count($table);
    }
    function spKhuyenmai($id) {
        $sql_sp = 'select * from khuyenmai where id_khuyenmai = ' . $id;
        $sp = $this->select($sql_sp);
        return $sp[0];
    }
    public function table_khachhang(){
        $sql = 'SELECT * FROM `accounts`';
        return $this->select($sql);
    }
    public function row_Khuyenmai($id) {
        $sql_km = 'select * from khuyenmai where id_khuyenmai = '.$id;
        return $this->select($sql_km)[0];
    }

}
?>