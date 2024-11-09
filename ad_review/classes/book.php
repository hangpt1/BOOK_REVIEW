
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../lib/database.php';
include '../helper/format.php';

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
            if ($bookName ==""|| $author = ""|| $publishedYear == ""|| $description ==""|| $topic ==""|| $file_name ==""){
                $alert = "<span style='color:red;!important' class='success'>Bạn không được bỏ trống</span>";
                return $alert . "<br>" . "<br>";
            }else{
                move_uploaded_file($file_temp, $upload_image);
                // thêm vào scdl
                $query = "INSERT INTO books(Bookname, Author, Published_year, De, Topic,Img_product) VALUES('$bookName', '$author', '$publishedYear', '$description','$topic', '$unique_image')";
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
    }
?>