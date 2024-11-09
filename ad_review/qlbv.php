<?php
    include './inc/sidebar.php';
?>
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