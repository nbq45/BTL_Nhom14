<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thông báo</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/danhmuc.css">
    <title>Shopee Food</title>
</head>

<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid mt-1">
                <a class="navbar-brand shopeef__logo ms-5 pe-5" href="#">
                    <img src="assets/img/Shopeefood.jpg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown pe-5 ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hà Nội
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.php">
                                        <span>Hà Nội</span>
                                        <span class="local text-muted">37811 địa điểm</span>
                                    </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="index_hcm.php">
                                        <span>TP. HCM</span>
                                        <span class="local text-muted">78481 địa điểm</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Đồ Ăn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Thực Phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hoa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Siêu Thị</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Thuốc</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Thú Cưng</a>
                        </li>
                    </ul>
                    <div class="header-icon-search">
                        <i class="bi bi-search"></i>
                    </div>
                    <button class="btn btn-outline-danger" type="submit">Đăng Nhập</button>
                </div>
            </div>
        </nav>
    </header>
    <?php
    if ($_GET['key'] && $_GET['token']) {
        require 'config/constants.php';
        $email = $_GET['key'];
        $token = $_GET['token'];
        $sql =  "SELECT * FROM `khachhang` WHERE `email_verification_link`='$token' and `email`='$email'";
        $query = mysqli_query($conn, $sql);
        $d = date('Y-m-d H:i:s'); //tạo ra 1 biến lưu thời gian
        if (mysqli_num_rows($query) > 0) { //có bản ghi nào trong csdl khớp vs thông tin này ko
            $row = mysqli_fetch_array($query); //lấy ra thông tin
            if ($row['email_verified_at'] == NULL) { //KT kh chưa kích hoạt
                $sql2 = "UPDATE khachhang set email_verified_at ='$d',status=1 WHERE email='$email'";
                mysqli_query($conn, $sql2);
                $msg = "Chúc mừng, Email của bạn đã được xac nhận";
            } else {
                $msg = "Bạn đã xác nhận Email này rồi";
            }
        } else {
            $msg = "Tài khoản này chưa được đăng ký";
        }
    } else {
        $msg = "Danger! Your something goes to wrong.";
    }
    ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-center">
                Xác nhận gmail
            </div>
            <div class="card-body">
                <p><?php echo $msg; ?></p>
            </div>
        </div>
    </div>
    <footer class="container" style="max-width:1160px">
        <div class="row mt-2">
            <div class="col-md">
                <p class="font-weight-bold" style="font-weight: 700;color: #000;">Công ty</p>
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
                <p class="font-weight-bold" style="font-weight: 700;color: #000;">Ứng dụng ShopeeFood</p>
                <div class="footer-img" style="size: 16px;">
                    <h2><a href=""><img src="assets/img/AppStore-vn.jpg" width="100px"></a></h2>
                    <h2><a href=""><img src="assets/img/PlayStore.jpg" width="100px"></a></h2>
                    <h2><a href=""><img src="assets/img/Huawei-gallery-vn.jpg" width="100px"></a></h2>
                </div>
            </div>
            <div class="col-md">
                <a href=""><img src="assets/img/Logo-ShopeefoodVN.jpg" width="100px"></a>
                <div class="col-md text-muted">
                    &copy: 2021 ShopeeFood
                </div>
                <div class="footer-icon" style="display: inline-block;padding: 0 8px;">
                    <a href="" class="rounded float-start"><i class="bi bi-facebook" style="font-size: 2rem; color: gray"></i></a>
                    <a href="" class="rounded float-start"><i class="bi bi-instagram" style="font-size: 2rem; color: gray"></i></a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="last-footer" style="margin-bottom: 25px;text-align: right;float: right;font-size: 16px;">
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
</body>

</html>