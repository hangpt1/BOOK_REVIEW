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
    class Comment {
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function showCmt(){
            $query = "SELECT * FROM comment order by CommentID desc";
            $result = $this->db->select($query);
            return $result;
        }
        public function deleteCmt($id){
            $query = "DELETE FROM comment WHERE CommentID = '$id'";
            $result = $this->db->delete($query);
            if($result){
                $alert = "<span style='color:green;!important' class='success'>Xoá bình luận thành công</span>";
                return $alert . "<br>" . "<br>";
            }else{
                $alert = "<span style='color:green;!important' class='success'>Xoá bình luận  không thành công </span>";
                return $alert . "<br>" . "<br>";
            }
    
        }
        
        
    }
    
?>