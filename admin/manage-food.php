<?php include('partials/header.php'); ?>
<main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">DANH SÁCH SẢN PHẨM</h5>
        <div>
            <a class="btn btn-primary" href="add-food.php">Thêm</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                
                $conn = mysqli_connect('localhost', 'root', '', 'shopee_food');
                if (!$conn) {
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
                
                $sql = "SELECT * FROM sanpham";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                ?>
                        <tr>
                            <th scope="row"><?php echo $row['ma_sp']; ?></th>
                            <td><?php echo $row['ten_sp']; ?></td>
                            <td><img class="img_cuahang" style="width: 200px;" src="<?php echo $row['img'] ?>" alt="" /></td>
                            <td><?php echo $row['gia']; ?>đ</td>
                            <td>
                                <a href="update-food.php?ma_ch=<?php echo $row['ma_sp']; ?>" class="btn btn-primary btn-sm">Chỉnh sửa</a>
                                <a href="delete-food.php?ma_ch=<?php echo $row['ma_sp']; ?>" class="btn btn-danger btn-sm">Xóa</a>
                            </td>
                        </tr>
                <?php
                    }
                }
               
                mysqli_close($conn);
                ?>


            </tbody>
        </table>
    </div>
</main>

<?php
include("partials/footer.php");
?>