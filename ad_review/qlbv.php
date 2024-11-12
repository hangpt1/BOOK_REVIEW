<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include './inc/sidebar.php';
    include '../classes/book.php';
    include '../classes/topic.php';
    include_once '../helper/format.php';
    
?>
<?php
    $book = new Book();
    $fm = new Format();
    if(isset($_GET['BookID'])){
        $id = $_GET['BookID'];
        $delete_book = $book->deleteBook($id);
    }
?>
    <div class="main-content">
        
        <h1><b>DANH SÁCH SÁCH</b></h1>
        <?php
            if(isset($delete_book)){
                echo $delete_book;
            }
            ?>
        <div class="search-wrapper">
            
            
            <a href="./motasach.php"><button class="btn">Thêm sách</button></a>
        </div>
        <table class="product-items">
            <thead>
                <tr>
                    <th class="product-prop product-img">Ảnh</th>
                    <th class="product-prop product-name">ID sách</th>
                    <th class="product-prop product-name">Tên sách</th>
                    <th class="product-prop product-name">Tác giả</th>
                    <th class="product-prop product-time">Năm xuất bản</th>
                    <th class="product-prop product-name">Nội dung</th>
                    <th class="product-prop product-button">Chủ đề</th>
                    <th class="product-prop product-button">Xóa</th>
                    <th class="product-prop product-button">Sửa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $book_list = $book->showBook();
                    if($book_list){
                        
                        $i=$book_list->num_rows;
                        while($result = $book_list->fetch_assoc()){
                            $i--;
                    ?>
                    <td><img src="uploads/<?php echo $result['Img_product'] ?>"></td>
                    <td><?php echo $result['BookID']?></td>
                    <td><?php echo $result['Bookname'] ?></td>
                    
                    <td><?php echo $result['Author'] ?></td>
                    <td><?php echo $result['Published_year'] ?></td>
                    <td><?php echo $fm->textShorten($result['De'], 50) ?></td>
                    <td><?php 
                        $tp = new Topic();
                        $tp_list = $tp->showTopic();
                        // Duyệt qua tất cả các topic để tìm topic phù hợp
                        while($tp_result = $tp_list->fetch_assoc()) {
                            if ($result['Topic'] == $tp_result['TopicID']){
                                echo $tp_result['Topicname'];
                                break;
                            }
                        }
                    ?></td>
                    <td><a href="book_edit.php?BookID=<?php echo $result['BookID']?>"><button class="btn">Sửa</button></a></td>
                    <td><a href="?BookID=<?php echo $result['BookID']?>"><button class="btn">Xóa</button></a></td>
                    
                    
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