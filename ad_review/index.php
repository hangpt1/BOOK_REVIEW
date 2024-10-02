<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    
<script>
    function toggleDropdown() {
    var dropdown = document.getElementById("dropdown");
    if (dropdown.style.display === "none" || dropdown.style.display === "") {
        dropdown.style.display = "block"; // Hiển thị dropdown khi bấm
    } else {
        dropdown.style.display = "none"; // Ẩn dropdown nếu bấm lại
    }
}
</script>
<div class="container">
    <div class="menu">
    <div class="container1">
        <h3><b>Menu</b></h3>
                <a href="./index.php" class="link-box">Trang chủ</a>
                <br>
                <a href="qlbv.php" onclick="toggleDropdown()" class="link-box">Quản lý bài viết</a>
                <ul id="dropdown" class="dropdown">
                  <li class="dropdown-link"><a class="linkdr" href="#">Thêm bài viết</a></li>
                </ul>
                <br>
                <a href="./qlrv.php" class="link-box">Quản lý Review</a>
                <br>
                <a href="./qlcmt.php" class="link-box">Quản lý Bình luận</a>
                <br>
                <a href="./logout.php" class="link-box">Đăng xuất</a>
            </div>
    </div>
    
    <div class="main-content">
    <h1><b>TRANG CHỦ</b></h1>
    <div class="dashboard">
    <div class="box category">
        <h2>150</h2>
        <p>BÀI ĐĂNG</p>
    </div>
    <div class="box posts">
        <h2>53</h2>
        <p>ĐÁNH GIÁ</p>
    </div>
    <div class="box members">
        <h2>44</h2>
        <p>THÀNH VIÊN</p>

    </div>
    <div class="box comments">
        <h2>65</h2>
        <p>BÌNH LUẬN</p>

    </div>
</div>
        </div>
    
</body>
</html>