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

        <form action="" method="POST" enctype="multipart/form-data">
        
            <table class="tbl-30">

                <tr>
                    <td>Tên Sản Phẩm:  </td>
                    <td>
                        <input type="text" name="ten_sp" placeholder="Điền vào tên sản phẩm">
                    </td>
                </tr>

                <tr>
                    <td>Giá: </td>
                    <td>
                        <input type="text" name="gia" placeholder="Giá sản phẩm:....">
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
                $ten_sp = $_POST['ten_sp'];
                $gia = $_POST['gia'];
                $giamgia = $_POST['giamgia'];



                //3. Insert Into Database

                //Create a SQL Query to Save or Add food
                // For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes ''
                $sql2 = "INSERT INTO sanpham SET 
                    ten_sp = '$ten_sp',
                    gia = '$gia',
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
                    header('location:'.SITEURL.'admin/manage-food.php');
                }
                else
                {
                    //FAiled to Insert Data
                    $_SESSION['add'] = "<div class='error'>Failed to Add Food.</div>";
                    header('location:'.SITEURL.'admin/manage-food.php');
                }

                
            }

        ?>


    </div>
</div>

<?php include('partials/footer.php'); ?>