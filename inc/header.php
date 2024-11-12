<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath . '/../lib/database.php');
    include_once ($filepath . '/../lib/session.php');
    include_once ($filepath . '/../helper/format.php');
    Session::init();
    include_once ($filepath . '/../classes/user.php');
    include_once ($filepath . '/../classes/topic.php');
    include_once ($filepath . '/../classes/book.php');
    include_once ($filepath . '/../classes/review.php');
    include_once ($filepath . '/../classes/cmt.php');

   
?>
<?php 
    include './config/config.php'; 

    $db = new Database();
    $fm = new Format();
    $book = new Book();
    $rv = new Review();
    $cmt = new Comment();
    $tp = new Topic();
    $user = new Setting();







?>

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
                    <li><a href="./setting.php">Cài đặt</a></li>
                    <li><a class="active nav_menu" href="./index.php">Trang chủ</a></li>
                </ul>
                <ul class="user">
                <?php
                    $user = new Setting();
                    $user_infor = $user->loadUserData();
                    ?>
                    <img width="80%" id="user_img" class="user_img " src="<?php echo $user_infor['Avatar'] ?>" alt="User Avatar">
                    <ul id="user_content" class="user-content">
                        <li class="user_login"><a href="?action=login">Đăng nhập</a></li>
                        <li class="your_rv"><a href="#">Bài viết của bạn</a></li>
                        <?php
                            if(isset($_GET['action']) &&  $_GET['action'] =='logout'){
                                Session::destroy();
                            }
                        ?>
                        <li class="user_logout"><a href="?action=logout">Đăng xuất</a></li>
                    </ul>

                </ul>
            </div>
            
        </div>
    </div>