<?php
    session_start();
    
    if(isset($_POST["id"]) && isset($_POST["num"])){
        $id = $_POST["id"];
        $num = $_POST["num"];
        require 'admin/DB.php';
        require 'spLoadsanpham.php';
        $chitiet_sp = new spChitiet();
        $row = $chitiet_sp->row_SanPham($id);
        $km = $chitiet_sp->rows_Km();
        foreach ($km as $r) {
            if($row['id_khuyenmai'] == $r['id_khuyenmai']){
                if($r['giatri_khuyenmai']>0){
                    $price = $row['price_product']-($row['price_product']*$r['giatri_khuyenmai'])/100;
                }else{
                    $price =$row['price_product'];
                }  
            }
        }
        if(!isset($_SESSION["giohang"])){
            $giohang = array();
            $giohang[$id] =array(
                'name'=>$row['name_product'],
                'image'=>$row['image'],
                'num'=>$num,
                'price'=> $price,
                'id_pro'=>$row['id_product']
            );
        }else{
            $giohang = $_SESSION["giohang"];
            if(array_key_exists($id,$giohang)){
                $giohang[$id] =array(
                    'name'=>$row['name_product'],
                    'image'=>$row['image'],
                    'num'=>(int)$giohang[$id]['num'] + $num,
                    'price'=> $price,
                    'id_pro'=>$row['id_product']
                );  
            }else{
                $giohang[$id] =array(
                    'name'=>$row['name_product'],
                    'image'=>$row['image'],
                    'num'=>$num,
                    'price'=> $price,
                    'id_pro'=>$row['id_product']
                );  
            }
        }
        $_SESSION["giohang"] = $giohang;
        $numGiohang=0;
        foreach ($giohang as $key => $value) {
            $numGiohang ++;
        }
    }
    
?>