<?php

$filepath = realpath(dirname(__FILE__));
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once ($filepath . '/../lib/database.php');
include_once ($filepath . '/../helper/format.php');
?>
<?php
    class Review {
        private $db;
        // private $fm;
        public function __construct()
        {
            $this->db = new Database();
            // $this->fm = new Format();
        }
        public function showReview_ad(){
            $query = "SELECT * FROM reviews order by ReviewID desc";
            $result = $this->db->select($query);
            return $result;
        }
        public function showReview_home(){
            // nếu mà được duyệt thì mới hiển thị lên home
            $query = "SELECT * FROM reviews WHERE Status = 'Đã duyệt' order by ReviewID desc";
            $result = $this->db->select($query);
            return $result;
        }
        public function deleteReview($id){
            $query = "DELETE FROM reviews WHERE ReviewID = '$id'";
            $result = $this->db->delete($query);
            if($result){
                $alert = "<span style='color:green;!important' class='success'>Xoá bài đánh giá thành công</span>";
                return $alert . "<br>" . "<br>";
            }else{
                $alert = "<span style='color:green;!important' class='success'>Xoá bài đánh giá  không thành công </span>";
                return $alert . "<br>" . "<br>";
            }
    
        }
        public function approveReview($id) {
            $query = "UPDATE reviews SET Status = 'Đã duyệt' WHERE ReviewID = '$id'";
            $result = $this->db->update($query);
            if ($result) {
                return "<span style='color:green;'>Review đã được duyệt thành công</span>"."<br>"."<br>";
            } else {
                return "<span style='color:red;'>Duyệt review thất bại</span>"."<br>"."<br>";
            }
        }
        
        public function generateNewReviewId() {
            // Lấy ReviewID cao nhất từ bảng reviews
            $query = "SELECT MAX(ReviewID) AS max_review_id FROM reviews";
            $result = $this->db->select($query); // Giả sử $this->db->select() thực hiện truy vấn SQL
            if ($result) {
                $row = $result->fetch_assoc();
                $maxReviewId = $row['max_review_id'];
                // Nếu không có dữ liệu, bắt đầu từ ReviewID = 1
                return $maxReviewId ? $maxReviewId + 1 : 1;
            }
            return 1; // Nếu không có ReviewID nào, trả về 1
        }
    //    HÀM THÊM RV
        public function addReview($userID, $bookID, $Create_at, $status, $data) {
            // Lấy UserID từ session
            $userID = Session::get('UserID');
            $status = 'Chưa duyệt';
            
            // Lấy và làm sạch các dữ liệu đầu vào
            $star = (int)mysqli_real_escape_string($this->db->link, $data['star']);
            $reviewContent = mysqli_real_escape_string($this->db->link, $data['reviewContent']);
        
            // Kiểm tra các trường không được để trống
            if ($reviewContent == "" || $star == "") {
                $alert = "<span style='color:red;'>Bạn không được bỏ trống</span>";
                return $alert . "<br><br>";
            } else {
                // Kiểm tra xem $star có nằm trong khoảng hợp lệ hay không
                if ($star <= 5 && $star >= 0) {
                    // Thực hiện câu lệnh INSERT vào cơ sở dữ liệu
                    $query = "INSERT INTO reviews (UserID, BookID, Content, star, Create_at, Status) 
                              VALUES ('$userID', '$bookID', '$reviewContent', '$star', '$Create_at', '$status')";
                    $result = $this->db->insert($query);
                    if ($result) {
                        $alert = "<span style='color:green;'>Đăng bài thành công</span>";
                        return $alert . "<br><br>";
                    } else {
                        $alert = "<span style='color:red;'>Đăng bài không thành công</span>";
                        return $alert . "<br><br>";
                    }
                } else {
                    return "<span style='color:red;'>Số sao phải là số nguyên từ 0 đến 5</span><br><br>";
                }
            }
        }
        // Hàm Tính Trung Bình Số Sao của Cuốn Sách
        public function calculateAverageStar($bookID) {
            // Tính số sao trung bình từ bảng đánh giá
            $query = "
                SELECT AVG(star) AS average_star 
                FROM reviews 
                WHERE BookID = '$bookID' AND Status = 'Đã duyệt'";
                
            $result = $this->db->select($query);
            if ($result) {
                $row = $result->fetch_assoc();
                $averageStar = round($row['average_star'], 1); // Làm tròn đến 1 chữ số
                
                // Cập nhật giá trị số sao trung bình vào bảng sách
                $updateQuery = "
                    UPDATE books 
                    SET average_star = '$averageStar' 
                    WHERE BookID = '$bookID'";
                
                $this->db->update($updateQuery);
                
                return $averageStar; // Trả về giá trị trung bình
            }
            return 0; // Nếu không có đánh giá nào, trả về 0
        }

        
      
    }
    
?>