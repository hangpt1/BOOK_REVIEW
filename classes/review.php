
<?php
    class Review {
        private $db;
        // private $fm;
        public function __construct()
        {
            $this->db = new Database();
            // $this->fm = new Format();
        }
        public function showReview(){
            $query = "SELECT * FROM reviews order by ReviewID desc";
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
        
    }
    
?>