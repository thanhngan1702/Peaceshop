<?php

class spSua extends DB {

    public function row_Loai($id) {
        $sql_fl = 'select * from typeflowers where id_typeflower = '.$id;
        return $this->select($sql_fl)[0];
    }

}
?>