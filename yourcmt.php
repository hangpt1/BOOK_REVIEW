<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/main.css">
    <title>Bình luận của bạn - Book Review</title>
    <script>
        function confirmSubmission() {
            const confirmation = confirm("Bạn có chắc chắn muốn đăng không?");
            return confirmation; // Trả về true hoặc false
        }

        // Hiệu ứng cho các input khi focus
        function addFocusEffect(input) {
            input.classList.add('focus');
        }

        function removeFocusEffect(input) {
            if (input.value === '') {
                input.classList.remove('focus');
            }
        }
    </script>
</head>
<body>
    


<!-- ------- -->


    <div class="nav_wrap">
        <div class="grid-container">
            <div class="header">
                <ul class="logo">
                    <img src="./asset/logo/logo.png" alt="logo">
                </ul>
                <ul class="nav_ul">
                    <li><a href="#book">Tủ sách</a></li>
                    <li><a href="#bookreview">Bài review</a></li>
                    <li><a href="#topic">Chủ đề</a></li>
                    <li><a class="active" href="#home">Trang chủ</a></li>
                </ul>
                <ul class="user">
                    <img id="user_img" class="user_img" src="./asset/logo/Screenshot 2024-10-02 at 09.37.04.png" alt="logo">
                    <ul id="user_content" class="user-content">
                        <li class="your_rv">Bài viết của bạn</li>
                        <li class="your_cmt">Bình luận của bạn</li>
                        <li class="user_logout">Đăng xuất</li>
                        <li class="user_setting">Cài đặt</li>
                    </ul>

                </ul>
            </div>
            
        </div>
    </div>

    <div class="box">
        <div class="container">
            <div class="top-header">
                <h1>Bình luận của bạn</h1>
            </div>

            <ul class="cmt_list">
                <li class="rv_content">
                    <div class="rv_img">
                        <img src="./image_book/Bạn không thông minh lắm đâu.jpg" alt="ảnh sách">

                    </div>
                    <h5>Tên bài viết...</h5>
                    <p>Thời gian đăng</p>
                </li>
                <li class="rv_content">
                    <div class="rv_img">
                        <img src="./image_book/Bạn không thông minh lắm đâu.jpg" alt="ảnh sách">

                    </div>
                    <h5>Tên bài viết...</h5>
                    <p>Thời gian đăng</p>
                </li>
                
                
            </ul>
        
            
        </div>
    </div>


    <script>
        document.getElementById("user_img").addEventListener("click", function() {
    var userMenu = document.getElementById("user_content");
    if (userMenu.style.display === "block") {
        userMenu.style.display = "none";
    } else {
        userMenu.style.display = "block";
    }
});

// Đóng menu dropdown khi click ra ngoài
window.onclick = function(event) {
    if (!event.target.matches('.user_img')) {
        var userMenus = document.getElementsByClassName("user-content");
        for (var i = 0; i < user_content.length; i++) {
            var openMenu = user_content[i];
            if (openMenu.style.display === "block") {
                openMenu.style.display = "none";
            }
        }
    }
}
    </script>
</body>
</html>
