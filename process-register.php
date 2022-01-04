<?php
if(isset($_POST['btnRegister']) && $_POST['email'])
{   
    //gọi lại đoạn kết nối vs db
    require "db.php";
    //thực hiện truy vấn
    $result = mysqli_query($conn,"SELECT * FROM khachhang WHERE email='" . $_POST['email'] . "'");

    if(mysqli_num_rows($result) <= 0)//kiểm tra email chưa được dùng
    {
        $token = md5($_POST['email']).rand(10,9999);
        //lưu lại thông tin đăng ký
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $sql = "INSERT INTO khachhang(name, email, email_verification_link ,password, address, phone) VALUES('$name','$email','$token','$password','$address','$phone')";
        mysqli_query($conn, $sql);
        //sau khi lưu xong, cần gửi tới mail đăng ký 1 đg link tới website
        //yêu cầu người dùng nhấp để kích hoạt; biến link sẽ gửi vào email
        $link = "<a href='http://localhost/GitHub/BTL_NHOM14/verify-email.php?key=".$email."&token=".$token."'>Nhấp vào đây để kích hoạt</a>";
        //quá trình gửi email
        include "send_mail.php";
        if(sendEmailForAccountActive($email,$link)){
            echo "Vui lòng kiểm tra Email của bạn để kích hoạt tài khoản";
        }else{
            echo "Xin lỗi, Email chưa được gửi đi. Vui lòng kiểm tra lại thông tin đăng ký tài khoản";
        }
    }
    else
    {
        echo "Bạn đã đăng ký thành công. Vui lòng xác nhận Email của bạn.";
    }
}
?>