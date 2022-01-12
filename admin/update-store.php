<?php include('partials/header.php'); ?>

<?php 
    //CHeck whether id is set or not 
    if(isset($_GET['ma_ch']))
    {
        //Get all the details
        $ma_ch = $_GET['ma_ch'];

        //SQL Query to Get the Selected Food
        $sql2 = "SELECT * FROM cuahang WHERE ma_ch=$ma_ch";
        //execute the Query
        $res2 = mysqli_query($conn, $sql2);

        //Get the value based on query executed
        $row2 = mysqli_fetch_assoc($res2);

        //Get the Individual Values of Selected Food
        $ten_ch = $row2['ten_ch'];
        $address = $row2['address'];
        $phone = $row2['phone'];
        $current_image = $row2['img_ch'];
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
        
        <table style="width: 50%">

            <tr>
                <td>Tên cửa hàng: </td>
                <td>
                    <input type="text" name="ten_ch" value="<?php echo $ten_ch; ?>">
                </td>
            </tr>

            <tr>
                <td>Địa chỉ: </td>
                <td>
                    <input type="text" name="address" value="<?php echo $address; ?>">
                </td>
            </tr>

            <tr>
                <td>Phone: </td>
                <td>
                    <input type="text" name="phone" value="<?php echo $phone; ?>">
                </td>
            </tr>

            <tr>
                <td>Ảnh hiện tại: </td>
                <td><img style="width: 200px;" src="<?php echo $current_image ?>" alt="" /></td>
            </tr>

            <tr>
                <td>Cập nhật ảnh (URL): </td>
                <td>
                    <input type="text" name="img_ch" placeholder="">
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
                    <input type="hidden" name="ma_ch" value="<?php echo $ma_ch; ?>">
                    <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">

                    <input type="submit" name="submit" value="Update Store" class="btn btn-secondary">
                </td>
            </tr>
        
        </table>
        
        </form>

        <?php 
        
            if(isset($_POST['submit']))
            {
                //echo "Button Clicked";

                //1. Get all the details from the form
                $ma_ch = $_POST['ma_ch'];
                $ten_ch = $_POST['ten_ch'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $img_ch = $_POST['img_ch'];
                $giamgia = $_POST['giamgia'];
                

                //4. Update the Food in Database
                $sql3 = "UPDATE cuahang SET 
                    ten_ch = '$ten_ch',
                    address = '$address',
                    phone = '$phone',
                    img_ch = '$img_ch',
                    giamgia = '$giamgia'
                    WHERE ma_ch=$ma_ch
                ";

                //Execute the SQL Query
                $res3 = mysqli_query($conn, $sql3);

                //CHeck whether the query is executed or not 
                if($res3==true)
                {
                    //Query Exectued and Food Updated
                    $_SESSION['update'] = "<div class='success'>Food Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-store.php');
                }
                else
                {
                    //Failed to Update Food
                    $_SESSION['update'] = "<div class='error'>Failed to Update Food.</div>";
                    header('location:'.SITEURL.'admin/manage-store.php');
                }

                
            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>