<?php

if(isset($_POST['search'])){
    header('location: shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=TenGiam&page=1&key='.$_POST['search']);
}else {
    header('location: shop.php?ac=dsSP&theme=&type=&typeflower=&price=&sx=TenGiam&page=1&key=');
}