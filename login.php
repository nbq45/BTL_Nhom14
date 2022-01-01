<?php
  include("template/header.php");
?>
<main class="container">
    <div class="main-login">
      <h4 class="title " style="color: black;">Sign in</h4>
      <div class="login-via">
        <div class="phone">
          <a style="color: aliceblue;" class="nav-link" href="#"><i class="bi bi-phone">SỐ ĐIỆN THOẠI</i></a>
        </div>
        <div class="facebook">
          <a style="color: aliceblue;" class="nav-link" href="#"><i class="bi bi-facebook"></i>FACEBOOK</i></a>
        </div>
        <div class="google">
          <a style="color: aliceblue;" class="nav-link" href="#"><i class="bi bi-google"></i>GOOGLE</i></a>
        </div>
        <div class="regist">
          <a style="color: aliceblue;" class="nav-link" href="signup.php">Đăng ký</i></a>
        </div>
      </div>
      <p class="text mt-4 mb-4" id="mess">Hoặc nhập mật khẩu bằng tài khoản của bạn</p>
      <div class="input-type">
        <div class="email">
          <input class="form-control input-sm" type="text" placeholder="Username or email">
        </div>
        <div class="password">
          <input class="form-control input-sm" type="text" placeholder="Password">  
        </div>
      </div>
      <div class="form-login2 clearfix mt-4 mb-4">
        <div class="left-group">
          <input type="checkbox" id="rememberme" checked>
          <label for="rememberme">Lưu thông tin đăng nhập</label>
        </div>
        <div class="right-group">
          <a href="#">Quên mật khẩu?</a>
        </div>
      </div>
      <div class="btn-login">
        <button style="color: aliceblue;" class="btn btn-block btn-submit">Đăng Nhập</button>
      </div>
      <div class="mess-policy">
        "Chúng tôi không sử dụng thông tin của bạn với bất kỳ mục đích nào. Bằng cách đăng nhập hoặc đăng ký, bạn đồng ý với"
        <a style="color: #0495ba" href="#">Chính sách quy định của Foody</a>
      </div>
    </div>
</main>
    <?php
  include("template/footer.php");
?>
