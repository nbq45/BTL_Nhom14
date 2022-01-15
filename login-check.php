<?php 
    //AUthorization - Access COntrol
    //CHeck whether the user is logged in or not
    if(!isset($_SESSION['isLoginOk'])) //IF user session is not set
    {
        //User is not logged in
        //REdirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to access Admin Panel.</div>";
        //REdirect to Login Page
        if (headers_sent()) {
            die("Chưa đăng nhập, vui lòng bấm vào link này hoặc bấm nút để đăng nhập: <a href=login.php>Đăng nhập<a/>");
        }
        else{
            exit(header("Location: login.php"));
        }
    }
    
?>