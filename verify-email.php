<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thông báo</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    if ($_GET['key'] && $_GET['token']) {
        require "db.php";
        $email = $_GET['key'];
        $token = $_GET['token'];
        $sql =  "SELECT * FROM `khachhang` WHERE `email_verification_link`='" . $token . "' and `email`='" . $email . "'";
        $query = mysqli_query($conn,$sql);
        $d = date('Y-m-d H:i:s');//tạo ra 1 biến lưu thời gian
        if (mysqli_num_rows($query) > 0) {//có bản ghi nào trong csdl khớp vs thông tin này ko
            $row = mysqli_fetch_array($query);//lấy ra thông tin
            if ($row['email_verified_at'] == NULL) {//KT kh chưa kích hoạt
                $sql2 ="UPDATE khachhang set email_verified_at ='$d',status=1 WHERE email='$email'";
                mysqli_query($conn,$sql2);
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
                User Account Activation by Email Verification using PHP
            </div>
            <div class="card-body">
                <p><?php echo $msg; ?></p>
            </div>
        </div>
    </div>
</body>

</html>