<?php
include './classes/book.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Khởi tạo đối tượng Book
$book = new Book();

// Lấy ID sách từ URL (ví dụ: ?id=1)
$bookId = isset($_GET['id']) ? $_GET['id'] : 0;

// Lấy thông tin sách theo ID
$result = $book->getBookById($bookId);
$bookDetails = $result->fetch_assoc();

// Kiểm tra xem sách có tồn tại không
if ($bookDetails) {
    // Ensure $bookDetails is an array before trying to access it
    $book = $bookDetails;  // getBookById already returns an associative array
} else {
    echo "Sách không tồn tại.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sách</title>
</head>
<body>
    <h1>Chi Tiết Sách</h1>

    <div>
        <h2><?php echo htmlspecialchars($book['Bookname']); ?></h2>
        <p><strong>Tác giả:</strong> <?php echo htmlspecialchars($book['Author']); ?></p>
        <p><strong>Năm xuất bản:</strong> <?php echo htmlspecialchars($book['Published_year']); ?></p>
        <?php if (!empty($book['Img_product'])): ?>
            <p><strong>Hình ảnh:</strong></p>
            <img src="uploads/<?php echo htmlspecialchars($book['Img_product']); ?>" alt="Hình ảnh sách" width="200">
        <?php endif; ?>
    </div>
</body>
</html>
