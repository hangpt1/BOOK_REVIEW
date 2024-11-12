<?php
    include './inc/sidebar.php';
    include_once '../classes/book.php';
    include_once '../classes/cmt.php';
    include_once '../classes/user.php';


    include_once '../classes/review.php';
    // include_once '../classes/login.php';
    $book = new Book();
    $rv = new Review();
    $cmt = new Comment();
    $user = new Setting();
    


    
    
    

?>
    <div class="main-content">
    <h1><b>TRANG CHỦ</b></h1>
    <div class="dashboard">
    <div class="box category">
        <?php
        $book_list = $book->showBook();
        if($book_list){
            $i=$book_list->num_rows;
            
        ?>
        <h2><?php echo $i?></h2>
        <?php

                    
                        
                    }
                    ?>
        <p>SÁCH</p>
    </div>
    <div class="box posts">
        <?php
        $rv_list = $rv->showReview();
        if($rv_list){
            $i=$rv_list->num_rows;
        ?>
        <h2><?php echo $i?></h2>
        <?php               
        }
        ?>
        <p>BÀI ĐĂNG</p>
    </div>
    <div class="box members">
        <?php
        $user_list = $user->showUser();
        if($user_list){
            $i=$user_list->num_rows;
        ?>
        <h2><?php echo $i?></h2>
        <?php               
        }
        ?>
        <p>NGƯỜI DÙNG</p>

    </div>
    <div class="box comments">
    <?php
        $cmt_list = $cmt->showCmt();
        if($cmt_list){
            $i=$cmt_list->num_rows;
        ?>
        <h2><?php echo $i?></h2>
        <?php               
        }
        ?>
        <p>BÌNH LUẬN</p>

    </div>
</div>

    
</body>
</html>