<?php
    session_start();
    include("db.php");
    $id_khachhang - $_SESSION['id_khachhang'];
    $code_order = rand(0,9999);
    $insert_cart = "INSERT INTO donhang(id_khachhang,ma_dh,so_luong) VALUE('".$id_khachhang"','".$code_order"',1)";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if($insert_cart){
        foreach($_SESSION['cart']) as $key => $value{
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_order_details = "INSERT INTO donhang(id_khachhang,ma_dh,so_luong) VALUE('".$id_khachhang"','".$code_order"','"$soluong"')";
            mysqli_query($mysqli,$insert_order_details);
        }
    }
unset($_SESSION['cart']);
header('Location:index.php')
?>