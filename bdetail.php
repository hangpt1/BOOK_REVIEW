<?php
    include './inc/header.php'
?> 
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>
<?php
    $userID = Session::get('UserID');
    // Tạo một ReviewID mới
    if (!isset($_GET['BookID']) || $_GET['BookID'] == NULL) {
        echo "<script>window.location = 'writerv.php'</script>";
    } else {
        $bookId = $_GET['BookID'];
    }
    $newReviewID = $rv->generateNewReviewId(); // Lấy ReviewID mới
  
    // Kiểm tra xem $newReviewID có giá trị hợp lệ không
    if (!isset($newReviewID) || empty($newReviewID)) {
        echo "<script>alert('ID review không hợp lệ!');</script>";
    }

    // Thêm ReviewID vào cơ sở dữ liệu
    // $rv->addReview($bookId, $userID, $newReviewID);

    $rv = new Review();
    // $fm = new Format();
    if(isset($_GET['ReviewID'])){
        $id = $_GET['ReviewID'];
    }
?>
<!-- Hiển thị sách lên -->
<?php
    $book = new Book();
    $rv = new Review();

    if(!isset($_GET['BookID']) || $_GET['BookID']== NULL){
        echo "<script>window.location = 'bdetail.php'</script>";
    }else{
        $id = $_GET['BookID'];
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $bookDetail = $book->showBook($_POST, $_FILES, $id);
        // dựa vào id để hiển thị lên
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $rvDetail = $rv->showReview_home($_POST);
        // dựa vào id để hiển thị lên review
    }

