<?php include './config/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/main.css">
    <link rel="stylesheet" href="./asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <title>Home - Book Review</title>
    
</head>
<body>
    <div class="nav_wrap">
        <div class="grid-container">
            <div class="header">
                <ul class="logo">
                    <img src="./asset/logo/logo.png" alt="logo">
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-3" type="search" placeholder="Bạn tìm kiếm ở đây nha..." aria-label="Tìm kiếm">
                    <button class="btn btn-outline-success" type="submit">Tìm kiếm</button>
                </form>
                <ul class="nav_ul">
                    <li><a href="">Cài đặt</a></li>
                    <!-- <li><a href="#bookreview">Bài review</a></li> -->
                    <!-- <li><a href="#topic">Chủ đề</a></li> -->
                    <li><a class="active nav_menu" href="./index.php">Trang chủ</a></li>
                </ul>
                <ul class="user">
                    <img id="user_img" class="user_img" src="./asset/logo/Screenshot 2024-10-02 at 09.37.04.png" alt="logo">
                    <ul id="user_content" class="user-content">
                        <li class="user_login"><a href="<?php echo BASE_URL; ?>login.php">Đăng nhập</a></li>
                        <li class="your_rv"><a href="<?php echo BASE_URL; ?>yourrv.php">Bài viết của bạn</a></li>
                        <li class="user_logout"><a href="<?php echo BASE_URL; ?>signup.php">Đăng xuất</a></li>
                    </ul>

                </ul>
            </div>
            
        </div>
    </div>