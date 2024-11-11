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
    $fm = new Format();
    if(isset($_GET['BookID'])){
        $id = $_GET['BookID'];
    }
?> 
<?php
    $rv = new Review();
    $fm = new Format();
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
                                    $book_list = $book->showBook();
                                    if($book_list){
                                        $i=$book_list->num_rows;
                                        while($result = $book_list->fetch_assoc()){
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
                        <?php
                        $rv_list = $rv->showReview();
                        $rvbook_id = $result_rv['BookID'];
                        $book_result = $book->getBookById($rvbook_id);
                        if($rv_list){
                            
                            // $i=$rv_list->num_rows;
                            while($result_rv = $rv_list->fetch_assoc()){
                                $i--;
                        ?>
                        <div class="row py-1">
                            
                            <div class="card" style="width: 400px">
                                <div class="card-body">
                                    
                                    <img class="py-3" src="ad_review/uploads/<?php echo $book_result['Img_product']?>" class="card-img-top" alt="Bạn không thông minh lắm đâu.jpg">
                                    
                                    <h5 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;" class="card-title" class="card-title">

                                        bừhjewf
                                    </h5>
                                    <p style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;" class="card-title" class="card-text">Đây là nội dung bài đăng Đây là nội dung bài đăng Đây là nội dung bài đăng Đây là nội dung bài đăng Đây là nội dung bài đăng</p>
                                    <small>3 giờ trước</small><br>
                                    <a href="./rvdetail.php" class="btn btn-primary">Xem thêm</a>
                                </div>


                            </div>

                        </div>
                        <?php

                    
                                    }
                                }
                                ?>
                        
                        
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