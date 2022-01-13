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
        
            <table style="width: 50%">

                <tr>
                    <td>Tên Sản Phẩm:  </td>
                    <td>
                        <input type="text" name="ten_sp" placeholder="Điền vào tên sản phẩm">
                    </td>
                </tr>

                <tr>
                    <td>Ảnh (URL): </td>
                    <td>
                        <input type="text" name="anh" placeholder="">
                    </td>
                </tr>

                <tr>
                    <td>Loại: </td>
                    <td>
                        <select name="loai">

                            <?php 
                                //Create PHP Code to display categories from Database
                                //1. CReate SQL to get all active categories from database
                                $sql = "SELECT * FROM loaisanpham";
                                
                                //Executing qUery
                                $res = mysqli_query($conn, $sql);

                                //Count Rows to check whether we have categories or not
                                $count = mysqli_num_rows($res);

                                //IF count is greater than zero, we have categories else we donot have categories
                                if($count>0)
                                {
                                    //WE have categories
                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                        //get the details of categories
                                        $ma_loaisp = $row['ma_loaisp'];
                                        $ten_loaisp = $row['ten_loaisp'];

                                        ?>

                                        <option value="<?php echo $ma_loaisp; ?>"><?php echo $ten_loaisp; ?></option>

                                        <?php
                                    }
                                }
                                else
                                {
                                    //WE do not have category
                                    ?>
                                    <option value="0">Không có cửa hàng</option>
                                    <?php
                                }
                            

                                //2. Display on Drpopdown
                            ?>

                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Cửa hàng: </td>
                    <td>
                        <select name="cuahang">

                            <?php 
                                //Create PHP Code to display categories from Database
                                //1. CReate SQL to get all active categories from database
                                $sql = "SELECT * FROM cuahang";
                                
                                //Executing qUery
                                $res = mysqli_query($conn, $sql);

                                //Count Rows to check whether we have categories or not
                                $count = mysqli_num_rows($res);

                                //IF count is greater than zero, we have categories else we donot have categories
                                if($count>0)
                                {
                                    //WE have categories
                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                        //get the details of categories
                                        $ma_ch = $row['ma_ch'];
                                        $ten_ch = $row['ten_ch'];

                                        ?>

                                        <option value="<?php echo $ma_ch; ?>"><?php echo $ten_ch; ?></option>

                                        <?php
                                    }
                                }
                                else
                                {
                                    //WE do not have category
                                    ?>
                                    <option value="0">Không có cửa hàng</option>
                                    <?php
                                }
                            

                                //2. Display on Drpopdown
                            ?>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Giá: </td>
                    <td>
                        <input type="text" name="gia" placeholder="Giá sản phẩm:....">
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
                $img = $_POST['anh'];
                $loai = $_POST['loai'];
                $cuahang = $_POST['cuahang'];
                $gia = $_POST['gia'];
                



                //3. Insert Into Database

                //Create a SQL Query to Save or Add food
                // For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes ''
                $sql2 = "INSERT INTO sanpham SET 
                    ten_sp = '$ten_sp',
                    img = '$img',
                    gia = '$gia',
                    ma_loaisp = $loai,
                    ma_ch = $cuahang
                ";
                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //CHeck whether data inserted or not
                //4. Redirect with MEssage to Manage Food page
                if($res2 == true)
                {
                    //Data inserted Successfullly
                    $_SESSION['add'] = "<div class='success'>Food Added Successfully.</div>";
                    if (headers_sent()) {
                        die("Redirect failed. Please click on this link: <a href=...>");
                    }
                    else{
                        exit(header('location:'.SITEURL.'admin/manage-store.php'));
                    }
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