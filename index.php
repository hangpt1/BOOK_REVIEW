<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include_once dirname(__FILE__) . '/inc/header.php';
?>  
<?php
// Kiểm tra và lấy ID của sách và đánh giá (nếu có)
if (isset($_GET['BookID'])) {
    $id = $_GET['BookID'];
}
if (isset($_GET['ReviewID'])) {
    $id = $_GET['ReviewID'];
}

// Khởi tạo biến để lưu kết quả sách
$booksByFilter = null;

// Kiểm tra nếu có bộ lọc chủ đề được chọn
if (isset($_GET['Topic']) && !isset($_GET['star'])) {
    $topic = $_GET['Topic'];
    $booksByFilter = $book->getBookByTopic($topic);
} 
// Kiểm tra nếu có bộ lọc số sao được chọn
elseif (isset($_GET['star']) && !isset($_GET['Topic'])) {
    $starRating = (int)$_GET['star'];
    $booksByFilter = $book->getBooksByStarRating($starRating);
} 
// Nếu không có bộ lọc nào được chọn, hiển thị tất cả sách
else {
    $booksByFilter = $book->showBook();
}

?> 

<div class="container main_content">
    <!-- Bộ lọc -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 ">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid hover">
                    <a class="navbar-brand" href="#">Lọc theo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <form method="GET" action="">
                                <!-- Bộ lọc theo chủ đề -->
                                <select style="width: 150px;" class="form-select mx-2" aria-label="Default select example" name="Topic" onchange="this.form.submit()">
                                    <option selected>Chủ đề</option>
                                    <option value="1" <?php if(isset($_GET['Topic']) && $_GET['Topic'] == 1) echo 'selected'; ?>>Self_Help</option>
                                    <option value="2" <?php if(isset($_GET['Topic']) && $_GET['Topic'] == 2) echo 'selected'; ?>>Kinh tế</option>
                                    <option value="3" <?php if(isset($_GET['Topic']) && $_GET['Topic'] == 3) echo 'selected'; ?>>Tiểu Thuyết</option>
                                    <option value="4" <?php if(isset($_GET['Topic']) && $_GET['Topic'] == 4) echo 'selected'; ?>>Lịch sử</option>
                                    <option value="5" <?php if(isset($_GET['Topic']) && $_GET['Topic'] == 5) echo 'selected'; ?>>Khoa học</option>
                                    <option value="6" <?php if(isset($_GET['Topic']) && $_GET['Topic'] == 6) echo 'selected'; ?>>Kinh Dị</option>
                                </select>
                            </form>
                            <form method="GET" action="">
                                <!-- Bộ lọc theo sao -->
                                <select style="width: 150px;" class="form-select mx-3" name="star" onchange="this.form.submit()">
                                    <option selected>Số sao</option>
                                    <option value="1" <?php if(isset($_GET['star']) && $_GET['star'] == 1) echo 'selected'; ?>>1 Sao</option>
                                    <option value="2" <?php if(isset($_GET['star']) && $_GET['star'] == 2) echo 'selected'; ?>>2 Sao</option>
                                    <option value="3" <?php if(isset($_GET['star']) && $_GET['star'] == 3) echo 'selected'; ?>>3 Sao</option>
                                    <option value="4" <?php if(isset($_GET['star']) && $_GET['star'] == 4) echo 'selected'; ?>>4 Sao</option>
                                    <option value="5" <?php if(isset($_GET['star']) && $_GET['star'] == 5) echo 'selected'; ?>>5 Sao</option>
                                </select>
                            </form>
                        </ul>
                    </div>
                </div>
            </nav>
            <hr>
        </div>
    </div>
    <!-- Hết bộ lọc -->
    
    <!-- Phần content chính -->
    <div class="row py-1">
        <div class="col-1"></div>
        <div class="col-10 ">
            <div class="row">
                <div class="col-8">
                    <div class="row py-1">
                        <!-- Lọc theo chủ đề -->
                        <?php
                            if(isset($_GET['Topic'])){
                                $topic = $_GET['Topic'];
                                $book_in_topic = $book->getBookByTopic($topic);
                                if($book_in_topic){
                                    while($book_in_topic_rs = $book_in_topic->fetch_assoc()){
                        ?>
                        <div class="col-3">
                            <div class="card" style="width: 100%; height:320px">
                                <img class="py-3" style="width: 100%; height: 100%; object-fit: cover;" src="ad_review/uploads/<?php echo $book_in_topic_rs['Img_product'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="bdetail.php?BookID=<?php echo $book_in_topic_rs['BookID']; ?>"><?php echo $book_in_topic_rs['Bookname'] ?></a></h5>
                                </div>
                            </div>
                        </div>
                        <?php
                                    }
                                } else {
                                    echo "<p>Không có sách nào thuộc chủ đề này.</p>";
                                }
                            }
                        ?>
                        <!-- Lọc theo sao -->
                        <?php
                            if ($booksByFilter) {
                                while ($booksByStar_rs = $booksByFilter->fetch_assoc()) {
                        ?>
                        <div class="col-3">
                            <div class="card" style="width: 100%; height:320px">
                                <img class="py-3" style="width: 100%; height: 100%; object-fit: cover;" src="ad_review/uploads/<?php echo $booksByStar_rs['Img_product'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="bdetail.php?BookID=<?php echo $booksByStar_rs['BookID']; ?>"><?php echo $booksByStar_rs['Bookname'] ?></a></h5>

                                    <!-- <p class="text-success">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p> -->
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            } else {
                                echo "<p>Không có sách nào theo bộ lọc này.</p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-1"></div> -->
    </div>
</div>

<?php include './inc/footer.php' ?>
