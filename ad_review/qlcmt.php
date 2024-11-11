<?php
    include './inc/sidebar.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include_once '../classes/cmt.php';
    include_once '../helper/format.php';
    include_once '../lib/database.php';

    

?>
<?php
    $cmt = new Comment();
    $fm = new Format();
    if(isset($_GET['cmtID'])){
        $id = $_GET['cmtID'];
        $delete_cmt = $cmt->deleteCmt($id);
    }
    
    // if (isset($_GET['approveReview']) && isset($_GET['action']) && $_GET['action'] == 'approve') {
    //     $id = $_GET['approveReview'];
    //     $approve_review = $rv->approveReview($id);
    // }
?>
    <div class="main-content">
    <h1><b>DANH SÁCH BÌNH LUẬN</b></h1>
    <?php
            if(isset($delete_cmt)){
                echo $delete_cmt;
            }
            ?>
<table class="product-items">
    <thead>
        <tr>
            <th class="product-prop product-img">ID bình luận</th>
            <th class="product-prop product-name">ID Người dùng</th>
            <th class="product-prop product-name">ID Review</th>
            <th class="product-prop product-time">Nội dung</th>
            <th class="product-prop product-time">Ngày tạo </th>
            <th class="product-prop product-button">Thao tác</th>
            
        </tr>
    </thead>
    <tbody>
        <!-- Thêm các hàng dữ liệu ở đây -->
        <tr>
            <?php
                $cmt_list = $cmt->showCmt();
                if($cmt_list){
                    
                    $i=$cmt_list->num_rows;
                    while($result = $cmt_list->fetch_assoc()){
                        $i--;
            ?>
            <td><?php echo $result['CommentID']?></td>
            <td><?php echo $result['UserID']?></td>
            <td><?php echo $result['ReviewID']?></td>
            <td><?php echo $fm->textShorten($result['Comment'], 50)?></td>
            <td><?php echo date("d/m/Y", strtotime($result['Create_at'])) ?></td>
            <td><a href="?cmtID=<?php echo $result['CommentID']?>"><button class="btn">Xóa</button></a></td>
                    
            
        </tr>
        <?php

                    
                        }
                    }
                    ?>
    </tbody>
</table>
            
            <div class="clear-both"></div>
        </div>
    
</body>
</html>