<?php



class spLietke extends DB {

    public function table_chude() {
        $sql = 'select * from themes';
        return $this->select($sql);
    }
    
    public function count() {
        $sql = 'select * from themes';
        $table = $this->select($sql);
        return count($table);
    }
    function spLietkecd($id) {
        $sql_sp = 'select * from products where id_product = ' . $id;
        $sp = $this->select($sql_sp);
        return $sp[0];
    }
}
