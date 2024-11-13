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
    <script>
        
        
    document.addEventListener('DOMContentLoaded', function() {
        const topicSelect = document.getElementById('topicSelect');
        const filterRating = document.getElementById('filterRating');

        const searchForm = document.getElementById('searchForm');
        const searchInput = document.getElementById('searchInput');

        if (topicSelect) {
            topicSelect.addEventListener('change', function() {
                console.log('Topic selected:', this.value); // Log để kiểm tra giá trị được chọn
                const selectedTopicID = this.value;
                if (selectedTopicID) {
                    window.location.href = `index.php?topic_id=${selectedTopicID}`;
                }
            });
        }

        if (filterRating) {
            filterRating.addEventListener('change', function() {
                const rating = this.value;
                if (rating) {
                    window.location.href = `index.php?rating=${rating}`;
                }
            });
        }

        

        searchForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Ngừng hành động mặc định của form (không tải lại trang)

            const searchQuery = searchInput.value.trim(); // Lấy giá trị tìm kiếm và loại bỏ khoảng trắng thừa
            
            window.location.href = `index.php?text=${searchQuery}`;
            
        });


    });
</script>
</head>
<body>

    <div class="nav_wrap">
        <div class="grid-container">
            <div class="header">
                <ul class="logo">
                    <a href="index.php"><img src="./asset/logo/logo.png" alt="logo"></a>
                </ul>
                <form class="d-flex" role="search" id="searchForm">
                    <input class="form-control me-3" type="search" placeholder="Bạn tìm kiếm ở đây nha..." aria-label="Tìm kiếm" id="searchInput">
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