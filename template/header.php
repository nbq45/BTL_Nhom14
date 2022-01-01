<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/order_food.css">
    <link rel="stylesheet" href="assets/css/danhmuc.css">
    <link rel="stylesheet" href="assets/css/do_an-all.css">
    <link rel="stylesheet" href="assets/css/login-sign.css">
    <link rel="stylesheet" href="assets/css/food_detail.css">
    <script src="http://maps.googleapis.com/maps/api/js?key=#{your_app_key}&sensor=false">
    </script>
    <script>
          //Khoi tao Map
          function initialize() {
            //Khai bao cac thuoc tinh
            var mapProp = {
              //Tam ban do, quy dinh boi kinh do va vi do
              center:new google.maps.LatLng(21.033693, 105.8466346),
              //set default zoom cua ban do khi duoc load
              zoom:5,
              //Dinh nghia type
              mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            //Truyen tham so cho cac thuoc tinh Map cho the div chua Map
            var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
          }
          google.maps.event.addDomListener(window, 'load', initialize);
    </script>
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
                      <li><a class="dropdown-item" href="index.html">
                          <span >Hà Nội</span>
                          <span class="local text-muted">37811 địa điểm</span>
                      </a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="index_hcm.html">
                          <span >TP. HCM</span>
                          <span class="local text-muted">78481 địa điểm</span>
                      </a>
                      </li>
                  </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">Đồ Ăn</a>
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