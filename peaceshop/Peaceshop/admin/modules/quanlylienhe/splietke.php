<?php
class spLietke extends DB {

    public function table_lienhe() {
        $sql = 'select * from lienhe';
        return $this->select($sql);
    }
    
    public function count() {
        $sql = 'select * from lienhe';
        $table = $this->select($sql);
        return count($table);
    }
    function spKhuyenmai($id) {
        $sql_sp = 'select * from khuyenmai where id_lienhe = ' . $id;
        $sp = $this->select($sql_sp);
        return $sp[0];
    }
    public function row_Traloi($id) {
        $sql= 'select * from lienhe where id_lienhe = '.$id;
        return $this->select($sql)[0];
    }

}
?>