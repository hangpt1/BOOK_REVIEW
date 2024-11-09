<?php
    include '../lib/session.php';
    Session::checkSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Admin</title>
</head>
<body>

<div class="container">
    <div class="menu">
        <div class="container1">
            <h3><b>Menu</b></h3>
            <a href="./index.php" class="link-box">Trang chủ</a>
            <br>
            <a href="qlbv.php" class="link-box">Quản lý sách</a>
            <br>
            <a href="./qlrv.php" class="link-box">Quản lý Review</a>
            <br>
            <a href="./qlcmt.php" class="link-box">Quản lý Bình luận</a>
            <br>
            <?php
            if(isset($_GET['action']) &&  $_GET['action'] =='logout'){
                Session::destroyAd();
            }
            ?>
            <a href="?action=logout" class="link-box">Đăng xuất</a>
        </div>
    </div>

    