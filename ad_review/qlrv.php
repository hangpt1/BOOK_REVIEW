<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include './inc/sidebar.php';
    include '../classes/book.php';
    include '../classes/review.php';
    include_once '../helper/format.php';
    
?>
<?php
    $rv = new Review();
    $fm = new Format();
    if(isset($_GET['ReviewID'])){
        $id = $_GET['ReviewID'];
        $delete_review = $rv->deleteReview($id);
    }
    if (isset($_GET['approveReview']) && isset($_GET['action']) && $_GET['action'] == 'approve') {
        $id = $_GET['approveReview'];
        $approve_review = $rv->approveReview($id);
    }
?>
    <div class="main-content">
        
        <h1><b>DANH SÁCH BÀI ĐÁNH GIÁ</b></h1>
        <?php
            if(isset($delete_review)){
                echo $delete_review;
            }
            if (isset($approve_review)) {
                echo $approve_review;
            }
            ?>
        
        <table class="review-items">
            <thead>
                <tr>
                    
                    <th class="product-prop product-img">ID Review</th>
                    <th class="product-prop product-name">ID Người dùng</th>
                    <th class="product-prop product-name">Tên sách</th>
                    <th class="product-prop product-name">Nội dung</th>
                    <th class="product-prop product-name">Số sao</th>
                    <th class="product-prop product-name">Ngày tạo</th>
                    <th class="product-prop product-name">Trạng thái</th>
                    <th class="product-prop product-name">Thao tác</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $rv_list = $rv->showReview_ad();
                    if($rv_list) {
                        while($result = $rv_list->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $result['ReviewID'] ?></td>
                    <td><?php echo $result['UserID'] ?></td>
                    <td><?php 
                        $book = new Book();
                        $book_list = $book->getBookByID($result['BookID']); 
                        // $book_list = $book->showBook();
                        $book_result = $book_list->fetch_assoc();
                        
                        if ($result['BookID'] ==$book_result['BookID']){
                            
                            echo $book_result['Bookname'];
                        }
                        
                            
                     ?></td>
                    <td><?php echo $fm->textShorten($result['Content'], 50) ?></td>
                    <td><?php echo $result['star'] ?></td>
                    <td><?php echo date("d/m/Y", strtotime($result['Create_at'])) ?></td>
                    
                    <!-- Kiểm tra trạng thái và hiển thị với màu sắc tương ứng -->
                    <td>
                        <?php if ($result['Status'] == 'Đã duyệt') { ?>
                            <span class="status-approved">Đã duyệt</span>
                        <?php } else { ?>
                            <span class="status-pending">Chưa duyệt</span>
                        <?php } ?>
                    </td>

                    <!-- Button "Duyệt" chỉ hiển thị nếu trạng thái là "Chưa duyệt" -->
                    <td>
                        <?php if ($result['Status'] == 'Chưa duyệt') { ?>
                            <a href="?approveReview=<?php echo $result['ReviewID'] ?>&action=approve">
                                <button class="btn">Duyệt</button>
                            </a>
                        <?php } ?>
                        <a href="?ReviewID=<?php echo $result['ReviewID'] ?>&action=delete">
                            <button class="btn">Xóa</button>
                        </a>
                    </td>
                </tr>
                <?php
                        }
                    }
                ?>
            </tbody>


        </table>
            
            <div class="clear-both"></div>
    </div>
</div>
    
</body>
</html>



 