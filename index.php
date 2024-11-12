<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include_once dirname(__FILE__) . '/inc/header.php';
?>  
<?php
    if(isset($_GET['BookID'])){
        $id = $_GET['BookID'];
    }
?> 
<?php
    if(isset($_GET['ReviewID'])){
        $id = $_GET['ReviewID'];
    }
?> 

    <div class="container main_content">

        <!-- Bộ lọc -->
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-10 ">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid hover">
                        <a class="navbar-brand" href="#">Lọc theo</a>
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Chủ đề -->
                                <form method="GET" action="">
                                <select style="width: 150px;" class="form-select mx-2" aria-label="Default select example" name="Topic" onchange="this.form.submit()">
                                    <option selected>Chủ đề</option>
                                    <option name="1" value="1">Self_Help</option>
                                    <option name="2" value="2">Kinh tế</option>
                                    <option name="3" value="3">Tiểu Thuyết</option>
                                    <option name="4" value="4">Lịch sử</option>
                                    <option name="5" value="5">Khoa học</option>
                                    <option name="6" value="6">Kinh Dị</option>
                                </select>
                                </form>
                                <!-- số sao -->
                                <select style="width: 150px;" class="form-select mx-3" aria-label="Default select example" name="star" onchange="this.form.submit()">
                                    <option selected>Số sao</option>
                                    <option name="5" value="1">5</option>
                                    <option name="4" value="2">4</option>
                                    <option name="3" value="3">3</option>
                                    <option name="2" value="3">2</option>
                                    <option name="1" value="3">1</option>
                                </select>
                                
                                
                            </ul>
                        </ul>
                        
                        </div>
                    </div>
                </nav>
                <hr>
            </div>
        </div>
        <!-- Hết bộ lọc -->
        
        <!-- Phần content chính  -->
        <div class="row py-1">
            <div class="col-1">
            </div>
            <div class="col-10 ">
                
                <div class="row">
                    
                    <div class="col-8">
                        <!-- dòng 1 -->
                        <div class="row py-1">
                            <?php
                                if(isset($_GET['Topic'])){
                                    $topic = $_GET['Topic'];
                                    
                                    $book_in_topic = $book->getBookByTopic($topic);
                                    if($book_in_topic){
                                        while($book_in_topic_rs = $book_in_topic->fetch_assoc()){
                                            // $i--;
                                        ?>
                                        <!-- SACH -->
                                        <div class="col-3">
                                        <div class="card  " style="width: 100%; height:320px">
                                            <img class="py-3" style="width: 100%; height: 100%; object-fit: cover;" src="ad_review/uploads/<?php echo $book_in_topic_rs['Img_product'] ?>">
                                            <div class="card-body">
                                                <div class="col">
                                                    <div class="row">
                                                        <h5 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;" class="card-title link" class="card-title"><a href="./bdetail.php" ><?php echo $book_in_topic_rs['Bookname'] ?></a></h5>
                                                    </div>
                                                    <!-- <div class="r">
                                                        <p class="text-success"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br></p>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                    } 
                                }
                                    }else {
                                        // Hiển thị tất cả sách nếu không chọn chủ đề
                                        $all_books = $book->showBook();
                                        if ($all_books) {
                                            while ($all_books_rs = $all_books->fetch_assoc()) {
                                    ?>
                                                <!-- SACH -->
                                                <div class="col-3">
                                                    <div class="card" style="width: 100%; height:320px">
                                                        <img class="py-3" style="width: 100%; height: 100%; object-fit: cover;" src="ad_review/uploads/<?php echo $all_books_rs['Img_product'] ?>">
                                                        <div class="card-body">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <h5 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;" class="card-title link">
                                                                        <a href="./bdetail.php"><?php echo $all_books_rs['Bookname'] ?></a>
                                                                    </h5>
                                                                </div>
                                                                <!-- <div class="r">
                                                                    <p class="text-success">
                                                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br>
                                                                    </p>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                           
                           
                                    

                        

                        </div>
                        
                        
                
                    </div>

                    
                    <div class="col-4">
                        
                        <div class="row py-1">
                                <div class="card" style="width: 400px">
                                <?php
                                // TÌM ẢNH CỦA BOOK ĐƯỢC RV
                                $rv = new Review();
                                $rv_list = $rv->showReview_home();
                                if($rv_list){
                                    $i=$rv_list->num_rows;
                                    while($result = $rv_list->fetch_assoc()){
                                        $i--;
                                ?>
                                    <div class="card-body">
                                        
                                        <!-- ẢNH SÁCH -->
                                        <img class="py-3" src="ad_review/uploads/<?php
                                            $book = new Book();
                                            $book_list = $book->showBook();
                                            // Duyệt qua tất cả các topic để tìm topic phù hợp
                                            while($book_result = $book_list->fetch_assoc()) {
                                                if ($result['BookID'] == $book_result['BookID']){
                                                    echo $book_result['Img_product'];
                                                    break;
                                                }
                                            }
                                        ?>" class="card-img-top" alt="Bạn không thông minh lắm đâu.jpg">
                                        <!-- TÊN SÁCH -->
                                        <h5 class="card-title">
                                        <?php
                                            $book = new Book();
                                            $book_list = $book->showBook();
                                            // Duyệt qua tất cả các topic để tìm topic phù hợp
                                            while($book_result = $book_list->fetch_assoc()) {
                                                if ($result['BookID'] == $book_result['BookID']){
                                                    echo $book_result['Bookname'];
                                                    break;
                                                }
                                            }
                                        ?>
                                        </h5>
                                        <p style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;" class="card-title" class="card-text"><?php echo $result['Content']?></p>
                                        <small><?php echo $result['Create_at']?></small><br>
                                        <a href="./rvdetail.php" class="btn btn-primary">Xem thêm</a>
                                        <?php
                                                }
                                            }
                                            ?>
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
<?php
    include './inc/footer.php'
?>  