<?php

class spThem extends DB {
    
    public function table_Loai() {
        $sql = 'select * from types';
        return $this->select($sql);
    }
    public function table_Lh() {
        $sql = 'select * from typeflowers';
        return $this->select($sql);
    }
    public function table_Cd() {
        $sql = 'select * from themes';
        return $this->select($sql);
    }
    public function table_Km() {
        $sql = 'select * from khuyenmai';
        return $this->select($sql);
    }
    public function row($id) {
        $sql = 'SELECT * FROM image_pd where id_product = ' . $id . ';';
        return $this->select($sql)[0];
    }
}