<?php include('partials/header.php'); ?>
<main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Quản lý tài khoản</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã khách hàng</th>
                    <th scope="col">Tên tài khoản</th>
                    <th scope="col">Email</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Cập nhật</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                
                $conn = mysqli_connect('localhost', 'root', '', 'shopee_food');
                if (!$conn) {
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
                
                $sql = "SELECT * FROM khachhang";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['ma_kh']; ?></th>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td>
                                <a href="update-user.php?ma_sp=<?php echo $row['ma_kh']; ?>" class="btn btn-primary">Chỉnh sửa</a>
                                <a href="delete-user.php?ma_sp=<?php echo $row['ma_kh']; ?>" class="btn btn-secondary">Thay đổi mật khẩu</a>
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