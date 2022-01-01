<?php
  include("template/header.php");
?>
    <main>
      <div class="block-history">
        <div class="container">
          <div class="incoming-order">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#incoming-order">
              Launch demo modal
            </button>
            <!-- Modal -->
            <div class="modal fade" id="incoming-order" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="row modalbody">
                    <div class="col-md-4">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29793.98038436394!2d105.81945406919824!3d21.022778763286375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1640873039229!5m2!1svi!2s" width="350" height="225" style="border:0;" allowfullscreen="100%" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-5">
                      <div class="container">
                        <section class="countdown-container">
                          <div class="minutes-container">
                            <div class="minutes">35</div>
                            <div class="minutes-label">mins</div>
                          </div>
                        </section>
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
          <div class="history-table">
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
              <table class="table align-middle history-list">
                  <thead class="history-cell">
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Mã đơn hàng</th>
                      <th scope="col">Thời gian</th>
                      <th scope="col">Địa điểm</th>
                      <th scope="col">Nhân viên</th>
                      <th scope="col">Tổng tiền</th>
                      <th scope="col">Trạng thái</th>
                      <th scope="col">Chi tiết</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>ABC</td>
                      <td>0</td>

                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php
  include("template/footer.php");
?>
