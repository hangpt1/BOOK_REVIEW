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
        <h3>Menu</h3>
        <a href="./index.php" class="link-box">Trang chủ</a>
                <br>
                <a href="#" onclick="toggleDropdown()" class="link-box">Quản lý bài viết</a>
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
    <h1><b>DANH SÁCH BÀI VIẾT</b></h1>
<table class="product-items">
    <thead>
        <tr>
            <th class="product-prop product-img">Ảnh</th>
            <th class="product-prop product-name">ID sách</th>
            <th class="product-prop product-name">Tên sách</th>
            <th class="product-prop product-name">Tác giả</th>
            <th class="product-prop product-name">Nội dung</th>
            <th class="product-prop product-button">Chủ đề</th>
            <th class="product-prop product-time">Ngày tạo</th>
            <th class="product-prop product-time">Năm xuất bản</th>
            <th class="product-prop product-button">Xóa</th>
            <th class="product-prop product-button">Sửa</th>
        </tr>
    </thead>
    <tbody>
        <!-- Thêm các hàng dữ liệu ở đây -->
        <tr>
            <td><img src="avt.png" alt="" /></td>
            <td>1</td>
            <td>Tên sách A</td>
            <td>Tác giả A</td>
            <td>Nội dung</td>
            <td>Chủ đề</td>
            <td>01/01/2024</td>
            <td>2024</td>
            <td><button>Xóa</button></td>
            <td><button>Sửa</button></td>
        </tr>
        <!-- Các dòng khác -->
    </tbody>
</table>
            
            <div class="clear-both"></div>
        </div>
    
</body>
</html>