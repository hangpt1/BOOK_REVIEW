
<?php
    include './inc/sidebar.php';
?>

        <div class="main-content">
            <div class="box">
                
                <div class="top-header">
                    <h1 class="title">Book Review</h1>
                </div>

                <form action="#" method="POST" enctype="multipart/form-data">
                    
                    <div class="input-field">
                        <label for="book-title">Tên cuốn sách:</label>
                        <input type="text" name="book-title" id="book-name" class="input" placeholder="Nhập tên cuốn sách" required onfocus="addFocusEffect(this)" onblur="removeFocusEffect(this)">
                    </div>

                    <div class="input-field">
                        <label for="author">Tác giả:</label>
                        <input type="text" name="author" id="author" class="input" placeholder="Nhập tên tác giả" required onfocus="addFocusEffect(this)" onblur="removeFocusEffect(this)">
                    </div>

                    <div class="input-field">
                        <label for="publish-year">Năm xuất bản:</label>
                        <input type="text" name="year" id="publish-year" class="input" placeholder="Năm xuất bản" required onfocus="addFocusEffect(this)" onblur="removeFocusEffect(this)">
                    </div>

                    <div class="input-field">
                        <label for="description">Mô tả:</label>
                        <textarea id="description" name="description" class="input" placeholder="Mô tả sách" rows="5" required onfocus="addFocusEffect(this)" onblur="removeFocusEffect(this)"></textarea>
                    </div>

                    <div class="input-field">
                        <label for="image">Thêm ảnh:</label>
                        <input type="file" id="image" name="image" accept="image/*" required>
                    </div>
        
                    <div class="input-field">
                        <label for="topic">Thể loại:</label>
                        <select id="topic" name="topic" required>
                            <option value="1">Thể loại 1</option>
                            <option value="2">Thể loại 2</option>
                            <option value="3">Thể loại 3</option>
                            <option value="4">Thể loại 4</option>
                            <option value="5">Thể loại 5</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <input type="submit" name="submit" class="submit" value="Thêm" onclick="return confirmSubmission()">
                    </div>
                </form>
                
            </div>
        </div>
    </div>
        
        
        
    </div>


    
    

    
</body>
</html>   
    
