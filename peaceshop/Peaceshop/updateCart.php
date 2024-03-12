<?php
    session_start();
    if(isset($_POST["id"]) && isset($_POST["num"])){
        $num = $_POST["num"];
        $id = $_POST["id"];
        $giohang = $_SESSION["giohang"];
        if(array_key_exists($id,$giohang)){
            if($num>0){
            $giohang[$id] =array(
                'name'=>$giohang[$id]["name"],
                'image'=>$giohang[$id]["image"],
                'num'=>$num,
                'price'=>$giohang[$id]["price"]
            ); 
        } else{
            unset($giohang[$id]);
        }
            $_SESSION["giohang"] = $giohang;
        }
    }
?>