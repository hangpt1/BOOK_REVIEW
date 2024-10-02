<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/rv.css">
    <title>Book Review</title>
    <script>
        function confirmSubmission() {
            const confirmation = confirm("Bạn có chắc chắn muốn đăng không?");
            return confirmation; // Trả về true hoặc false
        }

        // Hiệu ứng cho các input khi focus
        function addFocusEffect(input) {
            input.classList.add('focus');
        }

        function removeFocusEffect(input) {
            if (input.value === '') {
                input.classList.remove('focus');
            }
        }
    </script>
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <header>Book Review</header>
            </div>

            <form action="#" method="POST" enctype="multipart/form-data">

                <div class="input-field">
                    <label for="book-title">Tên cuốn sách:</label>
                    <input type="text" id="book-title" class="input" placeholder="Nhập tên cuốn sách" required onfocus="addFocusEffect(this)" onblur="removeFocusEffect(this)">
                </div>

                <div class="input-field">
                    <label for="author">Tác giả:</label>
                    <input type="text" id="author" class="input" placeholder="Nhập tên tác giả" required onfocus="addFocusEffect(this)" onblur="removeFocusEffect(this)">
                </div>

                <div class="input-field">
                    <label for="review-title">Tiêu đề:</label>
                    <input type="text" id="review-title" class="input" placeholder="Tiêu đề cuốn sách" required onfocus="addFocusEffect(this)" onblur="removeFocusEffect(this)">
                </div>

                <div class="input-field">
                    <label for="review">Review cuốn sách:</label>
                    <textarea id="review" class="input" placeholder="Câu chuyện cuốn sách ra sao. Hãy kể cho chúng tôi biết!" rows="5" required onfocus="addFocusEffect(this)" onblur="removeFocusEffect(this)"></textarea>
                </div>

                <div class="input-field">
                    <label for="image">Thêm ảnh:</label>
                    <input type="file" id="image" name="image" accept="image/*" required>
                </div>

                <div class="input-field">
                    <label for="video">Thêm video:</label>
                    <input type="file" id="video" name="video" accept="video/*">
                </div>

                <div class="input-field rating">
                    <label for="rating">Thể loại:</label>
                    <select id="rating" name="rating" required>
                        <option value="1">Thể loại 1</option>
                        <option value="2">Thể loại 2</option>
                        <option value="3">Thể loại 3</option>
                        <option value="4">Thể loại 4</option>
                        <option value="5">Thể loại 5</option>
                    </select>
                </div>

                <div class="input-field">
                    <input type="submit" class="submit" value="Đăng Review" onclick="return confirmSubmission()">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
