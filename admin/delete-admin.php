<?php 

    include('../config/constants.php');

    $ma_ad = $_GET['ma_ad'];

    $sql = "DELETE FROM db_admin WHERE ma_ad=$ma_ad";

    $res = mysqli_query($conn, $sql);

    if($res==true)
    {
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
        
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
       

        $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }


?>