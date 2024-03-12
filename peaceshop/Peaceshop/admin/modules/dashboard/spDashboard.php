<?php

class spDashboard extends DB {
    
    public function countLoaiSP() {
        $sql = 'select * from types';
        $table = $this->select($sql);
        return count($table);
    }
    public function countNSX() {
        $sql = 'select * from brands';
        $table = $this->select($sql);
        return count($table);
    }
    public function countChude() {
        $sql = 'select * from themes';
        $table = $this->select($sql);
        return count($table);
    }
    public function countLoaihoa() {
        $sql = 'select * from typeflowers';
        $table = $this->select($sql);
        return count($table);
    }
    public function countSanPham() {
        $sql = 'select * from products';
        $table = $this->select($sql);
        return count($table);
    }
    
    public function countLienhe() {
        $sql = "select * from lienhe where trangthai ='0'";
        $table = $this->select($sql);
        return count($table);
    }

    public function countTinTuc() {
        $sql = 'select * from news';
        $table = $this->select($sql);
        return count($table);
    }
    public function countCnxh() {
        $sql = 'select * from trends';
        $table = $this->select($sql);
        return count($table);
    }
    
    public function countTaiKhoan() {
        $sql = 'select * from accounts';
        $table = $this->select($sql);
        return count($table);
    }
    
    public function countGallery() {
        $sql = 'select * from gallerys';
        $table = $this->select($sql);
        return count($table);
    }

    public function countKhuyenmai() {
        $sql = 'select * from khuyenmai';
        $table = $this->select($sql);
        return count($table);
    }
    public function countDonhang() {
        $sql = 'select * from donhang';
        $table = $this->select($sql);
        return count($table);
    }
}