<?php
if (isset($_POST['btnSignUp']) && $_POST['email']) {
    
    require "db.php";
    
    $result = mysqli_query($conn,"SELECT * FROM db_nguoidung WHERE email='" . $_POST['email'] . "'"  );
    $row = mysqli_num_rows($result);
    if ($row <= 0) {
        $token = md5($_POST['email']) . rand(10, 9999);

        echo $token;
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(username, email, email_verification_link ,password) VALUES('$username', '$email', '$token', '$pass')";
        mysqli_query($conn, $sql);
        $link = "<a href='http://localhost/BTL_Nhom14/email-verification/verify-email.php?key=" . $_POST['email'] . "&token=" . $token . "'>Click and Verify Email</a>";
       
        include "send_mail.php";
        if(sendEmailForAccountActive($email, $link)) {
            echo "Đăng ký thành công, vui lòng kiểm tra hộp thư của bạn để kích hoạt tài khoản.";
        }else {
            echo "Xin lỗi, Email chưa được gửi đi, vui lòng kiểm tra lại thông tin.";
        }

    } 
    else {
        echo "You have already registered with us. Check Your email box and verify email.";
    }
}

?>