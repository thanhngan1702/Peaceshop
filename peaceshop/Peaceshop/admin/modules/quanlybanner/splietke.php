<?php
class spLietke extends DB {

    public function table_banner() {
        $sql = 'select * from banners';
        return $this->select($sql);
    }
    
    public function count() {
        $sql = 'select * from banners';
        $table = $this->select($sql);
        return count($table);
    }
}