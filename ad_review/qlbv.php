<?php
    include './inc/sidebar.php';
    include './classes/book.php';
    

?>
    <div class="main-content">
        
        <h1><b>DANH SÁCH SÁCH</b></h1>
        <div class="search-wrapper">
            <form class='search' action="qlbv.php" method="get">
                    <input type="text" name="search" /> <br> <br>
                    <input type="submit" name="OK" value="Tìm kiếm"/>
            </form>
            <a href="./motasach.php"><button class="btn">Thêm sách</button></a>
        </div>
        <table class="product-items">
            <thead>
                <tr>
                    <th class="product-prop product-img">Ảnh</th>
                    <th class="product-prop product-name">ID sách</th>
                    <th class="product-prop product-name">Tên sách</th>
                    <th class="product-prop product-name">Tác giả</th>
                    <th class="product-prop product-name">Nội dung</th>
                    <th class="product-prop product-button">Chủ đề</th>
                    <th class="product-prop product-time">Ngày tạo</th>
                    <th class="product-prop product-time">Năm xuất bản</th>
                    <!-- <th class="product-prop product-button">Xóa</th>
                    <th class="product-prop product-button">Sửa</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $book = new Book();
                    $book_list = $book->showBook();
                    if($book_list){
                        $i=0;
                        while($book_list->fetch_assoc()){
                            $i++;
                    ?>
                    <td><img src="avt.png" alt="" /></td>
                    <td><?php echo $i?></td>
                    <td>Tên sách A</td>
                    <td>Tác giả A</td>
                    <td>Nội dung</td>
                    <td>Chủ đề</td>
                    <td>01/01/2024</td>
                    <td>2024</td>
                    <td><a href="#"><button class="btn">Xóa</button></a></td>
                    <td><a href="#"><button class="btn">Sửa</button></a></td>
                    <?php
                        }
                    }
                    ?>
                </tr>
            </tbody>
        </table>
            
            <div class="clear-both"></div>
    </div>
</div>
    
</body>
</html>