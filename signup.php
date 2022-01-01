<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="assets/css/login-sign.css" />
  <title>ShopeeFood</title>
</head>

<body>
  <div class="signup-form">
    <form action="process-register.php" method="post">
      <h2>Tạo tài khoản</h2>
      <p class="hint-text">Sign up with your social media account or email address</p>
      <div class="social-btn text-center">
        <a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Số điện thoại</a>
        <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
        <a href="#" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
      </div>
      <div class="or-seperator"><b>or</b></div>
      <div class="form-group">
        <input type="text" class="form-control input-lg" name="username" placeholder="Username" required="required">
      </div>
      <div class="form-group">
        <input type="email" class="form-control input-lg" name="email" placeholder="Email Address" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control input-lg" name="confirm_password" placeholder="Confirm Password"
          required="required">
      </div>
      <div class="form-group">
        <input type="submit" name="btnSignUp" class="btn btn-success btn-lg btn-block signup-btn">Đăng ký</input>
      </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>