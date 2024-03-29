<?php 

    include('../config/constants-admin.php'); 
    include('login-check.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="icon" href="https://play-lh.googleusercontent.com/fko7CWIlc9o4q8nqFetgP91cndXongixh1t6ZvkrJvrDStrqaC--WnZw_3e0FIYpug" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Shopeefood - Administration</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="manage-food.php">Món ăn</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-dark" href="manage-store.php">Cửa Hàng</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-dark" href="manage-order.php">Đơn Hàng</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-dark" href="manage-user.php">Người Dùng</a>
                    </li>
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo '<li class="nav-item">';
                            echo "<a class='nav-link fw-bold'>Welcome: ".$_SESSION['user']."</a>";
                            echo '</li>';
                            echo '<li class="nav-item">';
                            echo "<a class='nav-link text-danger' href='logout.php'>Đăng xuất</a>";
                            echo '</li>';
                        }

                    ?>
                    
                </ul>
                
                </div>
            </div>
            </nav>
        </div>
    </header>