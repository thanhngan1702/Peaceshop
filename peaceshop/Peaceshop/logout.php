<?php
ob_start();
session_start();
$conn = mysqli_connect('localhost','root','','peaceshop');
mysqli_set_charset($conn,'utf8');

if (isset($_COOKIE['account'])){ 
    $user_account = $_COOKIE['account'];
    if(isset($_SESSION["giohang"])){
    mysqli_query($conn,"delete from giohang where user_account like '$user_account'");
    }
    if($_COOKIE['account']!=""){        
        if(isset($_SESSION["giohang"])){
            foreach ($_SESSION['giohang'] as $key => $value) {
                $SoLuong = $value['num'];
                $gia = $value['price'];
                $anh = $value['image'];
                $name =$value['name'];
                $sql="INSERT INTO `giohang` ( `user_account`, `id_product`, `soluong`, `anh`, `gia`, `name`) VALUES ('$user_account', '$key', '$SoLuong', '$anh', '$gia', '$name')";
                $query= mysqli_query($conn,$sql);
            }
        }
        if($query){
        setcookie('account',"");
        header('location: index.php');
        }
        
    }
}
?>