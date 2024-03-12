<?php

class spSua extends DB {

    function row_Cnxh($id) {
        $sql_Gallery = 'select * from trends where id_trend='.$id;
        return $this->select($sql_Gallery)[0];
    }
}