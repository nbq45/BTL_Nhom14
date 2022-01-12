<?php
    //Tạo session
    session_start();
    // login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    if(isset($_POST['btnSignIn'])){
        $email = $_POST['txtEmail'];
        $password = $_POST['txtPass'];

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','shopee_food');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM khachhang WHERE email = '$email'AND password='$password'";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            //cấp thẻ làm việc
            $_SESSION['isLoginOk']=$email;
            header("location: index.php");
        }else{
            $error="Email hoặc mật khẩu của bạn chưa chính xác";
            header("location: login.php?error=$error");
        }
        //Bước 3: đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:login.php");
    }
?>