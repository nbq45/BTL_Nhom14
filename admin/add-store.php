<?php include('partials/header.php'); ?>

<div class="main-content">
    <div class="container wrapper">
        <h1 class="text-center">Add Food</h1>

        <br><br>

        <?php 
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <form action="" method="POST" enctype="multipart/form-data" >
        
            <table style="width: 50%">

                <tr>
                    <td>Tên cửa hàng:  </td>
                    <td>
                        <input type="text" name="ten_ch" placeholder="Nhập tên cửa hàng...">
                    </td>
                </tr>

                <tr>
                    <td>Địa chỉ: </td>
                    <td>
                        <input type="text" name="address" placeholder="Nhập địa chỉ...">
                    </td>
                </tr>

                <tr>
                    <td>Điện thoại: </td>
                    <td>
                        <input type="text" name="phone" placeholder="Nhập số điện thoại:....">
                    </td>
                </tr>

                <tr>
                    <td>Ảnh (URL): </td>
                    <td>
                        <input type="text" name="img_ch" placeholder="">
                    </td>
                </tr>

                <tr>
                    <td>Mức giảm giá: </td>
                    <td>
                        <input type="text" name="giamgia" placeholder="">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Food" class="btn btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        
        <?php 

            //CHeck whether the button is clicked or not
            if(isset($_POST['submit']))
            {
                //Add the Food in Database
                //echo "Clicked";
                
                //1. Get the DAta from Form
                $ten_ch = $_POST['ten_ch'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $img_ch = $_POST['img_ch'];
                $giamgia = $_POST['giamgia'];



                //3. Insert Into Database

                //Create a SQL Query to Save or Add food
                // For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes ''
                $sql2 = "INSERT INTO cuahang SET 
                    ten_ch = '$ten_ch',
                    address = '$address',
                    phone = '$phone',
                    img_ch = '$img_ch',
                    giamgia = '$giamgia'
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //CHeck whether data inserted or not
                //4. Redirect with MEssage to Manage Food page
                if($res2 == true)
                {
                    //Data inserted Successfullly
                    $_SESSION['add'] = "<div class='success'>Food Added Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-store.php');
                }
                else
                {
                    //FAiled to Insert Data
                    $_SESSION['add'] = "<div class='error'>Failed to Add Food.</div>";
                    header('location:'.SITEURL.'admin/manage-store.php');
                }

                
            }

        ?>


    </div>
</div>

<?php include('partials/footer.php'); ?>