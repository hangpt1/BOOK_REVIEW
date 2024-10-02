Danh sách những trang cần code:
- home.php: trang chủ; yourcmt.php: xem lại những cmt trước đó của mình; yourrv.php: xem lại những bài rv trước đó của mình (Hoài) 27/9
- login.php:đăng nhập;signup.php: đăng ký; đổi mk, lấy lại mk (Hằng) 27/9
- writerv.php: trang để tạo bài viết rv; bookdetailrv.php: chi tiết cuốn sách (Ánh) 29/9
- adrv.php: Quản lý bài viết của người dùng; adcmt.php: QUẢN LÝ CMT; adwrite.php: quản lý bài viết ad (Dương)26/9
- Csdl Huyền:27/9
  + users ( UserID, Email, Username, Password, Avatar)
  + books ( BookID, Bookname, Author, Published_year, Description, Image, Create_at( ngay tao) )
  + comment (CommentID, UserID, BookID, Comment)
  + topics (TopicID, Topicname)
  + topicbook (TopicID, BookID)
  + book_rating (UserID, BookID, rate)
  + comment_rating ( CommentID, UserID, rate)
  + admin (name, password)
  + reviews(ReviewID, UserID, BookID, Content, created_at(giờ đăng))
