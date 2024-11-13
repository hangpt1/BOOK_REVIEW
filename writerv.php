<?php
    include './inc/header.php';
?>   
<?php
    $userID = Session::get('UserID');
    $rv = new Review();
    $book = new Book();
    
    if(isset($_GET['ReviewID'])&& $_GET['BookID'] && $_GET['UserID']){
        $BookID = $_GET['BookID'];
        $UserID = $_GET['UserID'];

    }
    $Create_at = date("Y-m-d H:i:s");;
    // Nếu như sever rq = post thì lấy dữ liệu
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']) )
    {
        $status = 'Chưa duyệt';
        $addReview = $rv->addReview($userID, $BookID, $Create_at,$status, $_POST);
    }
    
    
?>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <h1 class="title">Viết Review</h1>
            </div>
            <?php
                if(isset($addReview)){
                    echo $addReview;
                }
                ?>
                
            <form action="" method="POST" enctype="multipart/form-data">
            <?php
                if(isset($_GET['BookID'])){
                    $bookID = $_GET['BookID'];
                    $book_in_rv = $book->getBookById($bookID);
                    if($book_in_rv){
                        while($book_in_rv_rs = $book_in_rv->fetch_assoc()){
                ?>
                <p name="bookID" class="book-title">Tên Cuốn Sách: <span id="book-title"><?php echo $book_in_rv_rs['Bookname']; ?></span></p>
                <p class="author">Tác giả: <span id="book-title"><?php echo $book_in_rv_rs['Author']; ?></span></p>

                <p class="Create_at">Ngày đăng: <span id="book-title"><?php echo $Create_at = date("Y-m-d H:i:s")?></span></p>
                <?php
                        }
                    }
                }?>
                <div class="input-field">
                    <label for="reviewContent">Review cuốn sách:</label>
                    <textarea name="reviewContent" id="reviewContent" class="input" placeholder="Câu chuyện cuốn sách ra sao. Hãy kể cho chúng tôi biết!" rows="5" ></textarea>
                </div>
                
                <div class="input-field">
                        <label for="star">Số sao:</label>
                        <input type="text" name="star" id="star" class="input" placeholder="Bạn cho sách này mấy sao?"  >
                    </div>

                <div class="input-field">
                    <input name="submit" type="submit" class="submit" value="Đăng Review">
                </div>
                
            </form>
                      
        </div>
  
<?php
    include './inc/footer.php'
?>  