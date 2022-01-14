<?php
    //Tạo session
    session_start();
    // login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    if(isset($_POST['btnSignIn'])){
        $email = trim($_POST['txtEmail']);
        $password = trim($_POST['txtPass']);

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','shopee_food');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM khachhang WHERE email = '$email'";

        $result = mysqli_query($conn,$sql);
        $numRows = mysqli_num_rows($result);
        echo $numRows;
        if($numRows > 0){
            //cấp thẻ làm việc
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])) {
                echo $numRows;
                $_SESSION['isLoginOk'] = $email;
                header("location: index.php");
            }
            else {
                $error="mật khẩu của bạn chưa chính xác";
                header("location: login.php?error=$error");
                echo $numRows;
            }
        }else{
            $error="Email hoặc mật khẩu của bạn chưa chính xác";
            header("location: login.php?error=$error");
            echo $numRows;
        }
        //Bước 3: đóng kết nối
        mysqli_close($conn);
        }else{
            header("location:login.php");
        }
?>