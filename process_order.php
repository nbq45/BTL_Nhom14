<?php
    require 'config/constants.php';
    if (isset($_GET['ma_sp'])) {
        $ma_sp = $_GET['ma_sp'];
    $sql1 = "INSERT into donhang (tongtien,so_luong,ngay_dat,ma_kh,status,ma_sp) 
    values((select gia FROM sanpham WHERE ma_sp=$ma_sp),1,CURRENT_DATE(),1,1,$ma_sp);  "; 
    $result1 = mysqli_query($conn, $sql1);
    if($result1){
        header('location: order.php');
    }else{
        echo"lỗi rồi";
    }
    }

?>