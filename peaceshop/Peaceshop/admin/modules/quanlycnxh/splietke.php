<?php

class spLietke extends DB {
    public function table_Cnxh() {
        $sql = 'select * from trends';
        return $this->select($sql);
    }

    public function count() {
        $sql = 'select * from trends';
        $table = $this->select($sql);
        return count($table);
    }

}