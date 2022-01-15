<?php
    session_start();

    if(isset($_SESSION['isLoginOk'])){
        unset($_SESSION['isLoginOk']);
        header("location:index.php");
    }

?>