<?php include('partials/header.php'); ?>
<main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">DANH SÁCH SẢN PHẨM</h5>
        <div>
            <a class="btn btn-primary" href="add-food.php">Thêm</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Tên cửa hàng</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Mức Giảm Giá</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                
                $conn = mysqli_connect('localhost', 'root', '', 'shopee_food');
                if (!$conn) {
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
                
                $sql = "SELECT ma_sp, ten_sp, gia, giamgia FROM sanpham";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['ma_sp']; ?></th>
                            <td><?php echo $row['ten_sp']; ?></td>
                            <td><?php echo $row['gia']; ?></td>
                            <td><?php echo $row['giamgia']; ?></td>
                            <td><a href="update-food.php?ma_sp=<?php echo $row['ma_sp']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td><a href="delete-food.php?ma_sp=<?php echo $row['ma_sp']; ?>"><i class="bi bi-trash"></i></a></td>
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