<?php
    require 'template/header.php';
    require 'login-check.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <table class="table">
                    <div class="col-4">
                        <p class="lead btn btn-danger mt-5 mb-3 "><a href="order_food.php" class="text-decoration-none text-white">Trở về đơn hàng</a></p>
                    </div>
                    <thead>
                        <tr>
                            <th scope="col"> Mã hóa đơn</th>
                            <th scope="col">Tên món</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Số lượng</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $sql = "SELECT * FROM donhang, sanpham  where donhang.ma_sp=sanpham.ma_sp Order By ma_dh desc LIMIT 1";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td><?php echo $row['ma_dh']; ?> </td>
                                <td><?php echo $row['ten_sp']; ?> </td>
                                <td><img src="<?php echo $row['img']; ?> " style="width: 10rem;"></td>
                                <td><?php echo $row['so_luong']; ?> </td>


                                <td></td>

                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer>
        <div class="row mt-2">
            <div class="col-md">
                <p class="font-weight-bold">Công ty</p>
                <ul class="list-group">
                    <h6><a href="" class="text-decoration-none link-primary">Giới thiệu</a></h6>
                    <h6><a href="" class="text-decoration-none link-primary">Trung tâm trợ giúp</a></h6>
                    <h6><a href="" class="text-decoration-none link-primary">Quy chế</a></h6>
                    <h6><a href="" class="text-decoration-none link-primary">Điều khoản sử dụng</a></h6>
                    <h6><a href="" class="text-decoration-none link-primary">Bảo mật thông tin</a></h6>
                    <h6><a href="" class="text-decoration-none link-primary">Giải quyết khiếu nại</a></h6>
                    <h6><a href="" class="text-decoration-none link-primary">Liên hệ</a></h6>
                    <h6><a href="" class="text-decoration-none link-primary">Hợp tác nhân viên giao nhận</a></h6>
                    <h6><a href="" class="text-decoration-none link-primary">Đăng ký quán</a></h6>
                    <h6><a href="" class="text-decoration-none link-primary">ShopeeFood Uni</a></h6>
                </ul>
            </div>
            <div class="col-md">
                <p class="font-weight-bold">Ứng dụng ShopeeFood</p>
                <div class="footer-img">
                    <h2>
                        <a href=""><img src="assets/img/AppStore-vn.jpg" width="100px"></a>
                    </h2>
                    <h2>
                        <a href=""><img src="assets/img/PlayStore.jpg" width="100px"></a>
                    </h2>
                    <h2>
                        <a href=""><img src="assets/img/Huawei-gallery-vn.jpg" width="100px"></a>
                    </h2>
                </div>
            </div>
            <div class="col-md">
                <a href=""><img src="assets/img/Logo-ShopeefoodVN.jpg" width="100px"></a>
                <div class="col-md text-muted">
                    &copy: 2021 ShopeeFood
                </div>
                <div class="footer-icon">
                    <a href="" class="rounded float-start"><i class="bi bi-facebook" style="font-size: 2rem; color: gray"></i></a>
                    <a href="" class="rounded float-start"><i class="bi bi-instagram" style="font-size: 2rem; color: gray"></i></a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="last-footer">
                    <p class="font-weight-bold">Địa chỉ công ty</p>
                    <div class="info_local">
                        <h6>Công Ty Cổ Phần Foody</h6>
                        <h6>Lầu G, Tòa nhà Jabes 1,</h6>
                        <h6>số 244 đường Cống Quỳnh, phường Phạm Ngũ Lão, Quận 1, TPHCM</h6>
                        <h6>Giấy CN ĐKDN số: 0311828036</h6>
                        <h6>do Sở Kế hoạch và Đầu tư TP.HCM cấp ngày 11/6/2012,</h6>
                        <h6>sửa đổi lần thứ 23, ngày 10/12/2020</h6>
                        <h6>Số điện thoại: 1900 2042</h6>
                        <h6>Email: <a href="" class="text-decoration-none" style="color: #3a94ee">info@shopeefood.vn</a> </h6>
                    </div>
                    <div class="footer-img">
                        <a href="" class="text-decoration-none link-primary"><img src="assets/img/gov_seals1.jpg" width="170px"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</body>
<!-- ban -->

</html>