<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/main.css">
    <link rel="stylesheet" href="./asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <title>Home - Book Review</title>
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
        
    <div class="container main_content">

        <!-- Bộ lọc -->
        <div class="row">
            <div class="col-1">
                
            </div>
            <div class="col-8 ">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid hover">
                        <a class="navbar-brand" href="#">Lọc theo</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Tất cả</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Chủ đề
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Tiểu Thuyết</a></li>
                                    <li><a class="dropdown-item" href="#">Self-help</a></li>
                                    <li><a class="dropdown-item" href="#">Lịch sử</a></li>
                                    <li><a class="dropdown-item" href="#">Kinh tế</a></li>
                                    <li><a class="dropdown-item" href="#">Khoa học</a></li>
                                    <li><a class="dropdown-item" href="#">Kinh Dị</a></li>


                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Số sao
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-star"></i><i class="fas fa-star"></i></a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-star"></i></a></li>
                                </ul>
                            </li>
                            
                        </ul>
                        </ul>
                        
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Phần content chính  -->
        <div class="row py-1">
            <div class="col-1">
            </div>
            <div class="col-10 ">
                <div class="row">
                    <div class="col-8">
                        <!-- dòng 1 -->
                        
                        <div class="row py-1">
                            <!-- SÁCH 1 -->
                            <div class="col-3">
                                <div class="card " style="width: 100%; height:320px">
                                    <img class="py-3" src="./image_book/Khi lỗi thuộc về những vì sao.jpg" class="card-img-top" alt="Ai lấy miếng pho mát của tôi">
                                    <div class="card-body">
                                        <div class="col">
                                            <div class="row">
                                                <h5 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;" class="card-title" class="card-title">Ai lấy miếng pho mát của tôi</h5>
                                            </div>
                                            <div class="r">
                                                <p class="text-success"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SÁCH 2 -->
                            <div class="col-3">
                                <div class="card " style="width: 100%; height:320px">
                                    <img class="py-3" src="./image_book/Càng độc lập, càng cao quý.jpg" class="card-img-top" alt="Bạn không thông minh lắm đâu">
                                    <div class="card-body">
                                        <div class="col">
                                            <div class="row">
                                                <h5 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;" class="card-title">Bạn không thông minh lắm đâu</h5>
                                            </div>
                                            <div>
                                                <p class="text-success"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card " style="width: 100%; height:320px">
                                    <img class="py-3" src="./image_book/Càng độc lập, càng cao quý.jpg" class="card-img-top" alt="Bạn không thông minh lắm đâu">
                                    <div class="card-body">
                                        <div class="col">
                                            <div class="row">
                                                <h5 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;" class="card-title">Bạn không thông minh lắm đâu</h5>
                                            </div>
                                            <div >
                                                <p class="text-success"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card " style="width: 100%; height:320px">
                                    <img class="py-3" src="./image_book/Càng độc lập, càng cao quý.jpg" class="card-img-top" alt="Bạn không thông minh lắm đâu">
                                    <div class="card-body">
                                        <div class="col">
                                            <div class="row">
                                                <h5 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;" class="card-title">Bạn không thông minh lắm đâu</h5>
                                            </div>
                                            <div >
                                                <p class="text-success"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      
                        </div>
                
                    </div>
                    <div class="col-4">
                        <div class="row py-1">
                            <div class="card" style="width: 400px">
                                <img class="py-3" src="./image_book/Bạn không thông minh lắm đâu.jpg" class="card-img-top" alt="Bạn không thông minh lắm đâu.jpg">
                                <div class="card-body">
                                    <h5 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;" class="card-title" class="card-title">Bạn không thông minh lắm đâu</h5>
                                    <p style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;" class="card-title" class="card-text">Đây là nội dung bài đăng Đây là nội dung bài đăng Đây là nội dung bài đăng Đây là nội dung bài đăng Đây là nội dung bài đăng</p>
                                    <small>3 giờ trước</small><br>
                                    <a href="#" class="btn btn-primary">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="card" style="width: 400px">
                                <img class="py-3" src="./image_book/Bạn không thông minh lắm đâu.jpg" class="card-img-top" alt="Bạn không thông minh lắm đâu.jpg">
                                <div class="card-body">
                                    <h5 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;" class="card-title" class="card-title">Bạn không thông minh lắm đâu</h5>
                                    <p style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;" class="card-title" class="card-text">Đây là nội dung bài đăng Đây là nội dung bài đăng Đây là nội dung bài đăng Đây là nội dung bài đăng Đây là nội dung bài đăng</p>
                                    <small>3 giờ trước</small><br>
                                    
                                    <a href="#" class="btn btn-primary">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>

        
                </div>
            </div>
            <div class="col-1">
                
            </div>
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
    <script src="./asset/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
