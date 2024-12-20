
<?php
// Lấy đường dẫn đúng của file
$filepath = realpath(dirname(__FILE__));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once ($filepath . '/../lib/database.php');
include_once ($filepath . '/../helper/format.php');
?>

<?php
    class Book {
        private $db;
        private $fm;
        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function insertBook($data, $file){

            // Kết nối với cơ sở dữ liệu
            $bookName = mysqli_real_escape_string($this->db->link, $data['bookName']);
            $author = mysqli_real_escape_string($this->db->link, $data['author']);
            $publishedYear = mysqli_real_escape_string($this->db->link, $data['publishedYear']);
            $description = mysqli_real_escape_string($this->db->link, $data['description']);
            $topic = mysqli_real_escape_string($this->db->link, $data['topic']);
            $star = 0;
            // $created_at = mysqli_real_escape_string($this->db->link, $created_at);
            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['bookImage']['name'];
            $file_size = $_FILES['bookImage']['size'];;
            $file_temp = $_FILES['bookImage']['tmp_name'];
            // kiểm tra hình ảnh và lấy ha cho vào uploads
            $div = explode('.',$file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $upload_image = "uploads/".$unique_image;

            
            // Nếu người dùng bỏ trống
            if ($bookName ==""|| $author == ""|| $publishedYear == ""|| $description ==""|| $topic ==""|| $file_name ==""){
                $alert = "<span style='color:red;!important' class='success'>Bạn không được bỏ trống</span>";
                return $alert . "<br>" . "<br>";
            }else{
                // nếu người dùng nhập sai năm
                $currentYear = date("Y");
                if (!is_numeric($publishedYear) || strlen($publishedYear) != 4 ||$publishedYear <= 1450 || $publishedYear >= ($currentYear + 2)) {
                    $alert = "<span style='color:red;' class='success'>Năm xuất bản không hợp lệ!</span>";
                    return $alert . "<br>" . "<br>";
                }
                move_uploaded_file($file_temp, $upload_image);
                // thêm vào scdl
                $query = "INSERT INTO books(Bookname, Author, Published_year, De, Topic,Img_product, star) VALUES('$bookName', '$author', '$publishedYear', '$description','$topic', '$unique_image','$star')";
                $result = $this->db->insert($query);
                if($result){
                    $alert = "<span style='color:green;!important' class='success'>Thêm sách thành công</span>";
                    return $alert . "<br>" . "<br>";
                }else{
                    $alert = "<span style='color:red;!important' class='success'>Thêm sách không thành công</span>";
                    return $alert . "<br>" . "<br>";
                }
            }
            
        }
        public function showBook(){
            $query = "SELECT * FROM books order by BookID desc";
            $result = $this->db->select($query);
            return $result;

        }
        public function getBookById($id){
            $query = "SELECT * FROM books WHERE BookID = '$id'";
            $result = $this->db->select($query);
            return $result;
        }
        public function getBookByTopic($topic){
            $query = "SELECT * FROM books WHERE Topic = '$topic'";
            $result = $this->db->select($query);
            return $result;
        }
        public function getBookBystar($bid){
            $query = "SELECT 
            BookID,
            FLOOR(SUM(star) / COUNT(ReviewID)) AS average_star
            FROM 
                reviews
            WHERE 
                BookID = '$bid'
            GROUP BY 
                BookID";
            $bid_rs = $this->db->select($query);
            $query = "SELECT * FROM books WHERE average_star = '$bid_rs'";
            $result = $this->db->select($query);
            return $result;
        }
        
        
        public function UpdateBook($data, $file,$id){
            $bookName = mysqli_real_escape_string($this->db->link, $data['bookName']);
            $author = mysqli_real_escape_string($this->db->link, $data['author']);
            $publishedYear = mysqli_real_escape_string($this->db->link, $data['publishedYear']);
            $description = mysqli_real_escape_string($this->db->link, $data['description']);
            $topic = mysqli_real_escape_string($this->db->link, $data['topic']);
            // $created_at = mysqli_real_escape_string($this->db->link, $created_at);
            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['bookImage']['name'];
            $file_size = $_FILES['bookImage']['size'];;
            $file_temp = $_FILES['bookImage']['tmp_name'];
            // kiểm tra hình ảnh và lấy ha cho vào uploads
            // phân tách hai phần nội dung và đuôi
            $div = explode('.',$file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $upload_image = "uploads/".$unique_image;
            // Nếu người dùng bỏ trống
            if ($bookName ==""|| $author == ""|| $publishedYear == ""|| $description ==""|| $topic ==""){
                $alert = "<span style='color:red;!important' class='success'>Bạn không được bỏ trống</span>";
                return $alert . "<br>" . "<br>";
            }else{
                if(!empty($file_name)){
                    if ($file_size >2048) {
                        $alert = "<span style='color:red;!important' class='success'>Kích thước hình ảnh không được lớn hơn 2MB</span>";
                        return $alert . "<br>" . "<br>";
                    }elseif(in_array($file_ext, $permited)===false){
                        $alert = "<span class='error'>Bạn chỉ có thể tải lên:-".implode(',', $permited). "</span>";
                        return $alert . "<br>" . "<br>";
    
                    }
                    $query = "UPDATE books SET
                    Bookname = '$bookName',
                    Author = '$author',
                    Published_year = '$publishedYear',
                    De = '$description',
                    Topic = '$topic',
                    Img_product = '$unique_image'
                    WHERE BookID = $id";
                }else{
                    // nếu ko chọn ảnh
                    $query = "UPDATE books SET
                    Bookname = '$bookName',
                    Author = '$author',
                    Published_year = '$publishedYear',
                    De = '$description',
                    Topic = '$topic'
                    -- Img_product = '$unique_image'
                    WHERE BookID = $id";


                }
                $result =$this->db->update($query);
                if($result){
                    $alert = "<span style='color:green;!important' class='success'>Sửa sách thành công</span>";
                    return $alert . "<br>" . "<br>";
                }else{
                    $alert = "<span style='color:green;!important' class='success'>Sửa sách không thành công</span>";
                    return $alert . "<br>" . "<br>";
                }

            }

            
        }

        public function deleteBook($id){
            $query = "DELETE FROM books WHERE BookID = '$id'";
            $result = $this->db->delete($query);
            if($result){
                $alert = "<span style='color:green;!important' class='success'>Xoá sách thành công</span>";
                return $alert . "<br>" . "<br>";
            }else{
                $alert = "<span style='color:green;!important' class='success'>Xoá sách không thành công </span>";
                return $alert . "<br>" . "<br>";
            }

        }

        // public function showBookByTopic($topic_id) {
        //     $query = "SELECT * FROM books WHERE Topic = '$topic_id'";
        //     $result = $this->db->select($query);
        //     return $result;
        // }

        public function showSearchByText($text) {
            // Thêm ký tự % vào trước và sau $text để tìm kiếm bất kỳ chuỗi nào chứa $text
            $query = "SELECT * FROM books WHERE Bookname LIKE '%$text%'";
            $result = $this->db->select($query);
            return $result;
        }
        public function showRating($rating){
            $query = "SELECT b.BookID, b.Bookname, b.Author, b.Published_year, b.De, b.Topic, b.Img_product, 
                    r.ReviewID, r.UserID, r.Content, r.Create_at, cr.rate
            FROM books AS b
            JOIN reviews AS r ON b.BookID = r.BookID
            JOIN comment_rating AS cr ON r.ReviewID = cr.CommentID
            WHERE cr.rate = '$rating'";
            $result = $this->db->select($query);
            return $result;
        }

        public function showBookByTopicAndRating($topic_id, $rating){
            $query = "
            SELECT b.BookID, b.Bookname, b.Author, b.Published_year, b.De, b.Topic, b.Img_product, 
                 r.ReviewID, r.UserID, r.Content, r.Create_at, cr.rate
          FROM books AS b
          JOIN reviews AS r ON b.BookID = r.BookID
          JOIN comment_rating AS cr ON r.ReviewID = cr.CommentID
          WHERE b.Topic = '$topic_id' AND cr.rate = '$rating'";

          $result = $this->db->select($query);
            return $result;
        }

        public function myselfReview($idUser){
            $query = "SELECT b.BookID, b.Bookname, b.Author, b.Published_year, b.De, b.Topic, b.Img_product, 
            r.ReviewID, r.UserID, r.Content, r.Create_at, cr.rate
                FROM books AS b
                JOIN reviews AS r ON b.BookID = r.BookID
                JOIN comment_rating AS cr ON r.ReviewID = cr.CommentID
                WHERE cr.UserID = '$idUser'";
                $result = $this->db->select($query);
                return $result;
        }

        public function myselfNotReview() {
            $query = "SELECT b.BookID, b.Bookname, b.Author, b.Published_year, b.De, b.Topic, b.Img_product
                      FROM books AS b
                      LEFT JOIN reviews AS r ON b.BookID = r.BookID
                      LEFT JOIN comment_rating AS cr ON r.ReviewID = cr.CommentID
                      WHERE cr.UserID IS NULL";
                      
            $result = $this->db->select($query);
            return $result;
        }
        // Lọc và Hiển Thị Sách Theo Số Sao Trung Bình

        public function getBooksByStarRating($starRating) {
            $query = "
                SELECT b.*, ROUND(AVG(r.star), 1) AS average_star
                FROM books AS b
                JOIN reviews AS r ON b.BookID = r.BookID
                WHERE r.Status = 'Đã duyệt'
                GROUP BY b.BookID
                HAVING average_star = '$starRating'
                ORDER BY average_star DESC";
            $result = $this->db->select($query);
            return $result;
        }
        

    }

        
    


    
?>