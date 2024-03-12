<?php



class spLietke extends DB {

    public function table_loai() {
        $sql = 'select * from types';
        return $this->select($sql);
    }

    public function count() {
        $sql = 'select * from types';
        $table = $this->select($sql);
        return count($table);
    }


}