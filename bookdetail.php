<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bookdetail.css">
    <title>Chi Tiết Bài Review Sách</title>
</head>
<body>
    <div class="page-banner-section section bg-gray" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col" bis_skin_checked="1">

                    <div class="page-banner text-center" bis_skin_checked="1">
                        <h1>CHI TIẾT BÀI REVIEW</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="./">Trang chủ</a></li>
                            <li>Chi tiết review</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="review-detail-container">
        <div class="user-info">
            <img src="https://shophoavungtau.com/wp-content/uploads/2023/07/y-nghia-hoa-tulip.jpg" alt="Avatar của Phạm Ngọc Ánh">
            <div class="user-details">
              <span class="user-name">Phạm Ngọc Ánh</span>
              <span class="user-info-detail">Đăng ngày 24 thg 06, 2024</span>
            </div>
        </div>

        <div class="review-header">
            <div class="image-container">
                <img id="book-image" src="https://nhasachphuongnam.com/images/detailed/205/bi-mat-cua-may-man-kho-lon.jpg" alt="Ảnh bìa cuốn sách">
            </div>
            <div class="info-container">
                <h2 id="review-title">Tiêu đề: <span>Bí quyết thành công và may mắn của Max</span></h2>
                <p class="book-title">Tên Cuốn Sách: <span id="book-title">Bí mật của may mắn</span></p>
                <p class="author">Tác giả: <span id="author-name">Alex Rovira</span></p>
                <p class="genre">Thể loại: <span id="genre">Sách tự lực</span></p>
            </div>
        </div>

        <div class="review-content">
            <h2>Nội Dung Review</h2>
            <p id="review-text">Cuốn sách làm bừng sáng độc giả trên toàn thế giới May mắn là một khái niệm trừu tượng, nhưng rất gần gũi với cuộc sống và  được coi như một tác nhân bí ẩn góp phần vào các mặt hoạt động của con người. Từ xưa đến nay, nhiều học giả, nhiều nhà nghiên cứu trên thế giới đã bỏ công nghiên cứu, tìm kiếm và hy vọng có thể nắm bắt được chìa khóa để mở cánh cửa của May mắn. Con người đã tìm đủ mọi cách từ tìm kiếm, đến cầu nguyện, bùa chú nhưng may mắn vẫn mãi mãi là khái niệm tồn tại trong ý thức con người như một vị thần linh lúc ẩn, lúc hiện.  

                Nghiên cứu cuộc sống dưới góc nhìn của tâm lý học Alex Rovira và Fernando Trías de Bes đã phát hiện được “dấu chân của thần may mắn” mà ai cũng có thể tìm gặp. Cuốn sách của hai ông Good Luck – Bí mật của may mắn là tập hợp những câu chuyện lạ thường hướng đến một bài học vô cùng giá trị về cuộc sống: Sự may mắn không xuất hiện ngẫu nhiên trong hành trình cuộc sống chúng ta; chính chúng ta phải tìm và tạo ra những điều kiện để may mắn tìm đến với mình.
                
                Dưới ngòi bút của Alex Rovira và Fernando Trías de Bes - hai nhà tư vấn tâm lý và tiếp thị hàng đầu thế giới đã có công trình nghiên cứu về thái độ, hành vi con người cũng như ước mong, niềm tin của họ đối với sự may mắn, dẫn đến thành công trong cuộc sống, xoay quanh 12 bí mật nhỏ, vừa kể chuyện, vừa trích dẫn châm ngôn triết lí những câu chuyện giản dị này có thể được áp dụng rất rộng rãi cho tất cả mọi người và có khả năng khích lệ tinh thần, thái độ sống một cách độc đáo.  </p>
            
            <div class="video-container">
                <h3>Video review (Nếu có)</h3>
                <video id="review-video" controls>
                    <source src="path/to/video.mp4" type="video/mp4">
                    Trình duyệt của bạn không hỗ trợ video.
                </video>
            </div>
        </div>

        <div class="comments-section">
            <h2>Bình luận</h2>
            <p>Vui lòng bình luận văn minh*</p>
            <form action="#" method="POST" id="comment-form">
                <textarea id="comment" class="input" placeholder="Thêm bình luận của bạn" rows="3" required></textarea>
                <input type="submit" value="Đăng Bình Luận" class="submit">
            </form>

        </div>
    </div>
</body>
<script>
    document.getElementById("comment-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Ngăn trang reload lại khi gửi form

        // Lấy giá trị bình luận từ textarea
        const commentInput = document.getElementById("comment");
        const commentText = commentInput.value;

        // Tạo một phần tử mới để hiển thị bình luận
        const newComment = document.createElement("div");
        newComment.classList.add("comment");
        newComment.textContent = commentText;

        // Thêm bình luận mới vào phần bình luận
        const commentsSection = document.querySelector(".comments-section");
        commentsSection.appendChild(newComment);

        // Xóa nội dung trong ô nhập sau khi gửi bình luận
        commentInput.value = "";
        });
</script>
</html>
