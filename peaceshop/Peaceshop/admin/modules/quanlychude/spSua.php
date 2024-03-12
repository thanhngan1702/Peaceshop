<?php

class spSua extends DB {

    public function row_Chude($id) {
        $sql_fl = 'select * from themes where id_theme = '.$id;
        return $this->select($sql_fl)[0];
    }

}