?>
                <?php
                    $get_book_by_id = $book->getBookById($id);
                    if ($get_book_by_id){
                        while($result_book = $get_book_by_id->fetch_assoc()){
                ?>
                <form class='addsach' action="" method="POST" enctype="multipart/form-data">
                    <div class="review-detail-container">
                        <div class="review-header">
                            <div class="image-container">
                                <a href="./bdetail.php"><img id="book-image" src="ad_review/uploads/<?php echo $result_book['Img_product'] ?>"></a>
                            </div>
                            <div class="info-container">
                                <p class="book-title">Tên Cuốn Sách: <span id="book-title"><?php echo $result_book['Bookname'] ?></span></p>
                                <p class="author">Tác giả: <span id="author-name"><?php echo $result_book['Author'] ?></span></p>
                                <p class="author">Năm xuất bản: <span id="author-name"><?php echo $result_book['Published_year'] ?></span></p>
                                <p class="genre">Thể loại: <span id="genre"><?php $tp = new Topic();
                                    $tp_list = $tp->showTopic();
                                    // Duyệt qua tất cả các topic để tìm topic phù hợp
                                    while($tp_result = $tp_list->fetch_assoc()) {
                                        if ($result_book['Topic'] == $tp_result['TopicID']){
                                            echo $tp_result['Topicname'];
                                            break;
                                        }
                                    } ?></span>
                                </p>
                            </div>
                        </div>

                        <div class="review-content">
                            <h2>Mô tả </h2>
                            <p id="review-text"><?php echo $result_book['De'] ?></p>
                        </div>
                        <!-- nếu như nhấn nút đăng thì sẽ chuyển sang trang writerv và gắn cho trang đó idbook vaf id userr của sách và rv vừa tạo -->
                        
                        <div class="rv-section">
                        <a href="writerv.php?ReviewID=<?php echo $newReviewID; ?>&BookID=<?php echo $result_book['BookID']; ?>&UserID=<?php echo $userID; ?>">
                            <input type="button" value="Đăng bài review cuốn sách này" class="submit">
                        </a>
                        </div>
                    </div>
                </form>
                <?php
                        }
                    }
                ?>
        <!--Những bài rv gần đây  -->
        <div class="review-detail-container">
            <div class="user-info">
                <img src="https://shophoavungtau.com/wp-content/uploads/2023/07/y-nghia-hoa-tulip.jpg" alt="Avatar của Phạm Ngọc Ánh">
                <div class="user-details">
                <span class="user-name">Phạm Ngọc Ánh</span>
                <span class="user-info-detail">Đăng ngày 24 thg 06, 2024</span>
                </div>
            </div>

            

            <div class="review-content">
                <h2>Nội Dung Review</h2>
                <p id="review-text">Cuốn sách làm bừng sáng độc giả trên toàn thế giới May mắn là một khái niệm trừu tượng, nhưng rất gần gũi với cuộc sống và  được coi như một tác nhân bí ẩn góp phần vào các mặt hoạt động của con người. Từ xưa đến nay, nhiều học giả, nhiều nhà nghiên cứu trên thế giới đã bỏ công nghiên cứu, tìm kiếm và hy vọng có thể nắm bắt được chìa khóa để mở cánh cửa của May mắn. Con người đã tìm đủ mọi cách từ tìm kiếm, đến cầu nguyện, bùa chú nhưng may mắn vẫn mãi mãi là khái niệm tồn tại trong ý thức con người như một vị thần linh lúc ẩn, lúc hiện.  

                    Nghiên cứu cuộc sống dưới góc nhìn của tâm lý học Alex Rovira và Fernando Trías de Bes đã phát hiện được “dấu chân của thần may mắn” mà ai cũng có thể tìm gặp. Cuốn sách của hai ông Good Luck – Bí mật của may mắn là tập hợp những câu chuyện lạ thường hướng đến một bài học vô cùng giá trị về cuộc sống: Sự may mắn không xuất hiện ngẫu nhiên trong hành trình cuộc sống chúng ta; chính chúng ta phải tìm và tạo ra những điều kiện để may mắn tìm đến với mình.
                    
                    Dưới ngòi bút của Alex Rovira và Fernando Trías de Bes - hai nhà tư vấn tâm lý và tiếp thị hàng đầu thế giới đã có công trình nghiên cứu về thái độ, hành vi con người cũng như ước mong, niềm tin của họ đối với sự may mắn, dẫn đến thành công trong cuộc sống, xoay quanh 12 bí mật nhỏ, vừa kể chuyện, vừa trích dẫn châm ngôn triết lí những câu chuyện giản dị này có thể được áp dụng rất rộng rãi cho tất cả mọi người và có khả năng khích lệ tinh thần, thái độ sống một cách độc đáo.  </p>
                
                
            </div>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['comment'])) {
                $comment = $_POST['comment'];
                $userID = Session::get('UserID'); // Lấy ID người dùng từ session hoặc sửa theo hệ thống của bạn
                $rv = $rvDetail['ReviewID'];

                // Chuẩn bị truy vấn SQL
                $query = "INSERT INTO comments (UserID, ReviewID, Comment, Create_at) VALUES ($userID,$rv, $comment, date('Ymd H:i:s'))";
                $stmt = $db->select($query);
                $stmt->bind_param("iis", $userID, $bookID, $comment);
                
                // Thực thi truy vấn và kiểm tra kết quả
                if ($stmt->execute()) {
                    echo "success"; // Bình luận đã lưu thành công
                } else {
                    echo "error"; // Lỗi lưu bình luận
                }
            }
            ?>
            <form class='' action="" method="POST" enctype="multipart/form-data">
                
                <div class="comments-section">
                    <h2>Bình luận</h2>
                    <p>Vui lòng bình luận văn minh*</p>
                    <div id="comments-container">
                        </div>
                        <form action="submit_comment.php" method="POST" id="comment-form">
                            <textarea id="comment" name="comment" class="input" placeholder="Thêm bình luận của bạn" rows="1" required></textarea>
                            <input type="submit" name="submit" class="submit" value="Bình luận" onclick="return confirmSubmission()">
                        </form>

                </div>
            </form>
        </div>
<?php
    include './inc/footer.php'
?>  
