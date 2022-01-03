<?php include('partials/header.php'); ?>

<?php 
    //CHeck whether id is set or not 
    if(isset($_GET['ma_sp']))
    {
        //Get all the details
        $ma_sp = $_GET['ma_sp'];

        //SQL Query to Get the Selected Food
        $sql2 = "SELECT * FROM sanpham WHERE ma_sp=$ma_sp";
        //execute the Query
        $res2 = mysqli_query($conn, $sql2);

        //Get the value based on query executed
        $row2 = mysqli_fetch_assoc($res2);

        //Get the Individual Values of Selected Food
        $ten_sp = $row2['ten_sp'];
        $gia = $row2['gia'];
        $giamgia = $row2['giamgia'];
    }
    else
    {
        //Redirect to Manage Food
        header('location:'.SITEURL.'admin/manage-food.php');
    }
?>


<div class="main-content">
    <div class="container wrapper">
        <h1>Update Food</h1>
        <br><br>

        <form action="" method="POST" enctype="multipart/form-data">
        
        <table class="tbl-30">

            <tr>
                <td>Tên sản phẩm: </td>
                <td>
                    <input type="text" name="ten_sp" value="<?php echo $ten_sp; ?>">
                </td>
            </tr>

            <tr>
                <td>Giá: </td>
                <td>
                    <input type="text" name="gia" value="<?php echo $gia; ?>">
                </td>
            </tr>

            <tr>
                <td>Mức giảm giá: </td>
                <td>
                    <input type="text" name="giamgia" value="<?php echo $giamgia; ?>">
                </td>
            </tr>


            <tr>
                <td>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">

                    <input type="submit" name="submit" value="Update Food" class="btn btn-secondary">
                </td>
            </tr>
        
        </table>
        
        </form>

        <?php 
        
            if(isset($_POST['submit']))
            {
                //echo "Button Clicked";

                //1. Get all the details from the form
                $ten_sp = $_POST['ten_sp'];
                $gia = $_POST['gia'];
                $giamgia = $_POST['giamgia'];
                

                //4. Update the Food in Database
                $sql3 = "UPDATE sanpham SET 
                    ten_sp = '$ten_sp',
                    gia = '$gia',
                    giamgia = '$giamgia'
                    WHERE ma_sp=$ma_sp
                ";

                //Execute the SQL Query
                $res3 = mysqli_query($conn, $sql3);

                //CHeck whether the query is executed or not 
                if($res3==true)
                {
                    //Query Exectued and Food Updated
                    $_SESSION['update'] = "<div class='success'>Food Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }
                else
                {
                    //Failed to Update Food
                    $_SESSION['update'] = "<div class='error'>Failed to Update Food.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }

                
            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>