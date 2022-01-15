<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Đặt đồ ăn trực tuyến Ở 16 tỉnh thành trên Toàn Quốc & Giao hàng tận nơi | Đặt món & giao ship tận nơi | shopeefood.vn</title>
</head>

<body>
    <?php
    session_start();
    ?>
    <!-- header -->
    <header class="container-fluid fixed-top shopeefood__header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid mt-1">
                <a class="navbar-brand shopeefood__logo ms-5 pe-5" href="#">
                    <img src="assets/img/Shopeefood.jpg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown pe-5 ">
                            <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <?php 
                        if(isset($_SESSION['isLoginOk']))
                        {
                            echo '<div>';
                            echo "<a class='nav-link fw-bold'>Welcome: ".$_SESSION['isLoginOk']."</a>";
                            echo '</div>';
                            echo '<div>';
                            echo "<a class='nav-link text-danger' href='logout.php'>Đăng xuất</a>";
                            echo '</div>';
                        }
                        else {
                            echo '<div class="btn">';
                            echo '<button class="btn btn-outline-danger" type="submit"><a style="color: coral; text-decoration: none;" href="login.php">Đăng Nhập</button>';
                            echo '</div>';
                        }
                    ?>
                    <!-- <div class="btn">
                        <button class="btn btn-outline-danger" type="submit"><a style="color: coral; text-decoration: none;" href="login.php">Đăng Nhập</button>
                    </div> -->
                </div>
            </div>
        </nav>
    </header>
    <!-- header end -->
    <div class="shopeefood__body">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-white leftside" style="margin-top: 150px!important;">
                    <div class="search">
                        <div>
                            <h1 class="title" style="color: aliceblue;">Đặt Đồ ăn, giao hàng từ 20'...</h1>
                            <div class="local" style="color: aliceblue;">có 32754 địa điểm ở Hà Nội từ 00:00 - 23:59</div>
                        </div>
                        <div class="form-search col-md-8">
                            <div class="input-group mb-3 col-xs-2">
                                <input type="text" class="form-control" placeholder="Tìm địa điểm, món ăn, địa chỉ,...">
                                <button class="btn btn-primary" type="button" id="button-addon2">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="category-list col-md-7 gap-4">
                            <button type="button" class="btn btn-outline-light me-2 mt-2"><a style="color: aliceblue; text-decoration: none;" href="all.php">All</button>
                            <button type="button" class="btn btn-outline-light me-2 mt-2"><a style="color: aliceblue; text-decoration: none;" href="do_an-do_an.php">Đồ ăn</button>
                            <button type="button" class="btn btn-outline-light me-2 mt-2">Đồ uống</button>
                            <button type="button" class="btn btn-outline-light me-2 mt-2">Đồ chay</button>
                            <button type="button" class="btn btn-outline-light me-2 mt-2">Bánh kem</button>
                            <button type="button" class="btn btn-outline-light me-2 mt-2">Tráng miệng</button>
                            <button type="button" class="btn btn-outline-light me-2 mt-2">Homemade</button>
                            <button type="button" class="btn btn-outline-light me-2 mt-2">Vỉa hè</button>
                            <button type="button" class="btn btn-outline-light me-2 mt-2">Pizza/Burger</button>
                            <button type="button" class="btn btn-outline-light me-2 mt-2">Món gà</button>
                            <button type="button" class="btn btn-outline-light me-2 mt-2">Món lẩu</button>
                            <button type="button" class="btn btn-outline-light me-2 mt-2">Sushi</button>
                            <button type="button" class="btn btn-outline-light me-2 mt-2">Mì phở</button>
                            <button type="button" class="btn btn-outline-light me-2 mt-2">Cơm hộp</button>
                        </div>
                        <div>
                            <div class="font18 mb-2 mt-3" style="color: aliceblue;">Sử dụng App ShopeeFood để có nhiều giảm giá
                                <br>và trải nghiệm tốt hơn
                            </div>
                            <a href="https://apps.apple.com/us/app/deliverynow/id1137866760" class="rounded float-start"><img src="assets/img/AppStore-vn.jpg" width="164px"></a>
                            <a href="https://play.google.com/store/apps/details?id=com.deliverynow" class="rounded float-start"><img src="assets/img/PlayStore.jpg" style="margin-left: 20px;" width="164px"></a>
                        </div>
                    </div>
                </div>
                <!-- main right side -->
                <div class="col-md-6 mt-5">
                    <div class="rightside__location w-100 p-4">
                        <!-- Button trigger modal -->
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#urLocation__modal">
                                Đồ ăn -> Chọn địa chỉ giao hàng
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="urLocation__modal" tabindex="-1" aria-labelledby="urLocation__modalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="urLocation__modalLabel">Bạn muốn giao đến đâu?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" placeholder="Nhập địa chỉ giao hàng">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="restaurants__deals bg-white rounded">
                        <h4 class="ms-3">Ưu Đãi</h4>
                        <div class="overflow-auto h-20 restaurant__list bg-white">
                            <div class="product">
                                <ul class="product_list" style="list-style-type: none;">
                                    <?php
                                    require 'config/constants.php';
                                    $sql_ch = "SELECT * FROM cuahang";
                                    $result_ch = mysqli_query($conn, $sql_ch);
                                    while ($row_ch = mysqli_fetch_assoc($result_ch)) {
                                    ?>

                                        <li class="rounded" style="margin-right: 10px; margin-bottom: 35px;height: 200px;width: 183px;background-color: white;">
                                            <a href="food_detail2.php?ma_ch=<?php echo $row_ch['ma_ch'] ?>" style="height:100%;text-decoration: none;">
                                                <img class="img_cuahang" style="object-fit: cover;width: 200px;height: 150px;width:100%" src="<?php echo $row_ch['img_ch'] ?>" alt="" />
                                                <p class="title_product" style="font-size: medium; color: black; font-weight: bold;overflow-x: hidden;width:100%;height: 30px;overflow-y:hidden;margin-bottom: 0;">
                                                    <?php echo $row_ch['ten_ch'] ?>
                                                </p>
                                                <p class="address_product" style="font-size: small; color: darkgray; font-weight: bold;overflow-x: hidden;width:100%;height: 20px;overflow-y:hidden;margin-bottom: 0;">
                                                    <?php echo $row_ch['address'] ?>
                                                </p>
                                                <hr style="margin: 0;" />
                                                <p class="promotion" style="font-size: medium;width:100%; color:red;margin-bottom: 0;">
                                                    <i class="bi bi-tag-fill">Giảm giá <?php echo $row_ch['giamgia'] ?>%</i>
                                                </p>
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="restaurants__collection bg-white rounded mt-3">
                            <h4 class="ms-3"> Bộ sưu tập</h4>
                            <div class="overflow-auto collection__list bg-white rounded">
                                <div class="collection">
                                    <div class="collection__cover">
                                        <img src="https://images.foody.vn/delivery/collection/s320x200/image-db4423ba-211224163133.png" alt="">
                                    </div>
                                    <div class="collection__details">
                                        <div class="collection__title">
                                            <h6 class="text-truncate">Đếm ngược từng giây chớp deal 5K</h6>
                                        </div>
                                        <div class="collection__locations">
                                            <p class="text-truncate text-primary"><small>200 địa điểm</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="collection">
                                    <div class="collection__cover">
                                        <img src="https://images.foody.vn/delivery/collection/s320x200/image-db4423ba-211224163133.png" alt="">
                                    </div>
                                    <div class="collection__details">
                                        <div class="collection__title">
                                            <h6 class="text-truncate">Đếm ngược từng giây chớp deal 5K</h6>
                                        </div>
                                        <div class="collection__locations">
                                            <p class="text-truncate text-primary"><small>200 địa điểm</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="collection">
                                    <div class="collection__cover">
                                        <img src="https://images.foody.vn/delivery/collection/s320x200/image-db4423ba-211224163133.png" alt="">
                                    </div>
                                    <div class="collection__details">
                                        <div class="collection__title">
                                            <h6 class="text-truncate">Đếm ngược từng giây chớp deal 5K</h6>
                                        </div>
                                        <div class="collection__locations">
                                            <p class="text-truncate text-primary"><small>200 địa điểm</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shopeefood__introduction">
        <div class="container">
            <div class="row introbox mt-5">
                <div class="col-md-12">
                    <div class="introbox-1 ">
                        <h1 class="title">Đơn hàng của bạn sẽ được bảo quản như thế nào?</h1>
                        <p class="font15">ShopeeFood sẽ bảo quản đơn của bạn bằng túi & thùng để chống nắng mưa, giữ nhiệt... trên đường đi
                            một cách tốt nhất.</p>
                        <img src="assets\img\Box-food-preservation-footer.jpg" class="mw-100" alt="">
                    </div>
                </div>
            </div>
            <div class="row introbox mt-5 d-flex">
                <div class="col-md-8">
                    <div class="introbox-2 ">
                        <h4 class="title">ShopeeFood Merchant App</h4>
                        <span>
                            <p class="font14">-
                                <b>ShopeeFood Merchant</b> là ứng dụng quản lý đơn hàng cho các nhà hàng đối tác của dịch vụ đặt món tận nơi
                            </p>
                            <p class="font14"> -
                                <b>ShopeeFood.vn</b> luôn sẵn sàng hợp tác với các nhà hàng, quán ăn, cafe... để mở rộng kinh doanh cũng như gia tăng khách hàng. Hãy kết nối vào hệ thống đặt và giao hàng để giảm bớt chi phí quản lý, vận hành, marketing, công nghệ...
                                <br> Đăng ký tham gia: <b>
                                    <a href="" class="text-decoration-none" style="color: #3a94ee" target="_blank">tại đây</a>
                                </b>
                            </p>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 mw-100">
                    <img src="assets/img/banner-phone-reg-merchant.jpg" title="NowMerchant App" width="294px">
                </div>
            </div>
            <div class="row introbox mt-5 d-flex">
                <div class="introbox-3 col-md-8">
                    <h4 class="title">
                        <span style="color: #EE4D2D;font-weight: bold;">ShopeeFood.vn</span>
                        <a href="" class="text-decoration-none" style="color: #3a94ee; font-weight:bold">Hợp tác nhân viên giao nhận - ShopeeFood Driver</a>
                    </h4>
                    <span>
                        <p class="font15">Giúp bạn tăng thu nhập trong thời gian rảnh rỗi</p>
                        <p>
                            <span style="color: #EE4D2D;font-weight: bold;">ShopeeFood</span>
                            tìm kiếm hợp tác với các cá nhân để thực hiện việc giao hàng, chúng tôi sẽ cung cấp ứng dụng (app), 1 số dụng cụ cần thiết để bạn có thể tiếp nhận &amp; giao hàng, kiếm thêm thu nhập
                            <br>Đăng ký tham gia
                            <a href="" class="text-decoration-none" style="color: #4D77A2; font-weight:bold">tại đây</a>
                            hoặc gửi Email qua
                            <a href="" class="text-decoration-none" style="color: #4D77A2; font-weight:bold">tuyendung@gofast.vn</a>
                            - hoặc gọi qua số điện thoại (028) 7109 9179.
                        </p>
                    </span>
                </div>
                <div class="col-md-4">
                    <img src="assets\img\bg-deliverynow.jpg" class="mw-100" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container mt-5">
            <div class="row">
                <h5>Danh Mục</h5>
                <div class="col-md">
                    <h6 class="font-weight-bold">
                        <a href="" class="text-decoration-none link-secondary">THUỐC</a>
                    </h6>
                    <ul class="list-unstyled chanshopee">
                        <a href="" class="text-decoration-none link-secondary">Hóa Mỹ Phẩm</a>
                        <a href="" class="text-decoration-none link-secondary">BCS</a>
                        <a href="" class="text-decoration-none link-secondary">Thiết bị</a>
                        <a href="" class="text-decoration-none link-secondary">Thuốc tây</a>
                        <a href="" class="text-decoration-none link-secondary">Khẩu Trang</a>
                        <a href="" class="text-decoration-none link-secondary">Khẩn Cấp</a>
                    </ul>
                    <h6 class="font-weight-bold">
                        <a href="" class="text-decoration-none link-secondary">THÚ CƯNG</a>
                    </h6>
                    <ul class="list-unstyled">
                        <a href="" class="text-decoration-none link-secondary">Thú Cưng</a>
                    </ul>
                </div>
                <div class="col-md">
                    <h6 class="font-weight-bold">
                        <a href="" class="text-decoration-none link-secondary">Đồ Ăn HN</a>
                    </h6>
                    <ul class="list-unstyled">
                        <a href="" class="text-decoration-none link-secondary">Đồ Ăn HN</a>
                    </ul>
                    <h6 class="font-weight-bold">
                        <a href="" class="text-decoration-none link-secondary">Đặt Bàn HN</a>
                    </h6>
                    <h6 class="font-weight-bold">
                        <a href="" class="text-decoration-none link-secondary">Thực Phẩm HN</a>
                    </h6>
                </div>
                <div class="col-md">
                    <h6 class="font-weight-bold">
                        <a href="" class="text-decoration-none link-secondary">Sản Phẩm HN</a>
                    </h6>
                    <h6 class="font-weight-bold">
                        <a href="" class="text-decoration-none link-secondary">Sản Phẩm</a>
                    </h6>
                    <ul class="list-unstyled">
                        <a href="" class="text-decoration-none link-secondary">Mỹ Phẩm</a>
                        <a href="" class="text-decoration-none link-secondary">Đồ Chơi</a>
                        <a href="" class="text-decoration-none link-secondary">Sữa</a>
                        <a href="" class="text-decoration-none link-secondary">Tã bỉm</a>
                        <a href="" class="text-decoration-none link-secondary">Dụng cụ</a>
                        <a href="" class="text-decoration-none link-secondary">Quần Áo</a>
                        <a href="" class="text-decoration-none link-secondary">Giày dép</a>
                        <a href="" class="text-decoration-none link-secondary">Điện tử</a>
                        <a href="" class="text-decoration-none link-secondary">Trang Sức</a>
                    </ul>
                </div>
                <div class="col-md">
                    <h6 class="font-weight-bold">
                        <a href="" class="text-decoration-none link-secondary">Hoa</a>
                    </h6>
                    <ul class="list-unstyled">
                        <a href="" class="text-decoration-none link-secondary">Chia Buồn</a>
                        <a href="" class="text-decoration-none link-secondary">Cây cảnh</a>
                        <a href="" class="text-decoration-none link-secondary">Chúc mừng</a>
                        <a href="" class="text-decoration-none link-secondary">Sinh Nhật</a>
                        <a href="" class="text-decoration-none link-secondary">Tình yêu</a>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row mt-2">
                <div class="col-md">
                    <p class="font-weight-bold">Công ty</p>
                    <ul class="list-group"></ul>
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
                        <h2><a href="https://apps.apple.com/us/app/deliverynow/id1137866760"><img src="assets/img/AppStore-vn.jpg" width="100px"></a></h2>
                        <h2><a href="https://play.google.com/store/apps/details?id=com.deliverynow"><img src="assets/img/PlayStore.jpg" width="100px"></a></h2>
                        <h2><a href=""><img src="assets/img/Huawei-gallery-vn.jpg" width="100px"></a></h2>
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
                        <h6>Công Ty Cổ Phần Foody</h6>
                        <h6>Lầu G, Tòa nhà Jabes 1,</h6>
                        <h6>số 244 đường Cống Quỳnh, phường Phạm Ngũ Lão, Quận 1, TPHCM</h6>
                        <h6>Giấy CN ĐKDN số: 0311828036</h6>
                        <h6>do Sở Kế hoạch và Đầu tư TP.HCM cấp ngày 11/6/2012,</h6>
                        <h6>sửa đổi lần thứ 23, ngày 10/12/2020</h6>
                        <h6>Số điện thoại: 1900 2042</h6>
                        <h6>Email: <a href="" class="text-decoration-none" style="color: #3a94ee">info@shopeefood.vn</a> </h6>
                        <div class="footer-img">
                            <a href="" class="text-decoration-none link-primary"><img src="assets/img/gov_seals1.jpg" width="170px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>