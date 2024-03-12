<?php

class spSua extends DB {

    public function row_Banner($id) {
        $sql = 'select * from banners where id_banner = '.$id;
        return $this->select($sql)[0];
    }

}