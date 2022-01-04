<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/food_detail.css">
    <link href="login.html">
    <title>ShopeeFood</title>
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
                                <li><a class="dropdown-item" href="#">Hà Nội</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">TP.HCM</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Đằ Nẵng</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Đồ Ăn</a>
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
    <main>
        <div class="main_detail">
            <div class="container-md-5 row">
                <div class="col-md-6">
                    <figure class="figure-img">
                        <img src="https://images.foody.vn/res/g12/111755/prof/s280x175/file_restaurant_photo_obr1_16360-d741b77c-211104162850.jpg" width="480px" height="300
                    " alt="Stamp Coffee - Đinh Tiên Hoàng">
                    </figure>
                </div>
                <div class="col-md-6">
                    <nav style="--bs-breadcrumb-divider:'>>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Hà Nội</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Stamp Coffee - Đinh Tiên Hoàng</a></li>
                        </ol>
                    </nav>
                    <div class="detail_info">
                        <h1 class="name_restaurant">Stamp Coffee - Đinh Tiên Hoàng</h1>
                        <h1 class="restaurant__local">75 Đinh Tiên Hoàng , Hoàn Kiếm, Hà Nội</h1>
                        <div class="rating">
                            <div class="stars">
                                <span class="full"><i class="bi bi-star-fill" style="color: #ffc107;"></i></span>
                                <span class="full"><i class="bi bi-star-fill" style="color: #ffc107;"></i></span>
                                <span class="full"><i class="bi bi-star-fill" style="color: #ffc107;"></i></span>
                                <span class="full"><i class="bi bi-star-fill" style="color: #ffc107;"></i></span>
                                <span class="half"><i class="bi bi-star"></i></span>
                                <span class="number-rating">50+</span>đánh giá trên ShopeeFood
                            </div>
                        </div>
                        <div class="more_rating">
                            <a href="">Xem thêm lượt đánh giá từ Foody</a>
                        </div>
                        <div class="startus">
                            <div class="opening_startus">
                                <span class="stt online" style="color: #329900;">Mở cửa  </span>
                                <i class="bi bi-clock"></i> 10:00 - 17:00
                            </div>
                            <div class="cost text-muted">
                                <i class="bi bi-currency-dollar"></i> 10,000 - 50,000
                            </div>
                        </div>
                        <hr style="color: #959595; width: 600px">
                        <div class="utility">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="utility-content container">
                                        <h6 style="color: #959595;">Phí dịch vụ</h6>
                                        <h6 class="text ">0.0% Phí phục vụ</h6>
                                        <span class="icon-partner-vi"></span>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md">
                                    <h6 style="color: #959595;">Dịch vụ bởi</h6>
                                    <h6 class="text ">ShopeeFood</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="main-footer">
        <div class="menu-restaurant">
            <h1 class="item active">Thực đơn</h1>
        </div>
        <div class="menu_category">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="contain-fluid">
                            <div class="row">
                                <nav id="myScrollspy" class="col-sm-3 col-4">
                                    <div class="category-left">
                                        <ul class="nav nav-pills flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#section1">ƯU ĐÃI</a>
                                                <a class="nav-link" href="#section2">CÀ PHÊ</a>
                                                <a class="nav-link" href="#section3">TRÀ</a>
                                                <a class="nav-link" href="#section4">ĐỒ UỐNG KHÁC</a>
                                                <a class="nav-link" href="#section5">ĐỒ ĂN VẶT</a>
                                            </li>
                                    </div>
                                </nav>
                                <div class="col-sm-5 col-8">
                                    <div data-bs-spy="scroll" data-bs-target="#myScrollspy" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                                        <div class="category-right">
                                            <ul class="nav nav-pills flex-column">
                                                <li class="nav-item">
                                                    <div id="section1">
                                                        <div class="container promotions">
                                                            <div class="col-md text-muted" style="font-size:large;">ƯU ĐÃI</div>
                                                            <div class="list-group list-group-flush">
                                                                <div class="list-group-item">
                                                                    <img src="assets/img/voucher.jpg" width="40px" style="margin-right: 10px;" alt=""> Giảm 40K trên tổng đơn 100k
                                                                    <button class="copy-code">copy code <i class="bi bi-clipboard"></i></button>
                                                                </div>
                                                                <div class="list-group-item">
                                                                    <img src="assets/img/voucher.jpg" width="40px" style="margin-right: 10px;" alt=""> Freeship 15k cho đơn từ 50k tở lên
                                                                    <button class="copy-code">copy code <i class="bi bi-clipboard"></i></button>
                                                                </div>
                                                                <div class="list-group-item">
                                                                    <img src="assets/img/shopeefood_voucher_shipping.jpg" style="margin-right: 10px;" width="40px" alt="">Mua 1 tặng 1 cho mỗi thứ 6 hàng tuần tháng 12
                                                                    <button class="copy-code">copy code <i class="bi bi-clipboard"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="section2">
                                                        <div class="col-md text-muted" style="font-size:large;">CÀ PHÊ</div>
                                                        <div class="row product-item">
                                                            <div class="col-sm-auto">
                                                                <a href=""><img src="assets/img/bac-xiu.jpg" width="60px" style="margin: 5px;"></a>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h1 class="text text-right">Bạc xỉu</h1>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <h2 class="text text-right" style="color: #0288d1;"><span>35,000</span><sup>đ</sup></h2>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <button type="button" class="btnAdding btn-primary bi bi-plus btn-sm"></button>
                                                            </div>
                                                        </div>
                                                        <div class="row product-item">
                                                            <div class="col-sm-auto">
                                                                <a href=""><img src="assets/img/cafe-den.jpg" width="60px" style="margin: 5px;"></a>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h1 class="text text-right">Cà phê đen</h1>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <h2 class="text text-right" style="color: #0288d1"><span>28,000</span><sup>đ</sup></h2>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <button type="button" class="btnAdding btn-primary bi bi-plus btn-sm"></button>
                                                            </div>
                                                        </div>
                                                        <div class="row product-item">
                                                            <div class="col-sm-auto">
                                                                <a href=""><img src="assets/img/cafe-nau.jpg" width="60px" style="margin: 5px;"></a>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h1 class="text text-right">Cà phê nâu</h1>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <h2 class="text text-right" style="color: #0288d1"><span>30,000</span><sup>đ</sup></h2>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <button type="button" class="btnAdding btn-primary bi bi-plus btn-sm"></button>
                                                            </div>
                                                        </div>
                                                        <div class="row product-item">
                                                            <div class="col-sm-auto">
                                                                <a href=""><img src="assets/img/capuchino.jpg" width="60px" style="margin: 5px;"></a>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h1 class="text text-right">Capuchino</h1>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <h2 class="text text-right" style="color: #0288d1"><span>40,000</span><sup>đ</sup></h2>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <button type="button" class="btnAdding btn-primary bi bi-plus btn-sm"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="section3">
                                                        <div class="col-md text-muted" style="font-size:large;">TRÀ</div>
                                                        <div class="row product-item">
                                                            <div class="col-sm-auto">
                                                                <a href=""><img src="assets/img/tra-dao-cam-sa.jpg" width="60px" style="margin: 5px;"></a>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h1 class="text text-right">Trà đào cam sả</h1>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <h2 class="text text-right" style="color: #0288d1"><span>35,000</span><sup>đ</sup></h2>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <button type="button" class="btnAdding btn-primary bi bi-plus btn-sm"></button>
                                                            </div>
                                                        </div>
                                                        <div class="row product-item">
                                                            <div class="col-sm-auto">
                                                                <a href=""><img src="assets/img/tra-chanh.jpg" width="60px" style="margin: 5px;"></a>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h1 class="text text-right">Trà chanh</h1>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <h2 class="text text-right" style="color: #0288d1"><span>28,000</span><sup>đ</sup></h2>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <button type="button" class="btnAdding btn-primary bi bi-plus btn-sm"></button>
                                                            </div>
                                                        </div>
                                                        <div class="row product-item">
                                                            <div class="col-sm-auto">
                                                                <a href=""><img src="assets/img/hong-tra-sua.jpg" width="60px" style="margin: 5px;"></a>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h1 class="text text-right">Hồng trà sữa</h1>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <h2 class="text text-right" style="color: #0288d1"><span>40,000</span><sup>đ</sup></h2>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <button type="button" class="btnAdding btn-primary bi bi-plus btn-sm"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="section4">
                                                        <div class="col-md text-muted" style="font-size:large;">ĐỒ UỐNG KHÁC</div>
                                                        <div class="row product-item">
                                                            <div class="col-sm-auto">
                                                                <a href=""><img src="assets/img/sua-chua-da.jfif" width="60px" style="margin: 5px;"></a>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h1 class="text text-right">Sữa chua đánh đá</h1>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <h2 class="text text-right" style="color: #0288d1"><span>28,000</span><sup>đ</sup></h2>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <button type="button" class="btnAdding btn-primary bi bi-plus btn-sm"></button>
                                                            </div>
                                                        </div>
                                                        <div class="row product-item">
                                                            <div class="col-sm-auto">
                                                                <a href=""><img src="assets/img/sua-chua-cacao.jpg" width="60px" style="margin: 5px;"></a>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h1 class="text text-right">Sữa chua cacao</h1>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <h2 class="text text-right" style="color: #0288d1"><span>30,000</span><sup>đ</sup></h2>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <button type="button" class="btnAdding btn-primary bi bi-plus btn-sm"></button>
                                                            </div>
                                                        </div>
                                                        <div class="row product-item">
                                                            <div class="col-sm-auto">
                                                                <a href=""><img src="assets/img/sua-chua-cafe.jpg" width="60px" style="margin: 5px;"></a>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h1 class="text text-right">Sữa chua cafe</h1>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <h2 class="text text-right" style="color: #0288d1"><span>35,000</span><sup>đ</sup></h2>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <button type="button" class="btnAdding btn-primary bi bi-plus btn-sm"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="section5">
                                                        <div class="col-md text-muted" style="font-size:large;">ĐỒ ĂN VẶT</div>
                                                        <div class="row product-item">
                                                            <div class="col-sm-auto">
                                                                <a href=""><img src="assets/img/banh-quy.jpg" width="60px" style="margin: 5px;"></a>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h1 class="text text-right">Bánh quy bơ</h1>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <h2 class="text text-right" style="color: #0288d1"><span>20,000</span><sup>đ</sup></h2>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <button type="button" class="btnAdding btn-primary bi bi-plus btn-sm"></button>
                                                            </div>
                                                        </div>
                                                        <div class="row product-item">
                                                            <div class="col-sm-auto">
                                                                <a href=""><img src="assets/img/banh-quy-socola.jpg" width="60px" style="margin: 5px;"></a>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h1 class="text text-right">Bánh quy socola</h1>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <h2 class="text text-right" style="color: #0288d1"><span>30,000</span><sup>đ</sup></h2>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <button type="button" class="btnAdding btn-primary bi bi-plus btn-sm"></button>
                                                            </div>
                                                        </div>
                                                        <div class="row product-item">
                                                            <div class="col-sm-auto">
                                                                <a href=""><img src="assets/img/huong-duong.jpg" width="50px" style="margin: 5px;"></a>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h1 class="text text-right">Hướng dương</h1>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <h2 class="text text-right" style="color: #0288d1"><span>20,000</span><sup>đ</sup></h2>
                                                            </div>
                                                            <div class="col-sm-auto">
                                                                <button type="button" class="btnAdding btn-primary bi bi-plus btn-sm"></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="bill-restaurant">
                            <div class="container">
                                <div class="bill-header">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <div class="cart me-2">
                                            <button type="button" class="btn btn-secondary btn-sm" style="color: lightblue; background-color:#ebebeb;font-size: 10px;"><span class="number-order">0 </span>phần - 1 người</button>
                                        </div>
                                        <div class="order me-2">
                                            <button type="button" class="btn btn-info btn-sm" style="background-color: #187caa;color:#FFF">Đặt theo nhóm</button>
                                        </div>
                                        <div class="detele">
                                            <button type="button" class="btn btn-outline-danger btn-sm">xóa</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-card-group">
                                    <div class="order-card-user">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar"><img src="" alt=""></div>
                                            </div>
                                            <div class="col">
                                                <div class="user-name">Nguyễn Văn A</div>
                                            </div>
                                            <div class="col-auto">
                                            <span class="number-order">0 </span>món
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-card-groups">
                                        <div class="card-item">
                                            <div class="clearfix">
                                                <button class="bi bi-plus"></button>
                                                <span class="number-order">0</span>
                                                <button class="bi bi-dash"></button>
                                                <span class="name-order"></span>
                                            </div>
                                            <div class="note-order">
                                                <div class="row">
                                                    <div class="col"><input type="text" id="textNote" placeholder="Thêm ghi chú..." style="border: none;"></div>
                                                    <div class="col-auto"><span class="price-order">0<sup>đ</sup></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bill-2" style="flex-grow: 1;max-width: 100%;background-color: #ebebeb;">
                                    <div class="row">
                                        <div class="col">Cộng</div>
                                        <div class="col-auto">
                                            <span class="price-total"><span>0</span><sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bill-3 text-center input-promocode" style="flex-grow: 1;max-width: 100%;background-color: #fbf9d8;">
                                    <span class="a" style="color:#cf2127;">(*)</span> Nhập mã khuyến mãi ở bước hoàn tất
                                </div>
                                <div class="price-total relative" style="flex-grow: 1;max-width: 100%;background-color: #ebebeb;">
                                    <div class="row">
                                        <div class="col">Tổng cộng</div>
                                        <div class="col-auto">
                                            <span class="price-total" style="color: #0288d1;"><span>0</span><sup>đ</sup></span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#orderbill">
                                    <i class="bi bi-check-circle-fill"></i> Đặt trước
                                </button>
                                <!-- The Modal -->
                                <div class="modal  order-detail" id="orderbill">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                Xác nhận đơn hàng
                                                <button class="btn btn-primary btn-sm" type="button" data-bs-dismiss="modal">ĐẶT HÀNG<i class="bi bi-arrow-right"></i></button>
                                                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="row modal-body">
                                                <div class="col-md-6">
                                                    <div class="order-left">
                                                        <div class="order-map">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465.51811711092483!2d105.8536866996911!3d21.02688595439839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abeb3bda9ed9%3A0x5d03e2cd4f7916eb!2zNzUgxJBpbmggVGnDqm4gSG_DoG5nLCBUcsOgbmcgVGnhu4FuLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1640872684756!5m2!1svi!2s"
                                                                width="379" height="325" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                        </div>
                                                        <div class="direction-content">
                                                            <div class="container">
                                                                <div class="direction-info">
                                                                    <div class="direction-from">
                                                                        <div class="direction-name"><i class="bi bi-circle-fill" style="color: red;"></i>Stamp Coffee - Đinh Tiên Hoàng</div>
                                                                        <div class="direction-name">75 Đinh Tiên Hoàng , Hoàn Kiếm, Hà Nội</div>
                                                                    </div>
                                                                    <div class="direction-to">
                                                                        <div class="direction-name"><i class="bi bi-circle-fill" style="color: green;"></i>ABC - 085156465</div>
                                                                        <div class="direction-address">75 Đinh Tiên Hoàng , Hoàn Kiếm, Hà Nội</div>
                                                                    </div>
                                                                </div>
                                                                <div class="direction-time">
                                                                    <span><i class="bi bi-clock"></i></span>
                                                                    <span>Dự kiến:</span>
                                                                    <span class="text-red" style="color: red;">2.0km</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="order-right">
                                                        <p class="title">Chi tiết đơn hàng
                                                            <i class="bi bi-caret-right"></i>
                                                        </p>
                                                        <div class="order-list">
                                                            <div class="order-item">

                                                            </div>
                                                        </div>
                                                        <div class="info-order">
                                                            <div class="row">
                                                                <div class="col">Tổng cộng
                                                                    <span class="txt-bold">0</span> phần
                                                                </div>
                                                                <div class="col-auto txt-bold"><span>0</span><sup>đ</sup>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    Phí dịch vụ:
                                                                    <i class="bi bi-question-circle"><span>4,000</span><sup>đ</sup></i>
                                                                </div>
                                                                <div class="col-auto"><span>0</span><sup>đ</sup>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">Phí vận chuyển: <span style="color: red;">2.0 km</span>
                                                                    <i class="bi bi-question-circle"></i>
                                                                </div>
                                                                <div class="col-auto"><span>0</span><sup>đ</sup>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="note-order">
                                                            <div class="form-check">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Giao tận tay
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <p class="text-bold text-blue font16"><span>5,000</span><sup>đ</sup></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="padding-10 text-bold font16">
                                                            <div class="row">
                                                                <div class="col">Tổng cộng</div>
                                                                <div class="col-auto">
                                                                    <p class="text-bold text-blue font16"><span>0</span><sup>đ</sup></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="order-note">
                                                            <div class="form-floating">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                                <label for="floatingTextarea">Ví dụ: Tòa nhà ABC, lầu 8, cho thêm 2 ly nhựa....</label>
                                                            </div>
                                                        </div>
                                                        <div class="not-vat">
                                                            <p class="text-muted">Không xuất hóa đơn VAT</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info btn-lg" href="order_food.html" data-bs-toggle="modal" data-bs-target="#incoming-order">
                            <div class="row">
                              <div class="col-md-9">ĐẶT HÀNG <i class="bi bi-arrow-right" style="font-weight: 700;"></i></div>
                              <div class="col-md-3"><span class="total-price">0đ</span></div>
                            </div>
                          </button>
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
    
    <script src="assets/js/btnadding.js"></script>
</body>

</html>