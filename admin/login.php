<?php include('../config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>ADMIN - LOGIN</title>
</head>

<body">
  <div class="container login">
    <?php
      if (isset($_SESSION['login'])) {
        echo $_SESSION['login'];
        unset($_SESSION['login']);
      }

      if (isset($_SESSION['no-login-message'])) {
        echo $_SESSION['no-login-message'];
        unset($_SESSION['no-login-message']);
      }
    ?>

    <form action="" method="POST" class="position-absolute top-50 start-50 translate-middle ">
      <h1>ADMIN - SIGN IN</h1>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" >
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" >
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember Password</label>
      </div>
      <button type="submit" name="submit" value="Login" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<?php

//CHeck whether the Submit Button is Clicked or NOt

if (isset($_POST['submit'])) {
  //Process for Login
  //1. Get the Data from Login form
  // $username = $_POST['username'];
  // $password = md5($_POST['password']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);

  $raw_password = md5($_POST['password']);
  $password = mysqli_real_escape_string($conn, $raw_password);

  //2. SQL to check whether the user with username and password exists or not
  $sql = "SELECT * FROM db_admin WHERE name='$username' AND password='$password'";

  //3. Execute the Query
  $res = mysqli_query($conn, $sql);

  //4. COunt rows to check whether the user exists or not
  $count = mysqli_num_rows($res);

  if ($count == 1) {
    //User AVailable and Login Success
    $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
    $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

    //REdirect to HOme Page/Dashboard
    header('location:' . SITEURL . 'admin/');
  } else {
    //User not Available and Login FAil
    $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
    //REdirect to HOme Page/Dashboard
    header('location:' . SITEURL . 'admin/login.php');
  }
}

?>