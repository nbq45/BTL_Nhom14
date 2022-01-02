<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/order_food.css">
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
      <div class="block-history">
        <div class="container">
          <div class="incoming-order">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#incoming-order">
              Incoming-order
            </button>
            <!-- Modal -->
            <div class="modal fade" id="incoming-order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="row modal-body">
                    <div class="col-md-4">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29793.98038436394!2d105.81945406919824!3d21.022778763286375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1640873039229!5m2!1svi!2s" width="350" height="225" style="border:0;" allowfullscreen="100%" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-8">
                      <div class="container timer">
                        <div class="row">
                          <div class="col-4">
                            <section class="countdown-container">
                              <div class="minutes-container">
                                <div class="minutes">
                                  <span id="timer">30</span>
                                </div>
                                <div class="minutes-label">minutes</div>
                              </div>
                            </section>
                          </div>
                          <div class="col-auto title-restaurant">
                            <h2 style="font-weight: 500;">Stamp Coffee - Đinh Tiên Hoàng </h2>
                            <button type="button" class="btn btn-outline-info">Chi tiết</button>
                            <button type="button" class="btn btn-secondary active" style="color: #EE4D2D;background: #ebebeb; border: none;">Hủy</button>
                            <button type="button" class="btn btn-primary">
                              <i class="bi bi-chat-quote"></i>
                            </button>
                            <i class="bi bi-telephone-fill"></i>19002042
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <h1 class="block-title mb-4 text-center">Lịch sử đơn hàng</h1>
          <div class="history-switch">
            <div class="history-title">ShopeeFood</div>
          </div>
          <div class="history-blog">
            <div class="container">
              <div class="filter-table">
                <div class="filter-item">
                  <div class="row">
                    <div class="col"><span class="status-label">Trạng thái</span></div>
                    <div class="col-auto">
                      <select name="" class="form-control filter-table-input">
                        <option value="-1" selected="">All</option>
                        <option value="4">Hoàn tất</option>
                        <option value="8">Hủy</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="filter-item">
                  <div class="row">
                    <div class="col"><span class="status-label">Từ ngày</span></div>
                    <div class="col-auto">
                      <input type="date" name="bdaytime">
                    </div>
                  </div>
                </div>
                <div class="filter-item">
                  <div class="row">
                    <div class="col"><span class="status-label">Đến ngày</span></div>
                    <div class="col-auto">
                      <input type="date" name="bdaytime">
                    </div>
                  </div>
                </div>
                <div class="filter-item">
                  <button type="button" class="btn btn-primary btn-sm">Tìm kiếm</button>
                </div>
              </div>
              <div class="history-list">
                <div class="history-table row history-table-heading">
                  <div class="table-cell col history-cell-1">STT</div>
                  <div class="table-cell col-2 history-cell-2">Mã đơn hàng</div>
                  <div class="table-cell col-2 history-cell-3">Thời gian</div>
                  <div class="table-cell col-2 history-cell-4">Địa điểm</div>
                  <div class="table-cell col history-cell-5">Nhân viên</div>
                  <div class="table-cell col history-cell-6">Tổng tiền</div>
                  <div class="table-cell col-2 history-cell-7">Trạng thái</div>
                  <div class="table-cell col-2 history-cell-8">Chi tiết</div>
                </div>
                <div class="history-table row">
                  <div class="table-cell col history-cell-1">1</div>
                  <div class="table-cell col-2 history-cell-2">
                    <strong>01012-611173146</strong>
                    <br>
                    Individual
                  </div>
                  <div class="table-cell col-2 history-cell-3">
                    Thời gian đặt: 01/01/2022 16:58
                    <br>
                    Thời gian giao: 01/01/2022 17:30
                  </div>
                  <div class="table-cell col-2 history-cell-4">
                    <strong>Stamp Coffee - Đinh Tiên Hoàng</strong> 
                    <br>
                    75 Đinh Tiên Hoàng , Hoàn Kiếm, Hà Nội
                  </div>
                  <div class="table-cell col history-cell-5">
                    <strong>Nguyễn Bá Anh</strong>
                    <br>
                    <a href="" class="text-decoration-none font-weithr-bold">Đánh giá</a>
                  </div>
                  <div class="table-cell col history-cell-6">
                    <div style="font-weight: bold;"><span>47,300đ</span></div>
                    <div><span>2 items</span></div>
                    <div style="color: green; font-weight: bold;">Tiền mặt</div>
                  </div>
                  <div class="table-cell col-2 history-cell-7">
                    <div class="table-status">Complete</div>
                    <a href="food_detail.html" class="text-decoration-none">
                      <button type="button" title="Click here to re order." class="btn btn-sm btn-secondary table-status">Re-order</button>
                    </a> 
                  </div>
                  <div class="table-cell col-2 history-cell-8">
                    <h7><a href="" class="text-decoration-none font-weithr-bold">Chi tiết đơn hàng</a></h7>
                    <h7><a href="" class="text-decoration-none font-weithr-bold">Lịch sử chat</a></h7>
                    <h7><a href="" class="text-decoration-none font-weithr-bold">In biên lai</a></h7>
                  </div>
                </div>
                <div class="history-table row">
                  <div class="table-cell col history-cell-1">1</div>
                  <div class="table-cell col-2 history-cell-2">
                    <strong>29121-763201915</strong>
                    <br>
                    Individual
                  </div>
                  <div class="table-cell col-2 history-cell-3">
                    Thời gian đặt: 29/12/2021 21:12
                    <br>
                    Thời gian giao: 29/12/2021 21:45
                  </div>
                  <div class="table-cell col-2 history-cell-4">
                    <strong>Stamp Coffee - Đinh Tiên Hoàng</strong> 
                    <br>
                    75 Đinh Tiên Hoàng , Hoàn Kiếm, Hà Nội
                  </div>
                  <div class="table-cell col history-cell-5">
                    <strong>Nguyễn Minh Toàn</strong>
                    <br>
                    <a href="" class="text-decoration-none font-weithr-bold">Báo cáo</a>
                  </div>
                  <div class="table-cell col history-cell-6">
                    <div style="font-weight: bold;"><span>147,300đ</span></div>
                    <div><span>10 items</span></div>
                    <div style="color: green; font-weight: bold;">Tiền mặt</div>
                  </div>
                  <div class="table-cell col-2 history-cell-7">
                    <div class="table-status table-status-red">Cancel</div>
                    <a href="food_detail.html" class="text-decoration-none">
                      <button type="button" title="Click here to re order." class="btn btn-sm btn-secondary table-status">Re-order</button>
                    </a> 
                  </div>
                  <div class="table-cell col-2 history-cell-8">
                    <h7><a href="" class="text-decoration-none font-weithr-bold">Chi tiết đơn hàng</a></h7>
                    <h7><a href="" class="text-decoration-none font-weithr-bold">Lịch sử chat</a></h7>
                    <h7><a href="" class="text-decoration-none font-weithr-bold">In biên lai</a></h7>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
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
                  <h2><a href="" ><img src="assets/img/AppStore-vn.jpg" width="100px"></a></h2>
                  <h2><a href="" ><img src="assets/img/PlayStore.jpg" width="100px"></a></h2>
                  <h2><a href="" ><img src="assets/img/Huawei-gallery-vn.jpg" width="100px"></a></h2>
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
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
  crossorigin="anonymous"
></script>
<script src="countdown.js"></script>
</body>
</html>
