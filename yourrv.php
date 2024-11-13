
<?php
    include './inc/header.php';
?>     
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include_once dirname(__FILE__) . '/classes/book.php';
    include_once dirname(__FILE__) . '/classes/topic.php';
    include_once dirname(__FILE__) . '/classes/review.php';

    include_once dirname(__FILE__) . '/inc/header.php';
?>  
<?php
    $book = new Book();
    $topics = new Topic();
    $fm = new Format();
    if(isset($_GET['BookID'])){
        $id = $_GET['BookID'];
    }

    $book_list_left = $book->myselfReview($_SESSION['UserID']);
    $book_list_right = $book->myselfNotReview();
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
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Tất cả</option>
                                    <option value="1">Cuốn sách liên quan</option>
                                    <option value="3">Cuốn sách tải lên gần đây</option>
                                </select>

                                <!-- Chủ đề -->
                                <select class="form-select mx-2" aria-label="Default select example">
                                    <option selected>Chủ đề</option>
                                    <option value="1">Tiểu Thuyết</option>
                                    <option value="2">Tiểu Thuyết</option>
                                    <option value="3">Lịch sử</option>
                                    <option value="3">Kinh tế</option>
                                    <option value="3">Lịch sử</option>
                                    <option value="3">Khoa học</option>
                                    <option value="3">Kinh Dị</option>
                                </select>
                                <!-- số sao -->
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Số sao</option>
                                    <option value="1">5</option>
                                    <option value="2">4</option>
                                    <option value="3">3</option>
                                    <option value="3">2</option>
                                    <option value="3">1</option>
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
                            <!-- SÁCH 1 -->
                                <?php
                                    if($book_list_left){
                                        $i=$book_list_left->num_rows;
                                        while($result = $book_list_left->fetch_assoc()){
                                            $i--;
                                    ?>
                            <div class="col-3">
                                   
                                <div class="card  " style="width: 100%; height:320px">
                                
                                    <img class="py-3" style="width: 100%; height: 100%; object-fit: cover;" src="ad_review/uploads/<?php echo $result['Img_product'] ?>">
                                    <div class="card-body">
                                        <div class="col">
                                            <div class="row">
                                                <h5 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;" class="card-title link" class="card-title"><a href="./bdetail.php" ><?php echo $result['Bookname'] ?></a></h5>
                                            </div>
                                            <div class="r">
                                                <p class="text-success"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <?php

                    
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
                              
                                if($book_list_right){
                                    $i=$book_list_right->num_rows;
                                    while($result = $book_list_right->fetch_assoc()){
                                        $i--;
                                ?>
                                    <div class="card-body">
                                        
                                        <!-- ẢNH SÁCH -->
                                        <img class="py-3" src="ad_review/uploads/<?php
                                           
                                            // Duyệt qua tất cả các topic để tìm topic phù hợp
                                            while($book_result = $book_list_left->fetch_assoc()) {
                                                if ($result['BookID'] == $book_result['BookID']){
                                                    echo $book_result['Img_product'];
                                                    break;
                                                }
                                            }
                                        ?>" class="card-img-top" alt="Bạn không thông minh lắm đâu.jpg">
                                        <!-- TÊN SÁCH -->
                                        <h5 class="card-title">
                                        <?php
                                            
                                            // Duyệt qua tất cả các topic để tìm topic phù hợp
                                            while($book_result = $book_list_left->fetch_assoc()) {
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
<?php
    include './inc/footer.php'
?>  