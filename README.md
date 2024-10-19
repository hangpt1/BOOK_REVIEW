Danh sách những trang cần code:
- home.php: trang chủ; yourcmt.php: xem lại những cmt trước đó của mình; yourrv.php: xem lại những bài rv trước đó của mình (Hoài) 27/9
- login.php:đăng nhập;signup.php: đăng ký; đổi mk, lấy lại mk (Hằng) 27/9
- writerv.php: trang để tạo bài viết rv; bookdetailrv.php: chi tiết cuốn sách (Ánh) 29/9
- adrv.php: Quản lý bài viết của người dùng; adcmt.php: QUẢN LÝ CMT; adwrite.php: quản lý bài viết ad (Dương)26/9
- Csdl Huyền:27/9
  + users ( UserID, Email, Username, Password, Avatar, Role )
  + books ( BookID, Bookname, Author, Published_year, Description, Image, Create_at( ngay tao) )
  + comment (CommentID, UserID, BookID, Comment)
  + topics (TopicID, Topicname)
  + topicbook (TopicID, BookID)
  + book_rating (UserID, BookID, rate)
  + comment_rating ( CommentID, UserID, rate)
  + reviews(ReviewID, UserID, BookID, Content, created_at(giờ đăng))
1. Class User
Mục đích: Đại diện cho người dùng trong hệ thống.
Thuộc tính:
  UserID: ID của người dùng (định danh duy nhất).

  Email: Email của người dùng.
  Username: Tên đăng nhập.
  Password: Mật khẩu của người dùng.
  Avatar: Ảnh đại diện.
  Role: Vai trò là người dùng hay admin, người dùng thì mặc định Null
Phương thức:
  login($email, $password): Đăng nhập vào hệ thống.
  signup($email, $username, $password): Đăng ký tài khoản.
  changePassword($oldPassword, $newPassword): Đổi mật khẩu.
  resetPassword($email): Lấy lại mật khẩu.
3. Class Book
Mục đích: Đại diện cho một cuốn sách trong hệ thống.
Thuộc tính:
  BookID: ID của cuốn sách.
  Bookname: Tên cuốn sách.
  Author: Tác giả.
  Published_year: Năm xuất bản.
  Description: Mô tả sách.
  Image: Hình ảnh của sách.
  Create_at: Ngày tạo sách trong hệ thống.
Phương thức:
  getBookDetails($BookID): Lấy chi tiết một cuốn sách.
  addBook($bookData): Thêm sách mới.
  editBook($BookID, $bookData): Sửa thông tin sách.
  deleteBook($BookID): Xóa sách khỏi hệ thống.
4. Class Comment
Mục đích: Đại diện cho một bình luận của người dùng về sách.
Thuộc tính:
  CommentID: ID của bình luận.
  UserID: ID của người dùng đã bình luận.
  BookID: ID của cuốn sách được bình luận.
  Comment: Nội dung bình luận.
Phương thức:
  addComment($UserID, $BookID, $comment): Thêm bình luận mới.
  editComment($CommentID, $comment): Sửa bình luận.
  deleteComment($CommentID): Xóa bình luận.
5. Class Review
Mục đích: Đại diện cho bài viết đánh giá của người dùng về sách.
Thuộc tính:
  ReviewID: ID của bài viết đánh giá.
  UserID: ID của người dùng đã viết bài.
  BookID: ID của cuốn sách được đánh giá.
  Content: Nội dung bài viết đánh giá.
  created_at: Ngày viết bài đánh giá.
Phương thức:
  addReview($UserID, $BookID, $content): Thêm bài viết đánh giá mới.
  editReview($ReviewID, $content): Sửa bài viết đánh giá.
  deleteReview($ReviewID): Xóa bài viết đánh giá.
6. Class Topic
Mục đích: Đại diện cho các chủ đề của sách.
Thuộc tính:
  TopicID: ID của chủ đề.
  Topicname: Tên chủ đề.
  Phương thức:
  addTopic($topicName): Thêm chủ đề mới.
  editTopic($TopicID, $topicName): Sửa thông tin chủ đề.
  deleteTopic($TopicID): Xóa chủ đề.
7. Class Rating
Mục đích: Quản lý đánh giá sách và bình luận.
Thuộc tính:
  UserID: ID của người đánh giá.
  BookID: ID của cuốn sách được đánh giá.
  rate: Điểm đánh giá (từ 1-5).
  (Có thể có thêm CommentID nếu đánh giá bình luận).
Phương thức:
  rateBook($UserID, $BookID, $rate): Đánh giá cuốn sách.
  rateComment($UserID, $CommentID, $rate): Đánh giá một bình luận.
8. Class Admin
Mục đích: Đại diện cho quản trị viên của hệ thống.
Phương thức:
  manageBooks(): Quản lý sách (thêm, sửa, xóa sách).
  manageUsers(): Quản lý người dùng (khóa tài khoản, chỉnh sửa thông tin).
  manageComments(): Quản lý bình luận (xóa, kiểm duyệt bình luận).
  manageReviews(): Quản lý các bài viết đánh giá.
9. Class TopicBook
Mục đích: Liên kết giữa sách và chủ đề.
Thuộc tính:
  TopicID: ID của chủ đề.
  BookID: ID của sách.
Phương thức:
  addBookToTopic($BookID, $TopicID): Thêm sách vào chủ đề.
  removeBookFromTopic($BookID, $TopicID): Xóa sách khỏi chủ đề.