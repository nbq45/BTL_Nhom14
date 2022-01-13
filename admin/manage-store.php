<?php include('partials/header.php'); ?>
<main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">DANH SÁCH SẢN PHẨM</h5>
        <div>
            <a class="btn btn-primary" href="add-store.php">Thêm</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên cửa hàng</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Mức ưu đãi giảm giá</th>
                    <th scope="col">Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                
                $conn = mysqli_connect('localhost', 'root', '', 'shopee_food');
                if (!$conn) {
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
                
                $sql = "SELECT * FROM cuahang";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['ma_ch']; ?></th>
                            <td><?php echo $row['ten_ch']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><img style="width: 100px;" src="<?php echo $row['img_ch'] ?>" alt="" /></td>
                            <td><?php echo $row['giamgia']; ?>%</td>
                            <td>
                                <a href="update-store.php?ma_ch=<?php echo $row['ma_ch']; ?>" class="btn btn-primary btn-sm">Chỉnh sửa</a>
                                <a href="delete-store.php?ma_ch=<?php echo $row['ma_ch']; ?>" class="btn btn-danger btn-sm">Xóa</a>
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