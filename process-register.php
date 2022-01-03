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
        $link = "<a href='http://BTL_NHOM14/verify-email.php?key=".$email."&token=".$token."'>Nhấp vào đây để kích hoạt</a>";
        //quá trình gửi email
        include "send_mail.php";
        if(sendEmailForAccountActive($email,$link)){
            echo "Vui lòng kiểm tra Email của bạn để kích hoạt tài khoản";
        }else{
            echo "Xin lỗi, Email chưa được gửi đi. Vui lòng kiểm tra lại thông tin đăng ký tài khoản";
        }
        //require_once('phpmail/PHPMailerAutoload.php');
        //$mail = new PHPMailer();
        //$mail->CharSet =  "utf-8";
        //$mail->IsSMTP();
        // enable SMTP authentication
        //$mail->SMTPAuth = true;                  
        // GMAIL username
        //$mail->Username = "your_email_id@gmail.com";
        // GMAIL password
        //$mail->Password = "your_gmail_password";
        //$mail->SMTPSecure = "ssl";  
        // sets GMAIL as the SMTP server
        //$mail->Host = "smtp.gmail.com";
        // set the SMTP port for the GMAIL server
        //$mail->Port = "465";
        //$mail->From='your_gmail_id@gmail.com';
        //$mail->FromName='your_name';
        //$mail->AddAddress('reciever_email_id', 'reciever_name');
        //$mail->Subject  =  'Reset Password';
        //$mail->IsHTML(true);
        //$mail->Body    = 'Click On This Link to Verify Email '.$link.'';
        //if($mail->Send())
        //{
            //echo "Check Your Email box and Click on the email verification link.";
        //}
        //else
        //{
            //echo "Mail Error - >".$mail->ErrorInfo;
        //}
    }
    else
    {
        echo "Bạn đã đăng ký thành công. Vui lòng xác nhận Email của bạn.";
    }
}
