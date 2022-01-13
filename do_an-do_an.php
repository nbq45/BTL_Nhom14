<?php
  require 'config/constants.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/danhmuc.css">
  <title>Shopee Food</title>
</head>

<body>
  <?php
    session_start();
  ?>
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
  <div class="container" style="max-width: 1160px;">
    <div class="filter_list" style="display: inline-flex;">
      <select name="fetchval" id="fetchval">
        <option value="" disabled="" selected="">Khu vực</option>
        <option value="Caugiay">Cầu Giấy</option>
        <option value="Dongda">Đống Đa</option>
        <option value="Ngochoi">Ngọc Hồi</option>
        <option value="Namtuliem">Nam Từ Liêm</option>
      </select>
    </div>
    <hr/>
    <div class="content">
      <form class="product" action="fetch.php" method="POST">
        <ul class="product_list" >
          <?php
            $sql_do_an="SELECT * FROM cuahang";
            $result_do_an=mysqli_query($conn,$sql_do_an);
            while($row_do_an=mysqli_fetch_assoc($result_do_an)){
          ?>

          <li class="rounded" style="margin-right: 1%;margin-left:1%; margin-bottom: 25px;height: 230px;width: 200px;background-color: white;">
            <a href="<?php echo $row_do_an['menu_ch']?>"style="height:100%">
              <img class="img_cuahang" style="object-fit: cover;width: 200px;height: 150px;width:100%" src="<?php echo $row_do_an['img_ch']?>" alt="" />
              <p class="title_product" style="font-size: medium; color: black; font-weight: bold;overflow-x: hidden;width:100%;height: 30px;overflow-y:hidden;margin-bottom: 0;">
                <img src="assets/img/partner2x.jpg" style="height: 20px;width: 20px"><?php echo $row_do_an['ten_ch']?>
              </p>
              <p class="address_product" style="font-size: small; color: darkgray; font-weight: bold;overflow-x: hidden;width:100%;height: 20px;overflow-y:hidden;margin-bottom: 0;">
                <?php echo $row_do_an['address']?>
              </p>
              <hr style="margin: 0;"/>
              <p class="promotion" style="font-size: medium;width:100%; color:red;margin-bottom: 0;">
                <i class="bi bi-tag-fill">Giảm giá <?php echo $row_do_an['giamgia']?>%</i>
              </p>
            </a>
          </li>

          <?php
            }
          ?>

        </ul> 
      </form>
      <div class="page_list">
        <ul class="page"style="display: inline-flex;">
          <li class="disable" style="padding: 20px">
            <a class="" href="#">
              <i class="bi bi-arrow-left-circle"></i>
            </a>
          </li>
          <li class="active" style="padding: 20px">
            <a class="undefined" href="#" style="text-decoration: none">1</a>
          </li>
          <li style="padding: 20px">
            <a class="" href="#" style="text-decoration: none">2</a>
          </li>
          <li style="padding: 20px">
            <a class="" href="#" style="text-decoration: none">3</a>
          </li>
          <li style="padding: 20px">
            <a class="" href="#" style="text-decoration: none">4</a>
          </li>
          <li style="padding: 20px">
            <a class="" href="#">
              <i class="bi bi-arrow-right-circle"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="footer_infor">
        <h2 style="font-weight: bold">
          ShopeeFood - Ứng dụng đặt đồ ăn nhanh - nhiều deal giảm giá
        </h2>
        <p>
          Ẩm thực Thủ đô đa dạng các món ăn đặc trưng đầy sáng tạo luôn mang
          đến những trải nghiệm đầy mớ mẻ với tất cả thực khách sành ăn ở Hà
          Nội. Từ những bát phở khói nghi ngút với lớp thịt bò tái ngọt, đến
          bún chả, bún ram ăm ắp thịt thà, hay cháo sườn nghi ngút khói làm mê
          biết bao nhiêu chiếc bụng đói.
        </p>
        <p>
          Tuy nhiên, với nhịp sống bận rộn, guồng quay công việc tất bật,
          nhiều người đã lựa chọn lấp đầy chiếc bụng đói của mình thông qua
          các ứng dụng đặt đồ ăn online để giúp cho việc tận hưởng bữa ăn thêm
          ngon, lại dễ dàng hơn rất nhiều so với việc dành thời gian lui tới
          các địa điểm nhà hàng, quán ăn mong muốn. Đi kèm với các ưu đãi như
          miễn phí ship, khuyến mãi cho người dùng mới… ứng dụng ShopeeFood
          nhanh chóng vượt qua nhiều ứng dụng giao hàng với nhiều lựa chọn cửa
          hàng ở 16 tỉnh thành đang trở thành ứng dụng tiện ích giao đồ ăn
          nhanh chóng.
        </p>
        <h2 style="font-weight: bold">
          Đa dạng gợi ý tìm kiếm theo sở thích
        </h2>
        <p>
          Người dùng muốn ship đồ ăn nhanh thông qua ShopeeFood dễ dàng tìm
          kiếm các gợi ý hàng quán theo sở thích. Các keyword được nhiều người
          tìm kiếm được trình bày rõ ràng như là một gợi ý giao đặt đồ ăn
          nhanh chóng:
          <a href="#">đồ ăn</a>,<a href="#">đồ uống</a>,<a href="#">đồ chay</a>...đến các loại<a href="#">bánh kem</a>,<a href="#">tráng miệng</a>,<a href="#">vỉa hè</a>...Mở ứng dụng, Chỉ cần nghĩ tới keyword
          mình đang muốn tìm, chọn lựa theo sở thích, ứng dụng sẽ đưa bạn đến
          các tìm kiếm đúng với nhu cầu giao đặt đồ ăn một cách tiện lợi nhất.
        </p>
        <p>
          Chỉ với ứng dụng đặt đồ ăn ShopeeFood, bằng một cú chạm, học sinh
          sinh viên dễ dàng tìm ra các món ăn vặt thật ngon từ các cửa hàng
          chuyên phục vụ cho mô hình này như:
          <a href="#">Quỳnh Anh - ăn vặt online</a>,<a href="#">
            Ăn vặt phố Khâm Thiên</a>,<a href="#"> Tipu Snack</a>,... hay dân văn phòng sẽ thật mê các
          chuỗi nhà hàng thức ăn nhanh: <a href="#">Lotteria</a>,<a href="#">
            Umbala Bánh Mì & Xôi</a>,<a href="#"> Umbala Bánh Mì & Xôi</a>,<a href="#">
            Umbala Bánh Mì & Xôi</a>... hay hẹn hò tại nhà với ẩm thực Á Âu đa dạng:
          <a href="#"> Al Frescos</a>,<a href="#"> Al Frescos</a>,<a href="#">
            nhà hàng Fê - Bạch Mai</a>,<a href="#"> Isushi Buffet Nhật Bản</a>...
        </p>
        <h2 style="font-weight: bold" Cung cấp thật nhiều các loại khuyến mãi phù hợp></h2>
        <p>
          Ngoài hỗ trợ các khuyến mãi hằng ngày như miễn phí ship trong phạm
          vi bán kính 3km, cho người dùng mới… ứng dụng đặt đồ ăn ShopeeFood
          còn tổng hợp các khuyến mãi có sẵn phù hợp với địa chỉ bạn đã thiết
          lập. Cũng như, các khuyến mãi này còn được tập hợp thành các bộ sưu
          tập đang diễn trong tháng với các chương trình khác nhau, ví dụ:
          <a href="#"> Rẻ hơn tự nấu</a>,<a href="#"> Sạch như nhà làm </a>,<a href="#">
            FreeshipXtra</a>... giúp cho bạn dễ dàng cân nhắc theo kinh phí, hay sở thích.
          Không cần nghĩ ngợi nhiều mà chỉ cần chọn mà thôi.
        </p>
        <h2 style="font-weight: bold">Bộ lọc đa dạng và tiện dụng:</h2>
        <p>
          Với bộ lọc được ShopeeFood đã chuẩn bị sẵn, các bạn có thể dễ dàng
          tìm kiếm được hàng quán giao đồ ăn bởi ShopeeFood phù hợp với yêu
          cầu của mình
        </p>
        <ul>
          <li>
            <p>
              Gần tôi: chỉ cần thực hiện đúng thao tác khi nhập địa chỉ, app
              đặt đồ ăn online ShopeeFood sẽ mang đến các cửa hàng gần với bạn
              nhất. Điều này sẽ giúp tiết kiệm rất nhiều chi phí thay vì phải
              di chuyển đến các hàng quán và ở nhà; ShopeeFood ship đồ ăn tận
              nơi nhanh chóng với kinh phí kinh tế.
            </p>
          </li>
          <li>
            <p>
              Bán chạy: đâu là những hàng quán có lượng đơn tốt nhất, được
              nhiều người dùng lựa chọn ở Thủ Đô, với mức giá ưu đãi riêng
              theo từng cửa hàng. Do đó, ngoài việc chọn quán, bạn còn có thêm
              các gợi ý lựa chọn đặt món online giá rẻ.
            </p>
          </li>
          <li>
            Đánh giá: thông qua đánh giá của các người dùng khác trên nền tảng
            trải nghiệm Foody, người dùng ứng dụng đặt đồ ăn ShopeeFood dễ
            dàng cân nhắc các lựa chọn của mình cho phù hợp.
          </li>
          <li>
            <p>
              Giao nhanh: những hàng quán đặt thức ăn với thời gian thực hiện
              món nhanh, chỉ cần đặt đồ ăn và đợi, đơn hàng sẽ được ShopeeFood
              ship đồ ăn nhanh tới bạn .
            </p>
          </li>
        </ul>
        <p>
          Đó là còn chưa kể, khi bạn chọn đặt đồ ăn online qua ShopeeFood, để
          tiện cho việc dùng món, còn được chọn luôn hẹn giờ ship, bạn sẽ
          không cần phải lo về bữa ăn được đem tới mình quá muộn hay quá sớm
          nữa nhé.
        </p>
        <h2 style="font-weight: bold">
          Cài đặt ứng dụng đặt đồ ăn ShopeeFood, tận hưởng ưu đãi độc quyền
        </h2>
        <p>
          Và để đặt đồ ăn online với các ưu đãi độc quyền từ ShopeeFood, việc
          đầu tiên cần làm là bạn đừng quên cài đặt ứng dụng ShopeeFood với
          nhiều gợi ý cho bữa ăn ngon với giá siêu tốt nhé. Cách thức rất đơn
          giản, mở ứng dụng đặt đồ ăn online, tìm kiếm ngay bằng keyword món
          ăn, nhà hàng đang muốn trải nghiệm. Tiếp đó chỉ cần chọn lựa món
          theo sở thích được gợi ý sẵn, hoặc lựa chọn hàng quán có khuyến mãi
          phù hợp với túi tiền, và nhấn nút đặt món và chờ ShopeeFood giao
          thôi. Có thể tham khảo các bộ sưu tập sẵn có do ShopeeFood soạn sẵn
          nếu trước đó vẫn còn lăn tăn câu hỏi “hôm nay ăn gì?” nha! Chỉ cần
          như vậy là bạn đã lấp đầy niềm đam mê ăn uống của mình rồi!
        </p>
      </div>
    </div>
  </div>
  <footer class="container" style="max-width:1160px">
    <div class="row mt-2">
      <div class="col-md">
        <p class="font-weight-bold"style="font-weight: 700;color: #000;">Công ty</p>
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
