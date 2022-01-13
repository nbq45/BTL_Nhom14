<?php 
    //Include COnstants Page
    include('../config/constants.php');

    //echo "Delete Food Page";

    if(isset($_GET['ma_ch'])) //Either use '&&' or 'AND'
    {
        //Process to Delete
        //echo "Process to Delete";

        //1.  Get ID and Image NAme
        $ma_ch = $_GET['ma_ch'];


        //3. Delete Food from Database
        $sql = "DELETE FROM cuahang WHERE ma_ch = $ma_ch";
        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //CHeck whether the query executed or not and set the session message respectively
        //4. Redirect to Manage Food with Session Message
        if($res==true)
        {
            //Food Deleted
            $_SESSION['delete'] = "<div class='success'>Xóa cửa hàng thành cong.</div>";
            header('location:'.SITEURL.'admin/manage-store.php');
        }
        else
        {
            //Failed to Delete Food
            $_SESSION['delete'] = "<div class='error'>Không xóa được cửa hàng.</div>";
            header('location:'.SITEURL.'admin/manage-store.php');
        }

    }
    else
    {
        //Redirect to Manage Food Page
        //echo "REdirect";
        $_SESSION['unauthorize'] = "<div class='error'>Unauthorized Access.</div>";
        header('location:'.SITEURL.'admin/manage-store.php');
    }

?>