<?php

class spLietke extends DB {

    public function table_loaihoa() {
        $sql = 'select * from typeflowers ';
        return $this->select($sql);
    }

    public function count() {
        $sql = 'select * from typeflowers';
        $table = $this->select($sql);
        return count($table);
    }

    function spLietkelh($id) {
        $sql_sp = 'select * from products where id_product = ' . $id;
        $sp = $this->select($sql_sp);
        return $sp[0];
    }

}
