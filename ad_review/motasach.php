
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
    // Nếu như sever rq = post thì lấy dữ liệu
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']) )
    {
        // $bookName  = $_POST['bookName'];
        // $author  = $_POST['author'];
        // $publishedYear  = $_POST['publishedYear'];
        // $description  = $_POST['description'];
        // $bookImage  = $_FILES['bookImage'];
        // $topic = $_POST['topic'];
        // $created_at  = date('Y-m-d H:i:s'); // Tự động lấy thời gian hiện tại

        // check format cho thông tin login
        $addBook = $book->insertBook($_POST, $_FILES);

    }
?>
        <div class="main-content">
            <div class="box">
                    <h3 class="title">Book Review</h3>
                <?php
                if(isset($addBook)){
                    echo $addBook;
                }
                ?>
                <form class='addsach' action="motasach.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="input-field">
                        <label for="book-title">Tên cuốn sách:</label>
                        <input type="text" name="bookName" id="book-name" class="input" placeholder="Nhập tên cuốn sách"  >
                    </div>

                    <div class="input-field">
                        <label for="author">Tác giả:</label>
                        <input type="text" name="author" id="author" class="input" placeholder="Nhập tên tác giả"  >
                    </div>

                    <div class="input-field">
                        <label for="publish-year">Năm xuất bản:</label>
                        <input type="text" name="publishedYear" id="publish-year" class="input" placeholder="Năm xuất bản"  >
                    </div>

                    <div class="input-field">
                        <label for="description">Mô tả:</label>
                        <textarea id="description" name="description" class="input" placeholder="Mô tả sách" rows="5"  ></textarea>
                    </div>
                    <div class="input-field">
                        <!-- <label for="topic">Thể loại:</label> -->
                        <select id="topic" name="topic" >
                            <option>Chọn thể loại</option>

                            <?php
                            $tp = new Topic();
                            $tp_list = $tp->showTopic();
                            if($tp_list){
                                // var_dump($tp_list);
                                while($result = $tp_list->fetch_assoc()){
                            ?>
                            <option value="<?php echo $result['TopicID']?>"><?php echo $result['Topicname']?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="input-field">
                        <label for="image">Thêm ảnh:</label>
                        <input type="file" id="image" name="bookImage" >
                    </div>
        
                    

                    <div class="">
                        <input type="submit" name="submit" class="submit" value="Thêm" onclick="return confirmSubmission()">
                    </div>
                </form>
                
            </div>
        </div>
    </div>      
    </div>
</body>
</html>   
    
