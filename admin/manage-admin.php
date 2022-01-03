<?php include('partials/header.php'); ?>
<main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">QUẢN LÝ TÀI KHOẢN ADMIN</h5>
        <div>
            <a class="btn btn-primary" href="add_food.php">Thêm TK mới</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên tk đăng nhập</th>
                    <th scope="col">Quản Lý</th>
                </tr>
            </thead>
            <tbody>
                <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                <?php
                // Bước 01: Kết nối Database Server
                $conn = mysqli_connect('localhost', 'root', '', 'shopee_food');
                if (!$conn) {
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
                // Bước 02: Thực hiện truy vấn
                $sql = "SELECT ma_ad, name FROM db_admin";
                $result = mysqli_query($conn, $sql);
                // Bước 03: Xử lý kết quả truy vấn
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['ma_ad']; ?></th>
                            <td><?php echo $row['name']; ?></td>
                            <td>
                                <a href="update-admin.php?ma_ad=<?php echo $row['ma_ad']; ?>" class="btn btn-primary">Cập Nhật</a>
                                <a href="delete-admin.php?ma_ad=<?php echo $row['ma_ad']; ?>" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                <?php
                    }
                }
                // Bước 04: Đóng kết nối Database Server
                mysqli_close($conn);
                ?>


            </tbody>
        </table>
    </div>
</main>

<?php
include("partials/footer.php");
?>