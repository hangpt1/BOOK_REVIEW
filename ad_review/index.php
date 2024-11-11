<?php
    include './inc/sidebar.php';
    include_once '../classes/book.php';
    include_once '../classes/cmt.php';

    include_once '../classes/review.php';
    // include_once '../classes/login.php';
    $book = new Book();
    $rv = new Review();

    
    
    

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
        <h2><?php echo $ri?></h2>
        <?php

                    
                        
                    }
                    ?>
        <p>BÀI ĐĂNG</p>
    </div>
    <div class="box members">
        <h2>44</h2>
        <p>THÀNH VIÊN</p>

    </div>
    <div class="box comments">
        <h2>65</h2>
        <p>BÌNH LUẬN</p>

    </div>
</div>

    
</body>
</html>