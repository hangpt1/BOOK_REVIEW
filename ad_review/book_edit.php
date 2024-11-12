
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include './inc/sidebar.php';
?>
<?php
    include '../classes/book.php';
    include '../classes/topic.php';
?>
<?php
    $book = new Book();
    if(!isset($_GET['BookID']) || $_GET['BookID']== NULL){
        echo "<script>window.location = 'book_edit.php'</script>";
    }else{
        $id = $_GET['BookID'];
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        $updateBook = $book->UpdateBook($_POST, $_FILES, $id);
        // dựa vào id để update
    }
   
?>
        <div class="main-content">
            <div class="box">
                    <h3 class="title">Sửa thông tin sách</h3>
                <?php
                if(isset($updateBook)){
                    echo $updateBook;
                }
                ?>

                <?php
                    $get_book_by_id = $book->getBookById($id);
                    if ($get_book_by_id){
                        while($result_book = $get_book_by_id->fetch_assoc()){
                ?>
                <form class='addsach' action="" method="POST" enctype="multipart/form-data">
                    
                    <div class="input-field">
                        <label for="book-title">Tên cuốn sách:</label>
                        <input type="text" name="bookName" id="book-name" class="input" value="<?php echo $result_book['Bookname']?>"  >
                    </div>

                    <div class="input-field">
                        <label for="author">Tác giả:</label>
                        <input type="text" name="author" id="author" class="input" value="<?php echo $result_book['Author']?>"  >
                    </div>

                    <div class="input-field">
                        <label for="publish-year">Năm xuất bản:</label>
                        <input type="text" name="publishedYear" id="publish-year" class="input" value="<?php echo $result_book['Published_year']?>"  >
                    </div>

                    <div class="input-field">
                        <label for="description">Mô tả:</label>
                        <textarea id="description" name="description" class="input"   ><?php echo $result_book['De']?></textarea>
                    </div>
                    <div class="input-field">
                        <!-- <label for="topic">Thể loại:</label> -->
                        <select id="topic" name="topic" >
                            <option>Chọn thể loại</option>

                            <?php
                            $tp = new Topic();
                            $tp_list = $tp->showTopic();
                            if($tp_list){
                                while($result_tp = $tp_list->fetch_assoc()){
                                    if ($result_book['Topic'] ==$result_tp['TopicID']){
                                        ?>
                                        <option selected value="<?php echo $result_book['Topic']?>"><?php echo $result_tp['Topicname']?></option>
                                    
                                        <?php
                                    }else{
                                        ?>
                                        <option value="<?php echo $result_book['Topic']?>"><?php echo $result_tp['Topicname']?></option>
                                    <?php
                                    }
                                    ?>
                            ?>
                            <?php
                            
                            
                            ?>

                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="input-field">
                        <img src="uploads/<?php echo $result_book['Img_product'] ?>" width="120"><br>
                        <input type="file" id="image" name="bookImage" >
                    </div>
        
                    

                    <div class="">
                        <input type="submit" name="submit" class="submit" value="Sửa" onclick="return confirmSubmission()">
                    </div>
                </form>
                <?php
                        }
                    }
                ?>
                
            </div>
        </div>
    </div>      
    </div>
</body>
</html>   
    
