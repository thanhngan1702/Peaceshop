<?php

class spSua extends DB {

    public function row_Khuyenmai($id) {
        $sql_km = 'select * from khuyenmai where id_khuyenmai = '.$id;
        return $this->select($sql_km)[0];
    }

}
?>